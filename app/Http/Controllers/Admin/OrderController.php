<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/05/16
 * Time: 9:47
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $orders = Order::all();
        return view('admin.order',compact('orders'));
    }

    public function detail($order)
    {
        $order = Order::find($order);
        return view('admin.order-detail',compact('order'));
    }
}