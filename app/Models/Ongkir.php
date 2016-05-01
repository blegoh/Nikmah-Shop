<?php

namespace App\Models;

use GuzzleHttp\Client;

class Ongkir
{
    /**
     * @var GuzzleHttp\Client
     */
    private static $client;

    /**
     * Ongkir constructor.
     */
    public function __construct()
    {
        self::$client = new Client();
    }


    public static function provincies()
    {
        $response = self::$client->request('GET', 'http://api.rajaongkir.com/starter/province',[
            'query' => [
                'key' => '7cfb344ccb0eff9d6c5dfe721032133e'
            ]
        ]);
        $hasil = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $hasil->rajaongkir->results;
    }

    public static function cities($province)
    {
        $response = self::$client->request('GET', 'http://api.rajaongkir.com/starter/city',[
            'query' => [
                'key' => '7cfb344ccb0eff9d6c5dfe721032133e',
                'province' => $province
            ]
        ]);
        $hasil = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $hasil->rajaongkir->results;
    }
}