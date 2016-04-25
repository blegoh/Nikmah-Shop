<?php

namespace App\Http\Controllers;

use Cart;
use Curl;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Requests;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function add(Request $request){
        Cart::add([
            'id' => $request->input('link'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'weight' => $request->input('weight'),
            'photo' => $request->input('photo'),
            'varian' => $request->input('varian')
        ]);
        return back();
    }

    public function test()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://api.rajaongkir.com/starter/province',[
            'query' => [
                'key' => '621389bc120523f1caafd291afef672b'
            ]
        ]);
        $hasil = \GuzzleHttp\json_decode($response->getBody()->getContents());
        print_r($hasil->rajaongkir->results);
    }

    public function checkout()
    {
        $this->middleware('auth');
    }
}
