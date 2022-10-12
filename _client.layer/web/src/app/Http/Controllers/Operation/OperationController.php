<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index($shop)
    {
        $sell = [];

        return view('operation.index',[
            'sells' => $sell
        ]);
    }
}
