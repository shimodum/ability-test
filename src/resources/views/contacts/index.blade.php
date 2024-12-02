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

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 1.8rem;
            color: #5e463c;
            text-align: center;
            margin-bottom: 1.5rem;
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
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            width: 100%;
        }

        .name-fields {
            display: flex;
            gap: 1rem; /* フィールド間のスペースを追加 */
        }

        .name-fields div {
            flex: 1;
        }

        .radio-group {
            display: flex;
            gap: 1rem;
        }

        .tel-container {
            display: flex; /* 横並びにする */
            gap: 0.5rem; /* 各フィールド間のスペース */
            align-items: center;
        }

        .submit-btn {
            padding: 0.75rem;
            background-color: #5e463c;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        .submit-btn:hover {
            background-color: #4b3a30;
        }

        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
    </header>

    <div class="container">
        <h1>Contact</h1>
        <form action="{{ route('contacts.confirm') }}" method="POST" novalidate>
            @csrf
            <div>
                <label for="lastname">お名前</label>
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
