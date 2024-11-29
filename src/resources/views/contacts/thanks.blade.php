<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
</head>

<body>
    <h1>Thank you</h1>
    <p>お問い合わせありがとうございました</p>
    <form action="{{ route('contacts.index') }}" method="get" style="display: inline;">
    <button type="submit" style="
        padding: 10px 20px;
        background-color: #8b7268;
        color: white;
        font-size: 14px;
        text-align: center;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    ">
        HOME
    </button>
    </form>

</body>

</html>
