<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{

    public function detail($link)
    {
        $product = Product::find($link);
        return view('product',['product' => $product]);
    }
}
