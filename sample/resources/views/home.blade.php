@extends('layouts.common')

@section('style')
{{ asset('/css/style.css') }}
@endsection

@section('title')
ホーム画面
@endsection

@section('contents')
<h2 class="title">ようこそ</h2>
@if (Auth::check())
    <p class="user">{{ \Auth::user()->name }} さん</p>
    <p><a href="{{ route('logout') }}" class="example">ログアウト</a></p>
    <p><a href="{{ route('change') }}" class="example">編集</a>
    <p><a href="{{ route('edit.index') }}" class="example">投稿</a>
@else
    <p class="user_guest">ゲストさん</p>
    <p><a href="{{ route('login') }}" class="example">ログイン</a><br>
    <a href="{{ route('register') }}" class="example" >会員登録</a></p>
@endif
@endsection