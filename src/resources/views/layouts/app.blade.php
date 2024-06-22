<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header>
        <div class="nav">

            <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
            <input id="drawer_input" class="drawer_hidden" type="checkbox">

            <!-- ハンバーガーアイコン -->
            <label for="drawer_input" class="drawer_open"><span></span></label>

            <!-- メニュー -->
            <nav class="nav_content">
                <ul class="nav_list">
                    <li class="nav_item item1"><a href="/">Home</a></li>
                    @guest
                    <li class="nav_item item2"><a href="http://localhost/register">Register</a></li>
                    <li class="nav_item item3">
                        <a href="http://localhost/login">Login</a>
                    </li>
                    @endguest

                    @if (Auth::check())
                    <li class="nav_item item2">
                        <form class="form__logout" action="/logout" method="post">
                            @csrf
                            <button class="logout__btn">Logout</button>
                        </form>
                    </li>

                    <li class="nav_item item3"><a href="">Mypage</a></li>
                    @endif
                </ul>
            </nav>

        </div>
        <h1>Rese</h1>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>