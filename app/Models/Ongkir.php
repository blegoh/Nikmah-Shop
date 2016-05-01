<?php

namespace App\Models;

use GuzzleHttp\Client;

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
}