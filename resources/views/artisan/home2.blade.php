@extends('artisan/layout')
@section('title','DEDURA_Artisan_Top')
@section('style')
        main a {
                display:block;
                text-decoration: none;
                padding:20px;

        }
@endsection
@section('main')
        <x-alert type="success" :session="session('login_success')"/>
        <p>{{ Auth::user()->name }}　様　こんにちは</p>

        <a href="artisan_category4.html">出面表を確認</a>


@endsection