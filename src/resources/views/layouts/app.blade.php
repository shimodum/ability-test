<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FashionablyLate')</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
        <nav>
            <a href="{{ route('logout') }}">Logout</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2024 FashionablyLate</p>
    </footer>
</body>

</html>
