@extends('manager/layout')
@section('title','DEDURA_Managers_Top')
@section('style')
    .category a{
        padding:20px;
        display:block;
    }
@endsection
@section('main')
<x-alert type="success" :session="session('login_success')"/>
<p>{{ Auth::user()->name }}　様　こんにちは</p>
<div class="category">
    <a href="{{ route('genbacreate') }}">現場を登録</a>
    <a href="{{ route('dedura') }}">出面表を確認</a>
    <a href="#">将来対応</a>
</div>
@endsection
