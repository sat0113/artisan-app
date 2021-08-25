@extends('login/layout')
@section('title','DEDURA_login_form')
@section('style')
    main {
        text-align: center;
    }
@endsection
@section('main')
    <h2>管理者ページ編集</h2>
    <form method="post" action="{{ route('update') }}" onSubmit="return checkSubmit()">
        @csrf
        <!-- <p>企業名</p>
        <input type="text" name="company_name" size="30"> -->
        <p>管理者名</p>
        <input type="text" name="name" value="{{old('name')}}" size="30">
        <p>Eメール</p>
        <input type="text" name="email" value="{{old('email')}}" size="30">
        <p>パスワード</p>
        <input type="password" name="password" value="{{old('password')}}" size="30">
        <br><br>
        <input type="submit" name="submit" value="確認画面"></input>
        <br>
    </form>
    <br>
    <a href="{{ route('home') }}">戻る</a>
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