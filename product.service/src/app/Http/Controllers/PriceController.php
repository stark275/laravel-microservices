<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(Product $product)
    {
        $data = [
            'product' => $product
        ];

        return  response($data, 200);
    }

    public function store(Request $request, Product $product)
    {
        $data = $request->validate([
            'amount' => 'required|numeric'
        ]);

        if ($this->unsetCurrentPrice($product)) {
            return $product->prices()->create([
                'amount' => $data['amount']
            ]);
        }

        $response = [
            'error' => 'NewPriceNotSet',
        ];

        return response($response, 500);
    }

    private function unsetCurrentPrice(Product $product)
    {
        return $product->prices()->where('current', true)->update([
            'current' => false
        ]);
    }


}
