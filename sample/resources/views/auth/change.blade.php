<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/formstyle.css')  }}" >
    <title>ユーザー情報編集画面</title>
</head>
<body>
<a href="/home" class="example">ホーム画面</a>
@if (Auth::check())
<h2 class="title">ユーザー情報編集</h2>
<form name="changeform" action="/change" method="post">
    {{ csrf_field() }}
    <div class="cp_iptxt">
        <label>名前</label>
        <input type="text" name="name" size="30" class="ef" value="{{ $user->name }}">
        <span class="err_message"> {{ $errors->first('name') }}</span>
    </div>
    <div class="cp_iptxt">
        <label>メールアドレス</label>
        <input type="text" name="email" size="30" class="ef" value="{{ $user->email }}">
        <span class="err_message"> {{ $errors->first('email') }}</span>
    </div>
    <div class="cp_iptxt">
        <label>パスワード</label>
        <input type="password" name="password" size="30" class="ef">
        <span class="err_message"> {{ $errors->first('password') }}</span>
    </div>
    <div class="cp_iptxt">
        <label>パスワード(確認)</label>
        <input type="password" name="password_confirmation" size="30" class="ef">
    </div>
    <div class="cp_iptxt">
    <button type="submit" name="action" value="send">変更</button>
    </div>
</form>
@else
@endif
</body>
</html>