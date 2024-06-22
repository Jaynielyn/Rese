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

    public function store(RegisterRequest $request)
    {
        if ($request->has('back')) {
            return redirect('/')->withInput();
        }

        $contact = $request->only(['name', 'email', 'password']);
        User::create($contact);

        return view('thanks');
    }
}
