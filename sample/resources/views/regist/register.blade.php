@extends('layouts.common')

@section('title')
登録画面
@endsection

@section('contents')
<h2 class="title">新規登録</h2>
<form name="registerform" action="{{ route('register') }}" method="post">
@include('layouts.form')
</form>
@endsection