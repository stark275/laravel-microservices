<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'firstname' => 'required|string',
            'role' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'phone' => 'required|string|unique:users,phone',
        ]);

        return User::create([
            'name' => $fields['name'],
            'firstname' => $fields['firstname'],
            'role' => $fields['role'],
            'email' => $fields['email'],
            'phone' => $fields['phone'],
            'password' => bcrypt('00000000')
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'string'
        ]);

        return $user->update($request->all());
    }

    public function show($user)
    {
        $user = User::find($user);

        return $user;
    }
}
