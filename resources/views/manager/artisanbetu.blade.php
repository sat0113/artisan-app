@extends('manager/layout')
@section('title','DEDURA_artisanbetu')
@section('style')
    footer{
        position:relative;
    }

    .category {
       padding:20px;
   }

    table {
        border-collapse: collapse;
        text-align: center;
    }
    th, td {
        padding: 5px;
        border: 1px solid #333;
    }
    th {
        background-color: #25a13b;
        color: #FFF;
    }
    .month p{
        display: inline-block;
        padding-right: 90px;
    }
@endsection
@section('main')
<x-alert type="success" :session="session('login_success')"/>
<p>井上　智史　様　こんにちは</p>
        <h3>職人別出面表の確認・編集</h3>
        <div class="category">
        <div class="dedura">
            <select name="year">
                <option value="">-</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2021">2022</option>
                <option value="2021">2023</option>
            </select>　年
            <select name="month">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>　月 度
            <form method="post" action="manager_category2.html">
                <input type="submit" name="submit" value="確認"></input>
                <br>
            </form>
            <p>名前：</p>
            <input type="search">
            <form method="post" action="#">
                <input type="submit" name="submit" value="検索"></input>
            </form>
            <p>{{ $y }}年 {{ $m }}月度</p>
            <div class="month">
                <p><a href="{{ $prev }}">＜＜先月</a></p>
                <p>当月</p>
                <p><a href="{{ $next }}">来月＞＞</a></p>
            </div>

            <table border="1">
                <tr>
                    <th nowrap>月</th>
                    <th>日</th>
                    <th>曜日</th>
                    @foreach($users as $user)
                        @if($user['id'] !== null)
                            <th>名前</th>
                            <th>人工数</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <td nowrap></td>
                    <td></td>
                    <td></td>
                        @foreach($users as $user)
                            <td>{{ $user['name'] }}</td>
                            <td></td>
                        @endforeach
                </tr>
                <tr>
                    @foreach($dates as $value)
                        <td>{{ $value['month'] }}</td>
                        <td>{{ $value['date'] }}</td>
                        <td>{{ $value['weeks'] }}</td>
                    @foreach($users as $user)
                        <td>
                            @if(isset($calendar[$value['key']][$user->id]))
                                {{ $genbas[$calendar[$value['key']][$user->id]->genba_id] }}
                            @endif
                        </td>
                        <td></td>
                    @endforeach
                </tr>
                    @endforeach
                <th colspan="12">合計</th>
                <tr>
                <td colspan="3"></td>
                @foreach($users as $user)
                    <td colspan="2">
                    @if(isset($spot[$user->id]))
                        @foreach($spot[$user->id] as $genba_id => $count)
                            {{ $genbas[$genba_id] }} {{ $count }}人工<br>
                        @endforeach
                    @endif
                    </td>
                @endforeach
                </tr>
            </table>
        </div>
        <div class="month">
            <p><a href="{{ $prev }}">＜＜先月</a></p>
            <p>当月</p>
            <p><a href="{{ $next }}">来月＞＞</a></p>
        </div>
        <div class="button"></div>
            <button><a href="manager_category1.html">戻る</a></button>
            <button><a href="manager_side2.html">メニューに戻る</a></button>
        </div>
@endsection
