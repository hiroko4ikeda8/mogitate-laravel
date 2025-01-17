<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required|max:255',
            'price' => 'required|numeric|min:0|max:10000',
            'season' => 'nullable|in:春,夏,秋,冬',
            'description' => 'required|max:120',
            'image' => 'required|image|mimes:png,jpeg|max:2048',
        ];
    }

        public function messages()
    {
        return [
            'product_name.required' => '商品名を入力してください',
            'price.required' => '値段を入力してください',
            'price.numeric' => '数値で入力してください',
            'price' => '0~10000円以内で入力してください',
            'season.in' => '季節を選択してください',
            'description.required' => '商品説明を入力してください',
            'description.max' => '120文字以内で入力してください',
            'image.required' => '商品画像を登録してください',
            'image.image' => '画像ファイルを選択してください',
            'image.mimes' => '「.png」または「.jpeg」形式でアップロードしてください',
            'image.max' => '画像は最大2MBまでです',
        ];
    }
}
