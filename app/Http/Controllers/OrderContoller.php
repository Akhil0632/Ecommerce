<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderContoller
{
    public function index(){
        return response()->json(Order::with(['product'])->get(),200);
    }

    public function store(Request $request){
        $order = Order::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
            'address' => $request->address,
        ]);
    }

    public function show(Order $order){
        return response()->json($order,200);
    }

    public function update(Request $request, Order $order){
        $status = $order->update($request->only(['quantity']));
    }

    public function delete(Order $order){
        $status = $order->delete();
    }


}
