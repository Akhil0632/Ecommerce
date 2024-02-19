<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = new Product();
        $products->name = 'Lexi';
        $products->description= 'Good and smooth writing pen';
        $products->quatity = 50;
        $products->price = 5;
        $products->save();

        $products = new Product();
        $products->name = 'Technotip';
        $products->description= 'Smooth writing pen and bold ink';
        $products->quatity = 100;
        $products->price = 10;
        $products->save();

        $products = new Product();
        $products->name = 'Flair';
        $products->description= 'Easy to use';
        $products->quatity = 10;
        $products->price = 3;
        $products->save();
    }
}
