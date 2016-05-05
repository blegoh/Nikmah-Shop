<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $member = Auth::user()->member;
        $orders = Order::where('member_id',$member->id)->get();
        return view('member.orders',compact('orders'));
    }

    public function detailOrder($order)
    {
        $order = Order::find($order);
        return view('member.details',compact('order'));
    }
}
