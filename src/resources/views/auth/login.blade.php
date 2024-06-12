@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<form>
    <h3 class="register">Login</h3>
    <div class="content">
        <div class="item2">
            <img class="img" src="img/email.png">
            <input class="email" type="email" placeholder="Email">
        </div>
        <div class="item3">
            <img class="img" src="img/password.png">
            <input class="password" type="password" placeholder="Password">
        </div>
        <button class="submit" type="submit">ログイン</button>
    </div>
</form>
@endsection