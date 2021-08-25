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
<style>
    @yield('style')  
</style>
</head>
<body>
    <header>
        @include('login/header')
    </header>
        <!-- ここから下がメインの部分 -->
    <main>
        @yield('main')
    </main>
    <!-- ここから上がメインの部分 -->
    <footer>
        @include('login/footer')
    </footer>
</body>
</html>