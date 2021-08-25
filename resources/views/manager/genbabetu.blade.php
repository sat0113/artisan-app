@extends('manager/layout')
@section('title','DEDURA_genbabetu')
@section('style')
footer{
        position:relative;
    }
    
    .category {
       padding:20px;
   }

    footer{
        position:relative;
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
    /*  ↓人工数ポップアップ*/
    .modal_pop{
    width: 100vw;
    height: 100vh;
    position:fixed;
    top: 0;
    left:0;
    z-index:9997!important;
    }
    .bg{
        left: 0px;
        top: 0px;
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        height: 100%;
        position:fixed;
        z-index:9998!important;
    }
    .modal_pop_main{
        height:80vh;
        z-index:9999!important;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 600px;
        background-color: rgb(255, 255, 255);
        padding: 50px;
    }

    .js-modal-close i {
        font-size: 40px;
        color:  rgb(124, 122, 16);
    }

    /* ↑人工数ポップアップ */
@endsection
@section('main')
<p>井上　智史　様　こんにちは</p>
        <h3>現場別出面表の確認・編集</h3>
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
            <form method="post" action="#">
                <input type="submit" name="submit" value="確認"></input>
                <br>
            </form>
            <div class="kensaku">
                <p>現場コード：</p>
                <input type="search">
                <p>現場名：</p>
                <input type="search">
                <p>工期（開始）：</p>
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
                    <option value="2">2</option>d
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
                </select>　月
                <select name="day">
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
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>　日　〜
                <p>工期（終了）：</p>
                <select name="year">
                    <option value="">-</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
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
                </select>　月
                <select name="day">
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
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>　日
                <form method="post" action="#">
                    <input type="submit" name="submit" value="検索"></input>
                    <br>
                </form>
            </div>
            <p>2021年 6月度</p>
            <div class="month">
                <p><a href="#">＜＜先月</a></p>
                <p>当月</p>
                <p><a href="#">来月＞＞</a></p>
            </div>
            <table border="1">
                <tr>
                    <th nowrap>月</th>
                    <th>日</th>
                    <th>曜日</th>
                    <th colspan="3">現場名</th>
                </tr>
                <tr>
                    <th nowrap></th>
                    <td></td>
                    <td></td>
                    <td>〇〇〇〇新築工事</td>
                    <td>△△△△改修工事</td>
                    <td>××××夜間工事</td>
                    
                </tr>
                <tr>
                    <th rowspan="21">6</th>
                </tr>                
                <tr>
                    @foreach($items as $item)
                    <td>{{ $item->date }}</td>
                    <td>（金）</td>
                    <!-- 人工数ポップアップ -->
                    <td>
                        {{ $item-> }}人工</td>
                    <td>{{ $item-> }}人工</td>
                    <td>{{ $item-> }}人工</td>
                    @endforeach
                </tr>
                <tr>
                    <td>12</td>
                    <td>（土）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>（日）</td>
                    <td>人工</td>
                    <td>人工</td>
                    <td>人工</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>（月）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>（火）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>（水）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>（木）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>（金）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>（土）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>（日）</td>
                    <td>人工</td>
                    <td>人工</td>
                    <td>人工</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>（月）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>（火）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>（水）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>（木）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>（金）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>（土）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>（日）</td>
                    <td>人工</td>
                    <td>人工</td>
                    <td>人工</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>（月）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>（火）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>（水）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <th rowspan="11">7</th>
                <tr>
                    
                    <td>1</td>
                    <td>（木）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>（金）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>（土）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>（日）</td>
                    <td>人工</td>
                    <td>人工</td>
                    <td>人工</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>（月）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>（火）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>（水）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>（木）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>（金）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>（土）</td>
                    <td>5人工</td>
                    <td>3人工</td>
                    <td>11人工</td>
                </tr>
                <tr>
                    <th colspan="6">合計</th>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td> <td>米田　由之介　21人工</td><td>米田　由之介　21人工</td> <td>米田　由之介　21人工</td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td> <td>島袋　マリオ　5人工</td><td>島袋　マリオ　5人工</td> <td>島袋　マリオ　5人工</td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td> <td>玉城工業　5人工</td><td>玉城工業　5人工</td> <td>玉城工業　5人工</td>
                    </tr>
            </table>                  
        </div>
        <div class="month">
            <p><a href="#">＜＜先月</a></p>
            <p>当月</p>
            <p><a href="#">来月＞＞</a></p>
        </div>
        <div class="button"></div>
            <button><a href="manager_category1.html">戻る</a></button>
            <button><a href="manager_side2.html">メニューに戻る</a></button>
        </div>
    </div>
@endsection