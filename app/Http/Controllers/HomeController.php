<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Supplier;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    private $categories;
    private $suppliers;

    public function __construct()
    {
        $this->categories = Category::all();
        $this->suppliers = Supplier::all();
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return view('home',['categories' => $this->categories]);
    }
}
