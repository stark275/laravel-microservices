<?php

namespace App\Http\Controllers;

use App\Jobs\ShopCreated;
use App\Models\Shop;
use App\Models\User;
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

    public function attach(Request $request,Shop $shop)
    {
        $data = $request->validate([
            'user_id' => 'nullable|numeric'
        ]);

        $user = User::where('id', $data['user_id'])->update([
            'shop_id' => $shop->id
        ]);

        return $user;
    }
}
