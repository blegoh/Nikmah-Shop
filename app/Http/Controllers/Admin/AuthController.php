<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/05/16
 * Time: 21:46
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $auth = auth()->guard('admin');

        $credentials = [
            'username' =>  $request->input('username'),
            'password' =>  $request->input('password'),
        ];

        if ($auth->attempt($credentials)) {
            return redirect('admin/home');
        }

        return back()->withInput()->withError();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}