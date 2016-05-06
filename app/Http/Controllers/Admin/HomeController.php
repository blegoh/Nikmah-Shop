<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/05/16
 * Time: 9:46
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.home');
    }
}