@extends('login/layout')
@section('title','DEDURA_login_form')
@section('style')
    main {
        text-align: center;
    }
@endsection
@section('main')
    <h2>管理者ページログイン</h2>
    <form method="post" action="{{ route('login') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                    <x-alert type="danger" :session="session('login_error')"/>

                    <x-alert type="danger" :session="session('logout')"/>

                    <x-alert type="success" :session="session('form')"/>

                </ul>
            </div>
        @endif
        <p>Eメール</p>
        <input type="text" name="email">
        <p>パスワード</p>
        <input type="password" name="password">
        <br>
        <input type="submit" value="ログイン"></input>
        <br>
    </form>
    <a href="{{ route('create') }}">新規登録はこちら</a>
@endsection