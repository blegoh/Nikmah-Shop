<?php
/**
 * Created by PhpStorm.
 * User: as
 * Date: 4/8/16
 * Time: 5:20 PM
 */

namespace App\Models;

use GuzzleHttp\Client;

class Provinsi
{
    public static function all()
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
}