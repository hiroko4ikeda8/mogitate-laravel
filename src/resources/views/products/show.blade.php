@extends('layouts.app')

@section('title', '商品詳細')

@section('css')
<link rel="stylesheet" href="/css/show.css">
@endsection

@section('content')
<div class="main-container">
    <div class="room-upper">
        <form action="/products/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="product-info-group">
                <div class="text-container">
                    <div class="small-heading">
                        <span class="product-list">商品一覧</span> > <span class="product-name">キウイ</span>
                    </div>
                </div>

                <!-- 商品画像のアップロードフォーム -->
                <div class="product-image-upload">
                    <div id="image_preview">
                        <img id="preview_img" src="" alt="商品画像のプレビュー" style="display:none;" width="374" height="281">
                    </div>
                    <input type="file" id="image" name="image" accept="image/png" onchange="previewImage(event)" required>
                </div>
            </div>

            <div class="product-details-group">
                <div class="product-name">
                    <label for="product_name">商品名</label>
                    <input type="text" id="product_name" name="product_name" placeholder="商品名を入力" value="{{ $product->product_name }}">
                </div>

                <div class="product-price">
                    <label for="product_price">値段</label>
                    <input type="text" id="product_price" name="product_price" placeholder="値段を入力" value="{{ $product->product_price }}">
                </div>

                <div class="product-season">
                    <label>季節</label>
                    <div class="season-options">
                        <label for="spring">
                            <input type="radio" id="spring" name="season" value="spring" {{ $product->season == 'spring' ? 'checked' : '' }}> 春
                        </label>
                        <label for="summer">
                            <input type="radio" id="summer" name="season" value="summer" {{ $product->season == 'summer' ? 'checked' : '' }}> 夏
                        </label>
                        <label for="autumn">
                            <input type="radio" id="autumn" name="season" value="autumn" {{ $product->season == 'autumn' ? 'checked' : '' }}> 秋
                        </label>
                        <label for="winter">
                            <input type="radio" id="winter" name="season" value="winter" {{ $product->season == 'winter' ? 'checked' : '' }}> 冬
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="room room-middle">
    <div class="product-description">
        <label for="product_description">商品説明</label>
        <textarea id="product_description" name="product_description" placeholder="商品説明を入力" rows="6"></textarea>
    </div>
</div>

<div class="room room-bottom">
    <div class="buttons">
        <button type="button" class="btn-back" onclick="window.location.href='/products'">戻る</button>
        <button type="submit" class="btn-save">変更を保存</button>
    </div>
</div>

<script>
    document.getElementById('imageUpload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.getElementById('preview_img');
                imgElement.src = e.target.result;
                imgElement.style.display = 'block'; // プレビュー画像を表示
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection