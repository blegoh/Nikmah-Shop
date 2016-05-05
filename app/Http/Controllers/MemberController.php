<?php

namespace App\Http\Controllers;

use Auth;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $member = Auth::user()->member;
        return view('member.member',compact('member'));
    }
}
