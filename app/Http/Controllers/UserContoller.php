<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

class UserContoller
{
    public function index(){
        $id=auth()->guard('user')->user()->id;
        return view()->with(User::find($id)->with(['orders'])->get());
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return view('user.dashboard');
        }
        return redirect()->back();
    }

    public function register(){
        $name = request('name');
        $email =  request('email');
        $password =  request('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
    }

    public function show(User $user){
        return response()->json($user);
    }
    
    public function showOrders(User $user){
        return response()->json($user->orders()->with(['products'])->get());
    }
}
