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
<form name="registform" action="{{ route('register') }}" method="post" id="registform">
    {{ csrf_field() }}
@include('layouts.form');
</form>
</body>
</html>