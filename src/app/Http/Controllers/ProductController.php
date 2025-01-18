<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
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

    public function show($productId)
    {
        // 商品を取得
        $product = Product::find($productId);

        // 商品が見つからない場合の処理
        if (!$product) {
            abort(404, '商品が見つかりません');
        }

        // ビューにデータを渡す
        return view('products.show', compact('product'));
    }

    public function register()
    {
        return view('products.register');
    }

    public function store(ProductRequest $request)
    {
        // 画像の保存
        $imagePath = $request->file('image')->store('product_images', 'public');

        // 商品情報の保存
        Product::create([
            'name' => $request->product_name,
            'price' => $request->price,
            'season' => $request->season,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('products.index');
    }
}
