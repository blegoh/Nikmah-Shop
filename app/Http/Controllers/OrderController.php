<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Confirm;
use App\Models\Order;
use Auth;
use Illuminate\Http\Request;

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

    public function confirm($order)
    {
        $banks = Bank::all();
        return view('member.confirm',compact('banks'));
    }

    public function storeConfirm($order,Request $request)
    {
        $ext = $request->file('photo')->getClientOriginalExtension();
        $fileName = $order.'.'.$ext;
        $confirm = new Confirm();
        $confirm->order_id = $order;
        $confirm->bank_account_name = $request->input('name');
        $confirm->bank_account = $request->input('rekening');
        $confirm->bukti_pembayaran = $fileName;
        $confirm->bank_id = $request->input('bank');
        $confirm->save();
        $request->file('photo')->move('images/confirms/', $fileName);
        return redirect('/order');
    }
}
