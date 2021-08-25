<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/artisan_side.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <title>@yield('title')</title>
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
        @include('manager/header')
    </header>
        <!-- ここから下がメインの部分 -->
    <main>
        @yield('main')
    </main>
    <!-- ここから上がメインの部分 -->
    <footer>
        @include('manager/footer')
    </footer>

    <!-- ↓JavaScript -->
        @include('manager/js')
    <!-- ↑JavaScript -->

</body>
</html>