<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Season;


class ProductSeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spring = Season::where('name', '春')->first();
        $summer = Season::where('name', '夏')->first();
        $autumn = Season::where('name', '秋')->first();
        $winter = Season::where('name', '冬')->first();


        $productSeasonMap = [
            'キウイ' => [$autumn->id, $winter->id],
            'ストロベリー' => [$spring->id],
            'オレンジ' => [$winter->id],
            'スイカ' => [$summer->id],
            'ピーチ' => [$summer->id],
            'シャインマスカット' => [$summer->id, $autumn->id],
            'パイナップル' => [$spring->id, $summer->id],
            'ブドウ' => [$summer->id, $autumn->id],
            'バナナ' => [$summer->id],
            'メロン' => [$spring->id, $summer->id],
        ];

        foreach ($productSeasonMap as $productName => $seasonIds) 
        {
            $product = Product::where('name', $productName)->first();
            if ($product) 
            {
                $product->seasons()->attach($seasonIds);
            }
        }
    }
}
