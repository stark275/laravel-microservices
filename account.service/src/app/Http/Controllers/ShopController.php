<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return Shop::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'string'
        ]);

        return shop::create($request->all());
    }

    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'string'
        ]);

        return $shop->update($request->all());
    }

    public function show(Shop $shop)
    {
        return $shop;
    }
}
