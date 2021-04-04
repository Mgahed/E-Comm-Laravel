<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.home', compact('products'));
    }

    public function details($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('products.details', compact('product'));
//            return $product;
        } else {
            return "error";
        }

    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->ser . '%')->get();
        return view('products.home', compact('products'));
    }

    public function add_to_cart(Request $request)
    {
        if (session()->has('user')) {
//            return $request;
            Cart::create([
                'user_id' => session()->get('user')['id'],
                'product_id' => $request->product_id
            ]);
            return "data inserted";
        } else {
            return ['status' => false];
        }

    }
}
