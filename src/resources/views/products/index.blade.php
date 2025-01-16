@extends('layouts.app')

@section('title', '商品一覧')

@section('css')
<link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
<div class="main-container">
    <!-- 左側の商品一覧見出しと検索フォーム -->
    <section class="left-container">
        <div class="product-list-header">
            <h2>商品一覧</h2>
        </div>

        <!-- 検索フォーム -->
        <form action="{{ url('/products') }}" method="GET" class="search-form">
            <input type="text" name="product-name" placeholder="商品を検索" value="{{ request('product-name') }}">
            <button type="submit">検索</button>
        </form>
    </section>

    <!-- 商品一覧表示 -->
    <section class="product-list">
        @foreach($products as $product)
        <div class="product-item">
            <a href="{{ url('products/' . $product->id) }}">
                <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" width="374" height="281">
            </a>
            <div class="product-details">
                <h3>{{ $product->name }}</h3>
                <p>¥{{ number_format($product->price) }}</p>
            </div>
        </div>
        @endforeach
    </section>

    <!-- ページネーション -->
    <div class="pagination-container">
        <div class="prev-button">＜</div>
        <div class="page-numbers">
            <span class="page-item">1</span>
            <span class="page-item">2</span>
            <span class="page-item">3</span>
        </div>
        <div class="next-button">＞</div>
    </div>

    <!-- 右側の商品追加ボタン -->
    <section class="add-product-btn">
        <button>＋ 商品の追加</button>
    </section>
</div>
@endsection