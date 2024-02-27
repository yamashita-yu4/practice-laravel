<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/formstyle.css')  }}" >
    <title>ユーザー登録画面</title>
</head>
<body>
    <h2 class="title">ユーザー登録</h2>
<form name="registform" action="/register" method="post" id="registform">
    {{ csrf_field() }}
    <div class="cp_iptxt">
        <input type="text" name="name" size="30" class="ef">
        <label>名前</label>
        <span class="err_message"> {{ $errors->first('name') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
        <input type="text" name="email" size="30" class="ef">
        <label>メールアドレス</label>
        <span class="err_message"> {{ $errors->first('email') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
        <input type="password" name="password" size="30" class="ef">
        <label>パスワード</label>
        <span class="err_message"> {{ $errors->first('password') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
        <input type="password" name="password_confirmation" size="30" class="ef">
        <label>パスワード(確認)</label>
        <span class="err_message"> {{ $errors->first('password_confirmation') }}</span>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
    <button type="submit" name="action" value="send">送信</button>
    </div>
</form>
</body>
</html>