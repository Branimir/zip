<?php

use App\Http\Controllers\App\AdsController;
use App\Http\Controllers\Auth\SecurityController;
use Illuminate\Support\Facades\Route;


/** public routes */
Route::get('/', [AdsController::class, 'index'])->name('app.home');
Route::get('/ads/{id}', [AdsController::class, 'show'])->name('app.ads.single');

Route::get('/about', function () {
    return view('app.pages.about');
})->name('pages.about');
Route::get('/auth/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/auth/register', [SecurityController::class, 'register'])
    ->name('auth.register.submit');
Route::get('/auth/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/auth/login', [SecurityController::class, 'login'])
    ->name('auth.login.submit');


/** end public routes */

/** app routes */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/ads', [AdsController::class, 'create'])
        ->name('app.ads.form');

    Route::post('/ads', [AdsController::class, 'store'])
        ->name('app.ads.submit');

});
/** end app routes */

/** admin routes */

/** end admin routes */
