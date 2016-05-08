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
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $orders = Order::all();//
        return view('admin.order',compact('orders'));
    }

    public function update($order,Request $request)
    {
        $order = Order::find($order);
        $order->shipping_status = 'shipping';
        $order->nomer_resi = $request->input('resi');
        $order->update();
        return redirect('/admin/order');
    }

    public function detail($order)
    {
        $order = Order::find($order);
        return view('admin.order-detail',compact('order'));
    }

    public function confirm($order)
    {
        $order = Order::find($order);
        $confirm = $order->confirms->first();
        return view('admin.confirm',compact('confirm'));
    }

    public function updateConfirm($order,Request $request)
    {
        $order = Order::find($order);
        $confirm = $order->confirms->first();
        if ($request->input('valid') == '1')
        {
            $order->is_paid = 1;
            $order->update();
        }
        foreach ($order->confirms as $confirm) {
            $confirm->delete();
        }
        return redirect('/admin/order/'.$order->id);
    }
}