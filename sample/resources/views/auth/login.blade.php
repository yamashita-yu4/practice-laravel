@extends('layouts.common')

@section('style')
{{ asset('/css/formstyle.css') }}
@endsection

<h2 class="title">ログイン</h2>
<form name="loginform" action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <div class="cp_iptxt">
        <input type="text" name="email" size="30" class="ef" value="{{ old('email') }}">
        <label>メールアドレス</label>
        <span class="focus_line"><i></i></span>
    </div>
    <div class="cp_iptxt">
        <input type="password" name="password" size="30" class="ef">
        <label>パスワード</label>
        <span class="focus_line"><i></i></span>
    </div>
@isset($errors)
    <span class="err_message"> {{ $errors->first('message') }}</span>
@endisset
    <div class="cp_iptxt">
    <button type="submit" name="action" value="send">ログイン</button>
    </div>
</form>
</body>
</html>