<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="sanitize.css">
    <link rel="stylesheet" href="common.css">
    @yield('css')
</head>

<body>
    <header>
        <div class="logo">
            <img src="/asset/images/mogitate.png" alt="Mogitate Logo" style="height: 45px;">
        </div>
    </header>

    <!-- メインコンテンツ -->
    <main>
        @yield('content')
    </main>
</body>

</html>