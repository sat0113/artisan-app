<div class="header-in">
    <h1><a href="manager_side2.html">DEDURA</a></h1>
    <button id="js-show-popup"><img src="img/10.png" class="icon-user">現場検索</button>
    <div class="btn">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button><img src="img/8.jpg" class="icon-user">ログアウト</button>
        </form>
        <a href="{{ route('add') }}"><img src="img/9.jpg" class="icon-user">管理者ページ</a>
        <!-- <a href="{{route('add')}}"><img src="img/9.jpg" class="icon-user">管理者ページ</a> -->
    </div>
</div>