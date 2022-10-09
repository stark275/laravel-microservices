<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Shop;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index(Session $session)
    {
        return $session->getOperations();
    }
}
