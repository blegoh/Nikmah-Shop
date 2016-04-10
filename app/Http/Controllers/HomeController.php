<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Supplier;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    /**
     * Halaman utama
     * @return mixed
     */
    public function index()
    {
        $products = new Products();
        return view('home',[
            'products' => $products->all()
        ]);
    }

    /**
     * Halaman about
     * @return mixed
     */
    public function about()
    {
        return view('about');
    }
}
