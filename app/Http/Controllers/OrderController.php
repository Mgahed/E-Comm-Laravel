<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout_form()
    {
//        return view('order.checkout');
        if (session()->has('user')) {
            $userId = session()->get('user')['id'];
            $products = Cart::join('products', 'cart.product_id', '=', 'products.id')
                ->where('cart.user_id', $userId)
                ->select('products.*')
                ->get();
            return view('order.checkout', compact('products'));
        } else {
            return redirect()->route('login_form');
        }
//        return strtotime("now");
    }

    public function insert_order(Request $request)
    {
        if (session()->has('user')) {
            $userId = session()->get('user')['id'];
            $products = Cart::where('user_id', $userId)->get();
//            return view('order.checkout', compact('products'));
            $Products_Id=[];
            foreach($products as $product){array_push($Products_Id,$product->product_id);}
            Order::create([
                'order_id'=>strtotime("now").mt_rand(1000000,9999999),
                'user_id'=>$userId,
                'products_ids'=>serialize($Products_Id),
                'status'=>'pending',
                'payment_method'=>$request->paymentMethod,
                'payment_status'=>'pending',
                'address'=>$request->address,
            ]);
            Cart::where('user_id', $userId)->delete();
            return redirect()->route('products_home');
        } else {
            return redirect()->route('login_form');
        }
    }
}
