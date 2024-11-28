<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <style>
        /* ページ固有のスタイル */
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #8b7268;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #735b52;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .register-link {
            margin-top: 15px;
            display: block;
            text-align: center;
            font-size: 14px;
            text-decoration: none;
            color: #8b7268;
        }
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header-title">FashionablyLate</div>
        <a href="{{ route('register') }}" class="header-login">register</a>
    </header>

    <!-- ログインフォーム -->
    <div class="container">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" placeholder="例: coachtech1106">
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">ログイン</button>
        </form>
        <a href="{{ route('register') }}" class="register-link">新規登録はこちら</a>
    </div>
</body>

</html>
