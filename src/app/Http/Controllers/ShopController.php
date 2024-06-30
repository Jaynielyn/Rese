<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop_all');
    }

    public function thanks()
    {
        return view('thanks');
    }
}