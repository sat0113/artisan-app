@extends('login/layout')
@section('title','DEDURA_inquiry_form')
@section('style')
    main {
        text-align: center;
    }
@endsection
@section('main')
    <h2>お問い合わせ</h2>
    <form method="POST" action="{{ route('listen') }}">
        @csrf
        <div>
            <label>お名前（必須）<br>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="お名前"></label>
                @if ($errors->has('name'))
                    <p class="error-message">{{ $errors->first('name') }}</p>
                @endif
        </div>
        <div>
            <label>メールアドレス（必須）<br>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレス"></label>
                @if ($errors->has('email'))
                    <p class="error-message">{{ $errors->first('email') }}</p>
                @endif
        </div>
        <div>
            <label>題名<br>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="お問い合わせ"></label>
            @if ($errors->has('title'))
                <p class="error-message">{{ $errors->first('title') }}</p>
            @endif
        </div>
        <div>
            <label>メッセージ本文<br>
            <textarea name="message" value="{{ old('message') }}"></textarea></label>
            @if ($errors->has('message'))
                <p class="error-message">{{ $errors->first('message') }}</p>
            @endif
        </div>
        <div>
            <input type="submit" name="submit" value="確認画面">
        </div>
    </form>
@endsection