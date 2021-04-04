<?php

namespace App\Http\Controllers;

use App\Models\Cart;

class CartController extends Controller
{
    public function cart_count()
    {
        if (session()->has('user')) {
            return Cart::where('user_id',session()->get('user')['id'])->count();
        } else{
            return '0';
        }
    }
}
