<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::orderBy('created_at', 'DESC')->get(); 
        // var_dump($products);
        return view('products.index', compact('products'));
    }
}
