<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <div class="logo">
            <img src="{{ asset('asset/images/mogitate.png') }}" alt="Mogitate Logo" style="height: 30px;">
        </div>
    </header>

    <!-- メインコンテンツ -->
    <div class="main-content">
        @yield('content')
    </div>
</body>

</html>