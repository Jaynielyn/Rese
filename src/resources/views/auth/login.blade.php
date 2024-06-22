@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<form class="form" action="/login" method="post">
    @csrf
    <h3 class="register">Login</h3>
    <div class="content">
        <div class="item2">
            <img class="img" src="img/email.png">
            <input class="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="item3">
            <img class="img" src="img/password.png">
            <input class="password" type="password" placeholder="Password" name="password" />
        </div>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <button class="submit" type="submit">ログイン</button>
    </div>
</form>
@endsection