<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    <title>確認画面</title>
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
    </header>

    <main>
        <h2>Confirm</h2>
        <table>
            <tr>
                <th>お名前</th>
                <td>山田 太郎</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>男性</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>test@example.com</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>08012345678</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>東京都渋谷区千駄ヶ谷1-2-3</td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>千駄ヶ谷マンション101</td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>商品の交換について</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。</td>
            </tr>
        </table>
        <button onclick="window.history.back()">修正</button>
        <button onclick="location.href='thanks.html'">送信</button>
    </main>
</body>

</html>
