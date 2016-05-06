<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/05/16
 * Time: 9:47
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}