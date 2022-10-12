<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = [1,8,7,7,4,5];

       return view('shop.index',[
            'shops' => $shops
        ]);
    }
}
