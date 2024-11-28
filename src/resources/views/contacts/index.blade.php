<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <style>
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
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            font-size: 24px;
            color: #8b7268;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
        .form-group .name-fields {
            display: flex;
            gap: 10px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group .name-fields input {
            width: 50%; /* 姓名を分割 */
        }
        .form-group .radio-group {
            display: flex;
            gap: 10px;
        }
        .form-group .radio-group input {
            width: auto;
        }
        .submit-btn {
            display: block;
            margin: 0 auto; /* ボタンを中央に配置 */
            padding: 10px 20px; /* ボタンサイズを小さく調整 */
            background-color: #8b7268;
            color: white;
            font-size: 14px;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #6c5a4b;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-title">FashionablyLate</div>
    </header>

    <div class="container">
        <h1>Contact</h1>
        <form action="{{ route('contacts.confirm') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <div class="name-fields">
                    <input type="text" id="lastname" name="lastname" placeholder="例: 山田" value="{{ old('lastname') }}">
                    <input type="text" id="firstname" name="firstname" placeholder="例: 太郎" value="{{ old('firstname') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="gender">性別</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="男性" checked> 男性</label>
                    <label><input type="radio" name="gender" value="女性"> 女性</label>
                    <label><input type="radio" name="gender" value="その他"> その他</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="phone">電話番号</label>
                <div style="display: flex; gap: 10px;">
                    <input type="text" name="phone1" placeholder="080" maxlength="3" style="width: 30%;">
                    <input type="text" name="phone2" placeholder="1234" maxlength="4" style="width: 30%;">
                    <input type="text" name="phone3" placeholder="5678" maxlength="4" style="width: 30%;">
                </div>
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
            </div>
            <div class="form-group">
                <label for="category">お問い合わせの種類</label>
                <select id="category" name="category">
                    <option value="">選択してください</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">お問い合わせ内容</label>
                <textarea id="content" name="content" rows="5" placeholder="お問い合わせ内容をご記載ください">{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="submit-btn">確認画面</button>
        </form>
    </div>
</body>
</html>
