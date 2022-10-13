<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getAgentByAccount($account)
    {
        return User::where('account_id',$account)
                    ->where('shop_id',null)
                    ->get();
    }
}
