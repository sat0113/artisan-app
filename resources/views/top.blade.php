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
        img {
            width: 50vw;
            height: 100%;
            margin: 0 auto;
            opacity: 0.5;
        }

        img:hover {
            opacity: 1;
        }
        p {
            position: absolute;
            background-color: #25a13b;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border-top:2px solid #31e470;
            border-bottom:2px solid #31e470;
            font-size: 25px;
            padding:20px auto;
        }
        .box {
            display: flex;
            justify-content: center;
            /* margin: 0 auto; */
        }

        .box1 {
            position: relative;
            float: left;
        }

    </style>
<body>
    <header>
        <div class="header-in">
            <h1><a href="top.html">DEDURA</a></h1>
        </div>
    </header>
    <div class="box">
        <div class="box1">
            <a href="{{ route('Login.show2') }}"><img src="img/1.jpg" alt="">
            <p>私は職人です</p></a>
        </div> 
        <div class="box1">
            <a href="{{ route('Login.show') }}"><img src="img/2.jpg" alt="">
            <p>私は管理者です</p></a>
        </div>
    </div>

    <footer>
        <div class="footer-in">
            <h3><a href="top.html">DEDURA</a></h3>
            <a href="footer4.html" class="footer-under">＞お問い合わせ</a>
        </div>
    </footer>
</body>
</html>