<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5ede6;
            padding: 10px 20px;
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

        form {
            display: grid;
            grid-template-columns: 1fr;
            row-gap: 15px;
        }

        label {
            font-size: 14px;
            color: #333;
        }

        input,
        select,
        textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }

        .name-fields {
            display: flex;
            gap: 15px; /* フィールド間のスペースを調整 */
        }

        .name-fields div {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .radio-group {
            display: flex;
            gap: 10px;
        }

        .tel-container {
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .tel-container span {
            margin: 0 5px;
        }

        .submit-btn {
            justify-self: center;
            padding: 10px 20px;
            background-color: #8b7268;
            color: white;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #6c5a4b;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-title">FashionablyLate</div>
    </header>

    <div class="container">
        <h1>Contact</h1>
        <form action="{{ route('contacts.confirm') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <div class="name-fields">
                    <div>
                        <input type="text" id="lastname" name="lastname" placeholder="例: 山田" value="{{ old('lastname') }}">
                        @error('lastname')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input type="text" id="firstname" name="firstname" placeholder="例: 太郎" value="{{ old('firstname') }}">
                        @error('firstname')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <label for="gender">性別</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="男性" {{ old('gender', '男性') == '男性' ? 'checked' : '' }}> 男性</label>
                <label><input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女性</label>
                <label><input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}> その他</label>
            </div>
            @error('gender')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="tel">電話番号</label>
            <div class="tel-container">
                <input type="text" id="tel1" name="tel1" placeholder="080" value="{{ old('tel1') }}" maxlength="3">
                <span>-</span>
                <input type="text" id="tel2" name="tel2" placeholder="1234" value="{{ old('tel2') }}" maxlength="4">
                <span>-</span>
                <input type="text" id="tel3" name="tel3" placeholder="5678" value="{{ old('tel3') }}" maxlength="4">
            </div>
            @error('tel1')
            <div class="error">電話番号を入力してください。</div>
            @enderror

            <label for="address">住所</label>
            <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
            @error('address')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="building">建物名</label>
            <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
            @error('building')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="category_id">お問い合わせの種類</label>
            <select id="category_id" name="category_id">
                <option value="">選択してください</option>
                <option value="商品のお届けについて" {{ old('category_id') == '商品のお届けについて' ? 'selected' : '' }}>商品のお届けについて</option>
                <option value="商品の交換について" {{ old('category_id') == '商品の交換について' ? 'selected' : '' }}>商品の交換について</option>
                <option value="商品トラブル" {{ old('category_id') == '商品トラブル' ? 'selected' : '' }}>商品トラブル</option>
                <option value="ショップへのお問い合わせ" {{ old('category_id') == 'ショップへのお問い合わせ' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                <option value="その他" {{ old('category_id') == 'その他' ? 'selected' : '' }}>その他</option>
            </select>
            @error('category_id')
            <div class="error">{{ $message }}</div>
            @enderror

            <label for="detail">お問い合わせ内容</label>
            <textarea id="detail" name="detail" rows="5" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
            @error('detail')
            <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit" class="submit-btn">確認画面</button>
        </form>
    </div>
</body>

</html>
