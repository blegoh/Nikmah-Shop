<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Paginator;
use App\Models\Product;
use App\Models\Products;

use App\Http\Requests;

class ProductController extends Controller
{

    public function all($page = 1)
    {
        $products = new Products($page);
        $paginator = new Paginator($products->getPage(),$page,'/product/all');
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

    public function category($category,$page = 1)
    {
        $category = Category::find($category);
        $products = new Products($page,$category->site1,$category->site2);
        $paginator = new Paginator($products->getPage(),$page,'/product/category/'.$category->category_id);
        return view('products',[
            'products' => $products->all(),
            'paginator' => $paginator
        ]);
    }
}
