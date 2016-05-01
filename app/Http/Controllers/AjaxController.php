<?php

namespace App\Http\Controllers;

use App\Models\Ongkir;

use App\Http\Requests;

class AjaxController extends Controller
{

    public function kabupaten($province)
    {
        $kabs = Ongkir::cities($province);
        return view('ajax.kab', compact('kabs'));
    }
}
