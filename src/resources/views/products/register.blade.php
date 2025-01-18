@extends('layouts.app')

@section('title', '商品登録')

@section('css')
<link rel="stylesheet" href="/css/register.css">
@endsection

@section('content')
<div class="container">
    <h1>商品登録</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <section class="form-group">
            <label for="product_name">商品名<span class="required">必須</span></label>
            <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" placeholder="商品名を入力">
            @error('product_name')
            <div class="error">{{ $message }}</div>
            @enderror
        </section>

        <section class="form-group">
            <label for="price">値段<span class="required">必須</span></label>
            <input type="text" id="price" name="price" value="{{ old('price') }}" placeholder="値段を入力">
            @error('price')
            <div class="error">{{ $message }}</div>
            @enderror
        </section>

        <section class="form-group">
            <div id="image_preview">
                <img id="preview_img" src="" alt="商品画像のプレビュー" style="display:none;" width="374" height="281">
            </div>

            <label for="image">商品画像<span class="required">必須</span></label>
            <input type="file" id="image" name="image" accept="image.png" onchange="previewImage(event)" required>
            @error('image')
            <div class="error">{{ $message }}</div>
            @enderror
        </section>

        <section class="form-group">
            <label>季節<span class="required">必須</span></label>
            <div class="season-group">
                <label for="spring">
                    <input type="radio" id="spring" name="season" value="春"> 春
                </label>
                <label for="summer">
                    <input type="radio" id="summer" name="season" value="夏"> 夏
                </label>
                <label for="autumn">
                    <input type="radio" id="autumn" name="season" value="秋"> 秋
                </label>
                <label for="winter">
                    <input type="radio" id="winter" name="season" value="冬"> 冬
                </label>
            </div>
            @error('season')
            <div class="error">{{ $message }}</div>
            @enderror
        </section>

        <section class="form-group">
            <label for="description">商品説明<span class="required">必須</span></label>
            <textarea id="description" name="description" placeholder="商品の説明を入力">{{ old('description') }}</textarea>
            @error('description')
            <div class="error">{{ $message }}</div>
            @enderror
        </section>

        <section class="form-buttons">
            <a href="{{ url('/products') }}" class="btn-back">戻る</a>
            <button type="submit">登録</button>
        </section>
    </form>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader(); // ファイルリーダーを作成
        reader.onload = function() {
            const preview = document.getElementById('preview_img'); // プレビュー用の画像要素を取得
            preview.src = reader.result; // 読み込んだ画像データを設定
            preview.style.display = 'block'; // プレビュー画像を表示
        };
        reader.readAsDataURL(event.target.files[0]); // ファイルをDataURL形式で読み込む
    }
</script>
@endsection