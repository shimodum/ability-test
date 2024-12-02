<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #f5f5f5;
            padding: 1rem;
            text-align: center;
            position: relative;
            border-bottom: 1px solid #ddd;
        }

        header h1 {
            margin: 0;
            font-size: 1.8rem;
            color: #5e463c;
        }

        .logout {
            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
            background-color: #e3e3e3;
            color: #5e463c;
            border: 1px solid #ccc;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 4px;
        }

        .logout:hover {
            background-color: #d3d3d3;
        }

        main {
            padding: 2rem;
        }

        h2 {
            text-align: center;
            font-size: 2rem;
            color: #5e463c;
            margin-bottom: 2rem;
        }

        .search-bar {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr auto auto;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .search-bar input,
        .search-bar select,
        .search-bar button {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-bar button {
            background-color: #5e463c;
            color: white;
            border: none;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #4b3a30;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin: 1rem 0;
            gap: 0.5rem;
        }

        .pagination a {
            padding: 0.5rem 1rem;
            border: 1px solid #ccc;
            text-decoration: none;
            color: #5e463c;
            border-radius: 4px;
        }

        .pagination a:hover {
            background-color: #f9f9f9;
        }

        .export-button {
            background-color: #5e463c;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 1rem;
        }

        .export-button:hover {
            background-color: #4b3a30;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            background-color: white;
        }

        th, td {
            padding: 0.75rem;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f9f9f9;
            color: #5e463c;
        }

        .details-button {
            background-color: #5e463c;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .details-button:hover {
            background-color: #4b3a30;
        }
    </style>
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
        <a href="#" class="logout">logout</a>
    </header>

    <main>
        <h2>Admin</h2>
        <div class="search-bar">
            <input type="text" placeholder="名前やメールアドレスを入力してください">
            <select>
                <option value="all">性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">その他</option>
            </select>
            <select>
                <option value="all">お問い合わせの種類</option>
                <option value="1">商品の交換について</option>
                <option value="2">商品の返品について</option>
            </select>
            <input type="date">
            <button>検索</button>
            <button>リセット</button>
        </div>

        <!-- ページネーションを検索ボタンの下に配置 -->
        <div class="pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </div>

        <button class="export-button">エクスポート</button>

        <table>
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>山田 太郎</td>
                    <td>男性</td>
                    <td>test@example.com</td>
                    <td>商品の交換について</td>
                    <td><button class="details-button">詳細</button></td>
                </tr>
                <!-- 繰り返し部分 -->
            </tbody>
        </table>
    </main>
</body>

</html>
