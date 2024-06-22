@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
@endsection

@section('content')
<div class="shop__all">
    <form class="form__search" action="/">
        <div class="select-box">
            <select class="select area" type="select" placeholder="All area">
                <option class="option" value="">
                    <h4>All area</h4>
                </option>
                <option class="option">
                    <h4>東京</h4>
                </option>
                <option class="option">
                    <h4>大阪</h4>
                </option>
                <option class="option">
                    <h4>福岡</h4>
                </option>
            </select>
        </div>
        <div class="select-box">
            <select class="select genre" type="select" placeholder="All genre">
                <option class="option" value="">
                    <h4>All genre</h4>
                </option>
                <option class="option">
                    <h4>寿司</h4>
                </option>
                <option class="option">
                    <h4>焼肉</h4>
                </option>
                <option class="option">
                    <h4>居酒屋</h4>
                </option>
                <option class="option">
                    <h4>イタリアン</h4>
                </option>
                <option class="option">
                    <h4>ラーメン</h4>
                </option>
            </select>
        </div>
        <input class="search" type="search" placeholder="Search ...">
    </form>

    <div class="shop__items">
        <div class="shop__box number1">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
            <h3>仙人</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#寿司</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number2">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg">
            <h3>牛助</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#焼肉</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number3">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg">
            <h3>戦慄</h3>
            <div class="hashtag">
                <p>#福岡県</p>
                <p>#居酒屋</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number4">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg">
            <h3>ルーク</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#イタリアン</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number5">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg">
            <h3>志摩屋</h3>
            <div class="hashtag">
                <p>#福岡県</p>
                <p>#ラーメン</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number6">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg">
            <h3>香</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#焼肉</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number7">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg">
            <h3>JJ</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#イタリアン</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number8">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg">
            <h3>らーめん極み</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#居酒屋</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number9">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg">
            <h3>鳥雨</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#居酒屋</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number10">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
            <h3>築地色合</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#寿司</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number11">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg">
            <h3>晴雨</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#焼肉</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number12">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg">
            <h3>三子</h3>
            <div class="hashtag">
                <p>#福岡県</p>
                <p>#焼肉</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number13">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg">
            <h3>八戒</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#居酒屋</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number14">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
            <h3>福助</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#寿司</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number15">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg">
            <h3>ラー北</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#ラーメン</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number16">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg">
            <h3>翔</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#居酒屋</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number17">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
            <h3>経緯</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#寿司</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number18">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg">
            <h3>漆</h3>
            <div class="hashtag">
                <p>#東京都</p>
                <p>#焼肉</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number19">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg">
            <h3>THE TOOL</h3>
            <div class="hashtag">
                <p>#福岡県</p>
                <p>#イタリアン</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>

        <div class="shop__box number20">
            <img class="shop__img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg">
            <h3>木船</h3>
            <div class="hashtag">
                <p>#大阪府</p>
                <p>#寿司</p>
            </div>
            <div class="box__bottom">
                <button class="box__btn" type="submit">詳しくみる</button>
                <!-- ハートお気に入り -->
                <img class="heart__icon" src="img/heart.png">
            </div>
        </div>
    </div>
</div>
@endsection