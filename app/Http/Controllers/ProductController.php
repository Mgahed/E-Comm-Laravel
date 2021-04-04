<?php

namespace App\Http\Controllers;

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
        $products = Product::where('name','like','%'.$request->ser.'%')->get();
        return view('products.home', compact('products'));
    }
}
