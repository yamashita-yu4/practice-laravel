<!DOCTYPE html>
<html lang="ja">
<head>
@include('layouts.head')
</head>
<body>
    <h2 class="title">ユーザー登録</h2>
<form name="registform" action="{{ route('register') }}" method="post" id="registform">
    {{ csrf_field() }}
@include('layouts.form');
</form>
</body>
</html>