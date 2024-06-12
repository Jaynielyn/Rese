<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="public/css/common.css">
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
                    <li class="nav_item item1"><a href="">Home</a></li>
                    <li class="nav_item item2"><a href="">Register</a></li>
                    <li class="nav_item item3"><a href="">Login</a></li>
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