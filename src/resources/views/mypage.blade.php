@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="mypage">
    <h2>さん</h2>
    <div class="mypage__item">
        <div class="item1">
            <h3>予約状況</h3>
            <div class="book__box">
                <div class="book__box-top">
                    <img class="clock__icon" src="img/clock.png">
                    <p class="book__ttl">予約1</p>
                    <span class="round_btn"></span><!-- exit戻るボタン -->
                </div>
                <table>
                    <tr>
                        <th>Shop</th>
                        <td>店舗名</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>2024/4/4</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>17:00</td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>2</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="item2">
            <h3>お気に入り店舗</h3>
            <div class="like__box">
                <div class="like__item1">
                    <img class="img1" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
                    <div class="like__text">
                        <h4>仙人</h4>
                        <div class="like__tag">
                            <p>#東京</p>
                            <p>#寿司</p>
                        </div>
                        <div class="like__btn">
                            <button class="btn" type="submit">詳しくみる</button>
                            <img class="heart__icon" src="img/heart.png">
                        </div>
                    </div>
                </div>
                <div class="like__item2">
                    <img class="img2" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg">
                    <div class="like__text">
                        <h4>牛助</h4>
                        <div class="like__tag">
                            <p>#大阪</p>
                            <p>#焼肉</p>
                        </div>
                        <div class="like__btn">
                            <button class="btn" type="submit">詳しくみる</button>
                            <img class="heart__icon" src="img/heart.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection