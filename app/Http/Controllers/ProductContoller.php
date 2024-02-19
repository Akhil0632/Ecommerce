<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductContoller
{
    public function index(){
        return response()->json(Product::all(), 200);
    }

    public function save(Request $request){
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
    }

    public function quantity(Request $request, Product $product){
        $product->quantity = $product->quantity + $request->get('quantity');
        $status = $product->save();
    }

    public function delete(Product $product){
        $status = $product->delete();
    }
}
