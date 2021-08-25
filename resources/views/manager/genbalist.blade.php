@extends('manager/layout')
@section('title','DEDURA_artisanbetu')
@section('style')
    main {

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
@endsection
@section('main')
<p>井上　智史　様　こんにちは</p>
        <h2>現場一覧</h2>
        <table>
            <tr><!-- 行1（見出し）-->
              <th>現場コード</th> <th>現場名</th> <th>現場住所</th> <th>工期（開始）</th>　<th>工期（終了）</th>　
            </tr>

            <tr>
            @foreach($genbas as $genba)
                <td>{{ $genba['id'] }}</td><td><a href="#">{{ $genba['name'] }}</a></td> <td>{{ $genba['address'] }}</td> <td>{{ $genba['startDate'] }}</td> <td>{{ $genba['endDate'] }}</td>
            </tr>
            @endforeach
        </table>
@endsection
