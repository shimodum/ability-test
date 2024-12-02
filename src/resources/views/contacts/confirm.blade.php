<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>お問い合わせ内容の確認</title>
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

        main {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 1.8rem;
            color: #5e463c;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f5ede6;
            color: #5e463c;
            width: 30%;
        }

        td {
            color: #333;
        }

        button {
            padding: 0.75rem 1.5rem;
            background-color: #5e463c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #4b3a30;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .edit-link {
            display: inline-block;
            text-decoration: underline; /* 下線を表示 */
            color: #5e463c; /* テキストカラーを統一 */
            font-size: 1rem;
            padding: 0.75rem 1rem; /* ボタンと高さを揃える */
            background: none; /* 背景色をなしにする */
            border: none; /* ボーダーを消す */
            cursor: pointer; /* ポインタを指し示す */
        }

        .edit-link:hover {
            color: #4b3a30; /* マウスホバー時に色を変更 */
        }
    </style>
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
    </header>

    <main>
        <h2>Confirm</h2>
        <form action="{{ route('contacts.thanks') }}" method="post">
            @csrf
            <table>
                <tr>
                    <th>お名前</th>
                    <td>{{ $inputs['lastname'] ?? '' }} {{ $inputs['firstname'] ?? '' }}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>{{ $inputs['gender'] ?? '' }}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $inputs['email'] ?? '' }}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>{{ $inputs['tel1'] ?? '' }}-{{ $inputs['tel2'] ?? '' }}-{{ $inputs['tel3'] ?? '' }}</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $inputs['address'] ?? '' }}</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{ $inputs['building'] ?? '' }}</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>{{ $inputs['category_id'] ?? '' }}</td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>{{ $inputs['detail'] ?? '' }}</td>
                </tr>
            </table>
            <div class="actions">
                <button type="submit">送信</button>
                <a href="{{ route('contacts.index') }}" class="edit-link">修正</a>
            </div>
        </form>
    </main>
</body>

</html>
