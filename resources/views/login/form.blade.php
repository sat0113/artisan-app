@extends('login/layout')
@section('title','DEDURA_login_form')
@section('style')
    main {
        text-align: center;
    }
@endsection
@section('main')
    <h2>管理者新規登録</h2>
    <form method="post" action="{{ route('store') }}" onSubmit="return checkSubmit()">
        @csrf
        <!-- <p>企業名</p>
        <input type="text" name="company_name" size="30"> -->
        <p>管理者名</p>
        <input type="text" name="name" size="30">
        <p>Eメール</p>
        <input type="text" name="email" size="30">
        <p>パスワード</p>
        <input type="password" name="password" size="30">
        <br><br>
        <input type="submit" name="submit" value="確認画面"></input>
        <br>
    </form>
    <br>
    <a href="{{ route('Login.show') }}">ログインはこちら</a>
    <script>
        function checkSubmit(){
        if(window.confirm('登録してよろしいですか？')){
            return true;
        } else {
            return false;
        }
        }
    </script>
@endsection
