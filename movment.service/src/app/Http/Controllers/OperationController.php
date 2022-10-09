<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Shop;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index(Session $session)
    {
        return $session->getOperations();
    }

    public function store(Request $request,Session $session)
    {

        $data = $request->validate([
            'type' => 'required|string',
            'quantity' => 'required|numeric',
            'price_id' => 'required|numeric',
            'other_price' => 'nullable|numeric'
        ]);

        return $session->operations()->create([
            'type' => $data['type'],
            'tva' => 16,
            'quantity' => $data['quantity'],
            'price_id' => $data['price_id'],
            'other_price' => $data['other_price']
        ]);
    }
}
