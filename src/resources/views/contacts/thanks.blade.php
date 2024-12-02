<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thank you</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        h1 {
            font-size: 10rem;
            color: rgba(94, 70, 60, 0.1);
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        h2 {
            font-size: 1.8rem;
            color: #5e463c;
            margin-bottom: 2rem;
            z-index: 1;
        }

        .home-button {
            padding: 10px 20px;
            background-color: #5e463c;
            color: white;
            font-size: 14px;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            z-index: 1;
        }

        .home-button:hover {
            background-color: #4b3a30;
        }
    </style>
</head>

<body>
    <main>
        <h1>Thank you</h1>
        <h2>お問い合わせありがとうございました</h2>
        <a href="{{ route('contacts.index') }}" class="home-button">HOME</a>
    </main>
</body>

</html>
