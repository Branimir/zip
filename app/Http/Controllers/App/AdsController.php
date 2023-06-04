<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\AdMedia;
use Illuminate\Support\Facades\Auth;

class AdsController extends Controller
{

    public function index() {
        $ads = Ad::when(request()->search, function ($q) {
            return $q
                ->where('title', 'LIKE', '%' . request()->search . '%')
                ->orWhere('description', 'LIKE', '%' . request()->search . '%');
        })
            ->with(['user', 'category', 'media', 'attributes'])->paginate(\request()->perPage ?? (int)env('APP_DEFAULT_PAGE_SIZE'));

        return view('app.home.index', ['ads' => $ads]);
    }

    public function show($id) {
        $ad = Ad::where('id', '=', $id);
        return view('app.ads.single', ['ad' => $ad, 'mainTitle' => 'Detalji']);
    }
    public function create()
    {
        $categories = AdCategory::all();
        return view("app.ads.create", [
            "mainTitle" => "Dodaj objavu",
            "categories" => $categories
        ]);
    }

    public function store()
    {
        $req = request();
        $ad = Ad::create([
            "title" => $req->title,
            "short_description" => $req->short_description,
            "description" => $req->description,
            "price" => $req->price,
            "category_id" => $req->category_id,
            "user_id" => Auth::user()->id,
            "price_history" => json_encode([
                "date" => (new \DateTime())->format("Y-m-d H:i:s"),
                "price" => $req->price
            ]),
            "status" => "published",
            "promotion_level" => "none",
            "type" => "sale"
        ]);

        foreach($req->file('images') as $file) {
            $fileName = $ad->id . '-' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            AdMedia::create([
                "ad_id" => $ad->id,
                "media_url" => $fileName
            ]);
        }

        return redirect()->route("app.home");
    }
}
