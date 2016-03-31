<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    private $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return view('home',[
            'categories' => $this->categories
        ]);
    }
}
