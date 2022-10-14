<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OperationController extends Controller
{
    public function index($id)
    {
        $operations =  Http::get(config('app.services.operation')."/sessions/{$id}/operations");
        $produits =  Http::get(config('app.services.product')."products/accounts/".session('apiUser')['user']['account_id']);

        // dd($operations->json());

        return view('operation.index',[
            'operations' => ($operations->json() ?? []),
            'products' => ($produits->json() ?? []),
            'sessionId' => $id
        ]);
    }

    public function store(Request $request, $id)
    {
        // dd($id, $request->all());

        $operations =  Http::post(config('app.services.operation')."/sessions/{$id}/operations",[
            'type' => $request->type,
            'quantity' => $request->quantity,
            'price_id' => $request->price,
            "other_price" => null
        ]);

        dd($operations->json());

    }
}
