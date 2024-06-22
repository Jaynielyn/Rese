@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<form class="form" action="/register" method="post">
    @csrf
    <h3 class="register__ttl">Register</h3>
    <div class="content">
        <div class="item1">
            <img class="img" src="img/name.png">
            <input class="name" type="text" name="name" placeholder="Username" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="item2">
            <img class="img" src="img/email.png">
            <input class="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="item3">
            <img class="img" src="img/password.png">
            <input class="password" type="password" name="password" placeholder="Password" />
        </div>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <button class="submit" type="submit">登録</button>
    </div>
</form>
@endsection