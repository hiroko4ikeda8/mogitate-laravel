<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="sanitize.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="common.css">
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <div class="logo">
            <h1>mogitate</h1>
        </div>
    </header>

    <!-- メインコンテンツ -->
    <main>
        <div class="main-container">
            <!-- 左側の商品一覧見出しと検索フォーム -->
            <section class="left-container">
                <div class="product-list-header">
                    <h2>商品一覧</h2>
                </div>

                <!-- 検索フォーム -->
                <div class="search-form">
                    <input type="text" id="product-name" placeholder="商品を検索">
                    <button type="submit">検索</button>
                </div>
            </section>

            <!-- 右側の商品追加ボタン -->
            <section class="add-product-btn">
                <button>＋ 商品の追加</button>
            </section>
        </div>
    </main>
</body>

</html>