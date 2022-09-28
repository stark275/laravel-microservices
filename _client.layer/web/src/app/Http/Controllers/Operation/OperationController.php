<?php

namespace App\Http\Controllers\Operation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index()
    {
        $sell = collect([1,2,3,1,1,1,1,1,1,1,]);

        return view('operation.index',[
            'sells' => $sell
        ]);
    }
}
