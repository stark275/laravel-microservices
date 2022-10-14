<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SessionController extends Controller
{
    public function index($id)
    {

        // dd(session('apiUser'));

        $sessions =  Http::get(config('app.services.operation')."/shops/{$id}/sessions");
        $shop = Http::get(config('app.services.account')."/shops/{$id}");
        // dd($sessions->json());

        return view('shop.session.index',[
            'sessions' => ($sessions->json()['sessions'] ?? []),
            'shop' => $shop->json(),
            'sessionId' => $id
        ]);
    }

    public function store(Request $request, $id)
    {
        // dd($request->all());
        $userId = (int) session('apiUser')['user']['id'];

        $session = Http::post(config('app.services.operation')."/shops/{$id}/sessions",[
            'status' => $request->status,
            'agent_id' => $userId
        ]);

        return redirect()->route('shops.sessions.index',[$id]);
    }
}
