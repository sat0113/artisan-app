@extends('manager/layout')
@section('title','DEDURA_Managers_dedura')
@section('style')
    .category a{
        display:block;
        padding:20px;
        text-decoration: none;
    }
@endsection
@section('main')
    <p>井上　智史　様　こんにちは</p>
    <h3>出面表の確認・編集</h3>
    <div class="category">
        <a href="{{ route('artisanbetu') }}">職人別出面表の確認・編集</a>
        <a href="{{ route('genbabetu') }}">現場別出面表登録・編集</a>
    </div>
@endsection