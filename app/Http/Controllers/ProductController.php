<?php

namespace App\Http\Controllers;

use App\Models\Paginator;
use App\Models\Product;
use App\Models\Products;

use App\Http\Requests;

class ProductController extends Controller
{

    public function all($page = 1)
    {
        $products = new Products($page);
        $paginator = new Paginator($products->getPage(),$page,'/products');
        return view('products',[
            'products' => $products->all(),
            'paginator' => $paginator
        ]);
    }

    /**
     * Menampilkan detail dari sebuah product
     * @param $link
     * @return mixed
     */
    public function detail($link)
    {
        $product = Product::find($link);
        return view('product',['product' => $product]);
    }
}
