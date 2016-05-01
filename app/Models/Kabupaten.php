<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/04/16
 * Time: 19:25
 */

namespace App\Models;

use GuzzleHttp\Client;

class Kabupaten
{
    public static function all($province)
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