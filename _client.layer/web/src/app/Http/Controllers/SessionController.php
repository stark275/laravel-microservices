<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SessionController extends Controller
{
    public function index($id)
    {
        $sessions =  Http::get(config('app.services.operation')."/shops/{$id}/sessions");

        // dd($sessions->json());

        return view('shop.session.index',[
            'sessions' => $sessions->json()['sessions'],
            'shop' => $sessions->json()['shop']
        ]);
    }
}
