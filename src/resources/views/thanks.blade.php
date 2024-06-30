@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks">
    <div class="thanks__box">
        <h2>会員登録ありがとうございます</h2>
        <form class="thanks-page__form" action="/thanks" method="get">
            <button class="thanks__btn" type="button" onclick="location.href='/login'">ログインする</button>
        </form>
    </div>
</div>
@endsection