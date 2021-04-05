<?php

namespace App\Http\Controllers;

use App\Models\Cart;

class CartController extends Controller
{
    public function cart_count()
    {
        if (session()->has('user')) {
            return Cart::where('user_id', session()->get('user')['id'])->count();
        } else {
            return '0';
        }
    }

    public function cart_list()
    {
        if (session()->has('user')) {
            $userId = session()->get('user')['id'];
            $products = Cart::join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $userId)
                ->select('products.*')
                ->get();
            return view('cart.list', compact('products'));
        }else{
            return redirect()->route('login_form');
        }
    }

    public function cart_remove($id)
    {
        $user = session()->get('user')['id'];
        $item = Cart::where(['user_id'=>$user,'product_id'=>$id]);
//        return $item;
        if ($item) {
            $item->delete();
            return redirect()->route('cart');
        } else {
            return redirect()->route('cart');
        }
    }
}
