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
    <label for="last_name">お名前</label>
    <div>
        <input type="text" id="last_name" name="last_name" placeholder="例: 山田" required>
        <input type="text" id="first_name" name="first_name" placeholder="例: 太郎" required>
    </div>

    <label for="gender">性別</label>
    <div>
        <input type="radio" id="male" name="gender" value="男性" checked>
        <label for="male">男性</label>
        <input type="radio" id="female" name="gender" value="女性">
        <label for="female">女性</label>
        <input type="radio" id="other" name="gender" value="その他">
        <label for="other">その他</label>
    </div>

    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email" placeholder="例: test@example.com" required>

    <label for="tel">電話番号</label>
    <div>
        <input type="text" id="tel1" name="tel1" placeholder="例: 080" required>
        -
        <input type="text" id="tel2" name="tel2" placeholder="例: 1234" required>
        -
        <input type="text" id="tel3" name="tel3" placeholder="例: 5678" required>
    </div>

    <label for="address">住所</label>
    <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>

    <label for="building">建物名</label>
    <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101">

    <label for="category">お問い合わせの種類</label>
    <select id="category" name="category" required>
        <option value="" disabled selected>選択してください</option>
        <option value="1">商品のお届けについて</option>
        <option value="2">商品の交換について</option>
        <option value="3">商品トラブル</option>
        <option value="4">ショップへのお問い合わせ</option>
        <option value="5">その他</option>
    </select>

    <label for="message">お問い合わせ内容</label>
    <textarea id="message" name="message" placeholder="お問い合わせ内容をご記入ください" required></textarea>

    <button type="submit">確認画面</button>
</form>
    </main>
</body>

</html>
