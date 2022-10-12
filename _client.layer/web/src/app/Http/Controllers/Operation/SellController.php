<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index()
    {
        $sell = collect([1,2,3,1,1,1,1,1,1,1,]);

        return view('operation.sell.index',[
            'sells' => $sell
        ]);
    }
}
