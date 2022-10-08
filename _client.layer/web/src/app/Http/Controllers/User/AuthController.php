<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.authentication.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $response = Http::post('http://127.0.0.1:8000/account/login',[
            'email' => $credentials['email'],
            'password' => $credentials['password']
        ]);

        Session::put('apiUser', $response->json());
        //  session(['apiUser', ]);
        // dd(Session::get('apiUser'));

        return redirect()->route('admin.dashboard');


        // if (true) {
        //     session(['apiUser', $response->body()]);
        //     dump(session('apiUser'));
        //     dd($response->collect());
        // }



    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }


}
