<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // 入力された商品名に基づいて検索処理を行う
        $query = Product::query();

        // 商品名で検索
        if ($request->has('product-name') && $request->input('product-name') !== '') {
            $query->where('name', 'like', '%' . $request->input('product-name') . '%');
        }

        // ページネーションを適用し、検索結果を取得
        $products = $query->paginate(6); // 1ページに6件表示

        // 検索結果をビューに渡す
        return view('products.index', compact('products'));
    }

}



