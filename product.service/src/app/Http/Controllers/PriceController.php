<?php

namespace App\Http\Controllers;

use App\Jobs\PriceCreated;
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


            $price =  $product->prices()->create([
                'amount' => $data['amount']
            ]);

            //PriceCreated::dispatch($price->refresh()->toArray());

            return $price->refresh();
        }

        $response = [
            'error' => 'NewPriceNotSet',
        ];

        return response($response, 500);
    }

    private function unsetCurrentPrice(Product $product)
    {
        if ($product->getPrices()->count() > 0) {
            return $product->prices()->where('current', true)->update([
                'current' => false
            ]);
        }

        return true;
    }

}
