<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
    </header>

    <main>
        <h2>Contact</h2>
        <form action="/confirm" method="post">
            @csrf
            <label for="name">お名前 ※</label>
            <input type="text" id="name" name="name" placeholder="例: 山田 太郎" required>

            <label>性別 ※</label>
            <div>
                <input type="radio" id="male" name="gender" value="男性" checked>
                <label for="male">男性</label>
                <input type="radio" id="female" name="gender" value="女性">
                <label for="female">女性</label>
                <input type="radio" id="other" name="gender" value="その他">
                <label for="other">その他</label>
            </div>

            <label for="email">メールアドレス ※</label>
            <input type="email" id="email" name="email" placeholder="例: test@example.com" required>

            <label for="phone">電話番号 ※</label>
            <input type="tel" id="phone" name="phone" placeholder="例: 080-1234-5678" required>

            <label for="address">住所 ※</label>
            <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>

            <label for="building">建物名</label>
            <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101">

            <label for="type">お問い合わせの種類 ※</label>
            <select id="type" name="type" required>
                <option value="" disabled selected>選択してください</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value="返品について">返品について</option>
                <option value="その他">その他</option>
            </select>

            <label for="message">お問い合わせ内容 ※</label>
            <textarea id="message" name="message" placeholder="お問い合わせ内容をご記入ください" required></textarea>

            <button type="submit">確認画面</button>
        </form>
    </main>
</body>

</html>
