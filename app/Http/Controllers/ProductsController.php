<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    public function index(Request $request) {
        $data = Product::where('available', 1)
        ->take(12)
        ->get();
        return view('products',["products"=>$data]);
    }

  
}
