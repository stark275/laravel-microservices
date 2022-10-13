<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index($id)
    {
        $products =  Http::get(config('app.services.product').'/products/accounts/'.session('apiUser')['user']['account_id']);

        return view('product.index',[
            'products' => $products->json(),
            'accountId' => $id
        ]);
    }

    public function create($id)
    {
        // dd('loll');
        return view('product.create',[
            'accountId' => $id
        ]);
    }

    public function store(Request $request ,$id)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'name' => 'required|string',
            'model' => 'nullable|string',
            "brand" => "nullable|string",
            "other_description" => "nullable|string",
        ]);

        $product =  Http::post(config('app.services.product').'/products',[
            "type" => $data['type'],
            "name" => $data['name'],
            "model" => $data['model'],
            "brand" => $data['brand'],
            "account_id" => session('apiUser')['user']['account_id']
        ]);

       return redirect()->route('accounts.products.index',[$id]);

    }
}
