<?php

namespace App\Http\Controllers;

use App\Models\Ongkir;
use App\Models\Product;
use App\Models\Provinsi;
use Cart;
use Curl;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Requests;

class CartController extends Controller
{
    public function index()
    {
        $provinces = Ongkir::provincies();
        return view('cart',compact('provinces'));
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

    public function update($link,Request $request)
    {
        Cart::update([
            'id'       => $link,
            'quantity' => $request->input('quantity')
        ]);
        return back();
    }

    public function delete($link)
    {
        Cart::remove($link);
        return back();
    }

    public function addToCart($link)
    {
        $product = Product::find($link);
        return view('addToCart',compact('product'));
    }

    public function test()
    {
        $client = new Client();
        $response = $client->post('http://api.rajaongkir.com/starter/cost',[
            'headers' => [
                'key' => '7cfb344ccb0eff9d6c5dfe721032133e'
            ],
            'form_params' => [
                'origin' => '317',
                'destination' => '160',
                'weight' => '1',
                'courier' => 'jne'
            ]
        ]);
        return $response;
        $hasil = \GuzzleHttp\json_decode($response->getBody()->getContents());
        print_r($hasil->rajaongkir->results);
    }

    public function checkout()
    {
        $this->middleware('auth');
    }
}
