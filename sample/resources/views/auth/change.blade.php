
<a href="{{ route('home') }}" class="example">ホーム画面</a>

@extends('layouts.common')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/formstyle.css') }}">
@endsection

@section('title')
編集画面
@endsection

@section('script')
@if(session('message'))
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
	$(function () {
        toastr.success("{{ session('message') }}");
    });
</script>
@endif
@endsection

@section('contents')
<h2 class="title">ユーザ情報編集</h2>
@Auth
<form name="changeform" action="{{ route('change') }}" method="post">
@include('components.form')
</form>
@endAuth
@endsection