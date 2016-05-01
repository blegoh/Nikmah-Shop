<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Auth;

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
