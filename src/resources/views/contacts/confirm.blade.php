<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容の確認</title>
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
    </header>

    <main>
        <h2>Confirm</h2>
        <form action="/store" method="post">
            @csrf
            <table>
                <tr>
                    <th>お名前</th>
                    <td>{{ $inputs['last_name'] }} {{ $inputs['first_name'] }}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>{{ $genders[$inputs['gender']] }}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $inputs['email'] }}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>{{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $inputs['address'] }}</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{ $inputs['building'] }}</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>{{ $category }}</td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>{{ $inputs['message'] }}</td>
                </tr>
            </table>
            <button type="submit">送信</button>
        </form>

        <!-- 修正リンク -->
        <a href="{{ url('/') }}?{{ http_build_query($inputs) }}" style="text-decoration: underline; color: blue;">修正</a>
    </main>
</body>

</html>
