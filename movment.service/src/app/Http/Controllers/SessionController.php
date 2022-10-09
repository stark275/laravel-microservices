<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Shop $shop)
    {
        return [
            'shop' => $shop,
            'sessions' => $shop->getSessions()
        ];
    }

    public function store(Request $request, Shop $shop)
    {
        $data = $request->validate([
            'status' => 'required|string',
            'agent_id' => 'required|numeric'
        ]);

        if ($this->closeLastOpenSession($shop)) {
            $session = $shop->sessions()->create([
                'status' => $data['status'],
                'agent_id' => $data['agent_id']
            ]);

            return $session;
        }

        return [
            'error' => 'Last work session not closed'
        ];
    }

    public function close(Shop $shop)
    {
        return $shop->sessions()->where('status', 'open')->update([
            'status' => 'closed'
        ]);
    }

    private function closeLastOpenSession(Shop $shop)
    {
        if ($shop->getSessions()->count() > 0) {
            return false;
        }

        return true;
    }


}
