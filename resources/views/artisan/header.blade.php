<div class="header-in">
    <h1><a href="{{ route('home2') }}">DEDURA</a></h1>
    <button id="js-show-popup"><img src="img/10.png" class="icon-user">現場検索</button>
    <div class="btn">
        <form action="{{ route('logout2') }}" method="post">
            @csrf
            <button><img src="img/8.jpg" class="icon-user">ログアウト</button>
        </form>
        <a href="manager_category4.html"><img src="img/9.jpg" class="icon-user">マイページ</a>
    </div>
</div>
