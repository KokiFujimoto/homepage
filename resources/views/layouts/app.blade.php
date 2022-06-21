<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <header class="d-flex">
        <h3 class="text-white">HAIR SALON ◯◯◯◯</h3>
        <div class="nav-items">
            <ul　class="list-inline list-unstyled">
                <li class ="list-inline-item"><a href="{{ route('home') }}">ホーム</a></li>
                <!-- <li class ="list-inline-item"><a href="{{ route('blog') }}">ブログ</a></li> -->
                <li class ="list-inline-item"><a href="https//www.google.com/maps/place/HAIR+SALON+SHIGEMATSU/@33.844497,132.7818808,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x57ac6e82927295a!8m2!3d33.844497!4d132.7840695"><i class="bi bi-geo-alt-fill"></i></a></li>
            </ul>
        </div>
    </header>

    @yield('content')

    <footer>
        <p>089-932-◯◯◯◯</p>
        <p class="copy-rights">©2021 by HAIR SALON ◯◯◯◯</p>
    </footer>
</body>
</html>