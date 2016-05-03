<?php

namespace App\Models;

use Cart;
use GuzzleHttp\Client;
use Crypt;

class Ongkir
{

    public static function provincies()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://api.rajaongkir.com/starter/province',[
            'query' => [
                'key' => '7cfb344ccb0eff9d6c5dfe721032133e'
            ]
        ]);
        $hasil = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $hasil->rajaongkir->results;
    }

    public static function cities($province)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://api.rajaongkir.com/starter/city',[
            'query' => [
                'key' => '7cfb344ccb0eff9d6c5dfe721032133e',
                'province' => $province
            ]
        ]);
        $hasil = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $hasil->rajaongkir->results;
    }

    /**
     * @param $origin string
     * @param $destination string
     * @param $weight integer
     * @return integer
     */
    public static function ongkir($origin,$destination,$weight)
    {
        $client = new Client();
        $response = $client->post('http://api.rajaongkir.com/starter/cost',[
            'headers' => [
                'key' => '7cfb344ccb0eff9d6c5dfe721032133e'
            ],
            'form_params' => [
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => 'jne'
            ]
        ]);
        $hasil = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $hasil->rajaongkir->results[0]->costs[1]->cost[0]->value;
    }

    public static function totalOngkir($destination)
    {
        $divi = 0;
        $ginsa = 0;
        $carts = Cart::getItems();

        foreach ($carts as $cart){
            if(strpos(Crypt::decrypt($cart->id),'divishoes.com')){
                $divi += $cart->quantity * $cart->weight * 1000;
            }elseif (strpos(Crypt::decrypt($cart->id),'ratuwedges.com')){
                $ginsa += $cart->quantity * $cart->weight * 1000;
            }
        }
        $ongkir = 0;
        if($divi > 0){
            $ongkir += self::ongkir('456',$destination,$divi);
        }
        if($ginsa > 0){
            $ongkir += self::ongkir('456',$destination,$ginsa);
        }

        return $ongkir;
    }
}