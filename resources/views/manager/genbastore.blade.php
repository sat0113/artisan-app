@extends('manager/layout')
@section('title','DEDURA_artisanbetu')
@section('style')
    main {
        text-align: center;
        margin: 0 180px;
        width:70%;
    }
@endsection
@section('main')
    <form method="post" action="{{ route('genbaregister') }}"　onSubmit="checkSubmit()">
        @csrf
        <h2>現場新規登録</h2>
        <p>現場名：{{ $genba_name }}</p>
        <p>現場住所：{{ $genba_address }}</p>
        <p>工期（開始）：{{ $startDate }}〜</p>
        <p>工期（終了）：{{ $endDate }}</p>
        {{-- {{dd($start_y)}} --}}
        <br>
        {{-- <input type="hidden" name="genba_name"  value="{{ $genba_name }}"> --}}
        <button type="submit" value="登録">登録</button>
    </form>
        <button onclick="history.back()">戻る</button>
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
