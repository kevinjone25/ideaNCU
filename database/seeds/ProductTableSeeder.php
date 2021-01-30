<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'=>'https://upload.wikimedia.org/wikipedia/zh/6/6d/%E9%9B%BB%E8%A6%96%E5%8A%87%E7%9B%9C%E5%A2%93%E7%AD%86%E8%A8%98.jpg',
            'title'=>'Note of inject',
            'description'=>'that amazing',
            'price'=>360
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://upload.wikimedia.org/wikipedia/zh/6/6d/%E9%9B%BB%E8%A6%96%E5%8A%87%E7%9B%9C%E5%A2%93%E7%AD%86%E8%A8%98.jpg',
            'title'=>'Note of inject1',
            'description'=>'secretly stolen',
            'price'=>210
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://upload.wikimedia.org/wikipedia/zh/6/6d/%E9%9B%BB%E8%A6%96%E5%8A%87%E7%9B%9C%E5%A2%93%E7%AD%86%E8%A8%98.jpg',
            'title'=>'Note of inject2',
            'description'=>'oh my god',
            'price'=>120
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://upload.wikimedia.org/wikipedia/zh/6/6d/%E9%9B%BB%E8%A6%96%E5%8A%87%E7%9B%9C%E5%A2%93%E7%AD%86%E8%A8%98.jpg',
            'title'=>'Note of inject3',
            'description'=>'it suck',
            'price'=>100
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://upload.wikimedia.org/wikipedia/zh/6/6d/%E9%9B%BB%E8%A6%96%E5%8A%87%E7%9B%9C%E5%A2%93%E7%AD%86%E8%A8%98.jpg',
            'title'=>'Note of inject4',
            'description'=>'what a beautiful',
            'price'=>240
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=>'https://upload.wikimedia.org/wikipedia/zh/6/6d/%E9%9B%BB%E8%A6%96%E5%8A%87%E7%9B%9C%E5%A2%93%E7%AD%86%E8%A8%98.jpg',
            'title'=>'Note of inject5',
            'description'=>'wow its disgusting',
            'price'=>270
        ]);
        $product->save();
    }
}
