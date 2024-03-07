    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<a href="{{ route('home') }}" class="example">ホーム画面</a>
@if(session('message'))
<script>
	$(function () {
        toastr.success("{{ session('message') }}");
    });
</script>
@endif
@extends('layouts.common')

@section('title')
編集画面
@endsection

@section('contents')
<h2 class="title">ユーザ情報編集</h2>
@Auth
<form name="changeform" action="{{ route('change') }}" method="post">
@include('layouts.form')
</form>
@endAuth
@endsection