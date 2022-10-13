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

        // dd($operations->json());

        return view('operation.index',[
            'operations' => $operations->json()
        ]);
    }
}
