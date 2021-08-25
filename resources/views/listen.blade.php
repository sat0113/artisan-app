@extends('login/layout')
@section('title','DEDURA_inquiry_form')
@section('style')
    main {
        text-align: center;
    }
@endsection
@section('main')
    <h2>お問い合わせ</h2>
    <form method="POST" action="{{ route('send') }}">
        @csrf
        <div>
            <label>お名前（必須）<br>
            {{ $inputs['name'] }}
                <input type="hidden" name="name" value="{{ $inputs['name'] }}" placeholder="お名前"></label>
        </div>
        <div>
            <label>メールアドレス（必須）<br>
            {{ $inputs['email'] }}
                <input type="hidden" name="email"  value="{{ $inputs['email'] }}" placeholder="メールアドレス"></label>
        </div>
        <div>
            <label>題名<br>
            {{ $inputs['title'] }}
            <input type="hidden" name="title" value="{{ $inputs['title'] }}" placeholder="お問い合わせ"></label>
        </div>
        <div>
            メッセージ本文<br>
            {{ $inputs['message'] }}
            <input type="hidden" name="message" value="{{ $inputs['message'] }}">
        </div>
        <button type="submit" name="action" value="back">
        入力内容修正
        </button>
        <button type="submit" name="action" value="submit">
            送信する
        </button>
    </form>
@endsection