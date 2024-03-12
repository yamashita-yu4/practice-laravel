@extends('layouts.common')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/formstyle.css') }}">
@endsection

@section('title')
ログイン画面
@endsection

@section('contents')
@include('components.loginform')
@endsection
