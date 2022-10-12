<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Http::get(config('app.services.account').'/shops');

        $shop = $shops->json();

        // dd($shops->json());
       return view('shop.index',[
            'shops' => $shops->json()
        ]);
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'type' => ['required', 'string'],
        ]);

        $shop = Http::post(config('app.services.account').'/shops',[
            'name' => $data['name'],
            'type' => $data['type'],
            'account_id' => 1
        ]);

        // dd($shop->json());

        return redirect()->route('admin.shops.index');
    }
}
