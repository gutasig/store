<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    public function index(Request $request) {
        if($request->q) {
           $data = Product::where('available', 1)
                           ->where('name', 'LIKE', "%{$request->q}%")
                           ->take(12)
                           ->get();
        } else {
            $data = Product::where('available', 1)
                            ->take(12)
                            ->get();
        }
        return view('products',["products"=>$data]);
    }

  
}
