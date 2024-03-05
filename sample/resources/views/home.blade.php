<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
    <title>ホーム画面</title>
</head>
<body>
    <h2 class="title">ようこそ</h2>
@Auth
    <p class="user">{{ \Auth::user()->name }} さん</p>
    <p><a href="{{ route('logout') }}" class="example">ログアウト</a></p>
    <p><a href="{{ route('change') }}" class="example">編集</a>
    <p><a href="{{ route('edit.index') }}" class="example">投稿</a>
@endAuth
@Guest
    <p class="user_guest">ゲストさん</p>
    <p><a href="{{ route('login') }}" class="example">ログイン</a><br>
    <a href="{{ route('register') }}" class="example" >会員登録</a></p>
@endGuest
</body>
</html>