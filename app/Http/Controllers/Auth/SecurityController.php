<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{
    public function register() {
        $userData = request()->only('email', 'password', 'name', 'phone');
        try {
            $userData['password'] = Hash::make($userData['password']);
            User::create($userData);
        } catch (\Exception $e) {
            throw new \Error($e->getMessage());
        }
        return redirect()->route('auth.login.form')->with('success', 'Successfully registered');
    }

    public function login() {
        $credentials = request()->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('app.home');
        }
        return redirect()->route('auth.login.form')->with('error', 'Invalid data');
    }
}
