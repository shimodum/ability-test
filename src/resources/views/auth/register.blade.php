<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f5f5f5;
            padding: 1rem;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        header h1 {
            font-size: 1.8rem;
            color: #5e463c;
            margin: 0;
        }

        .login-link {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: #e3e3e3;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            color: #5e463c;
            border: 1px solid #ccc;
        }

        .login-link:hover {
            background-color: #d3d3d3;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-container h2 {
            text-align: center;
            color: #5e463c;
            margin-bottom: 1rem;
        }

        .form-container label {
            display: block;
            margin-bottom: 0.5rem;
            color: #5e463c;
        }

        .form-container input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button {
            width: 100%;
            padding: 0.5rem;
            background-color: #5e463c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #4b3a30;
        }
    </style>
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
        <a href="/login" class="login-link">login</a>
    </header>

    <main>
        <div class="form-container">
            <h2>Register</h2>
            <form>
                <label for="name">お名前</label>
                <input type="text" id="name" placeholder="例: 山田 太郎">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" placeholder="例: test@example.com">
                <label for="password">パスワード</label>
                <input type="password" id="password" placeholder="例: coachtech1106">
                <button type="submit">登録</button>
            </form>
        </div>
    </main>
</body>

</html>
