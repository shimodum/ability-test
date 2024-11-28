<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <style>
        /* 以下、ページ固有のスタイル */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5ede6;
            padding: 10px 20px;
            font-family: Arial, sans-serif;
            border-bottom: 1px solid #ddd;
        }
        .header-title {
            font-size: 20px;
            font-weight: bold;
            color: #8b7268;
        }
        .header-login {
            font-size: 14px;
            text-decoration: none;
            color: #8b7268;
            background-color: transparent;
            border: 1px solid #8b7268;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .header-login:hover {
            background-color: #8b7268;
            color: white;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-title">FashionablyLate</div>
        <a href="{{ route('login') }}" class="header-login">login</a>
    </header>

    <div class="container">
        <h1>Register</h1>
        <form action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" placeholder="例: 山田 太郎" value="{{ old('name') }}">
                @error('name')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
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
            <button type="submit">登録</button>
        </form>
    </div>
</body>
</html>
