<?php

namespace App\Http\Controllers;

use App\Jobs\ShopCreated;
use App\Models\Shop;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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

        $shop =  Shop::create($request->all());
        ShopCreated::dispatch($shop->toArray());

        return $shop;
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
