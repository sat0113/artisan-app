<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEDURA</title>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('js/modal.js') }}" defer></script>
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/artisan_side.css') }}" rel="stylesheet">

</head>
<style>
    main {
        text-align: center;
    }
    
</style>
<body>
<header>
        <div class="header-in">
            <h1><a href="top.html">DEDURA</a></h1>
        </div>
    </header>
    <main>
    <h2>管理者ページログイン</h2>
    <form method="post" action="{{ route('login') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p>Eメール</p>
        <input type="text" name="email">
        <p>パスワード</p>
        <input type="password" name="password">
        <br>
        <input type="submit" value="ログイン"></input>
        <br>
    </form>
    <a href="manager_side3.html">新規登録はこちら</a>
</main>
<footer>
    <div class="footer-in">
        <h3><a href="top.html">DEDURA</a></h3>
        <a href="footer4.html" class="footer-under">＞お問い合わせ</a>
    </div>
</footer>
</body>
</html>