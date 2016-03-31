<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 31/03/16
 * Time: 8:53
 */

namespace App\Models;


use Illuminate\Support\Collection;
use Ixudra\Curl\Facades\Curl;

class Products
{
    private $collection;

    public function __construct()
    {
        $this->collection = new Collection();
        $respons = $this->getCurl();
        foreach ($respons as $respon){
            $product = new Product();
            $awal = strpos($respon,'<h5>')+4;
            $akhir = strpos($respon,'</h5>');
            $product->name = substr($respon,$awal,$akhir - $awal);
            $respon = str_replace('<h5>'.$product->name.'</h5>','',$respon);
            $awal = strpos($respon,"img src='")+9;
            $akhir = strpos($respon,"' />");
            $product->photo = substr($respon,$awal,$akhir - $awal);
            $awal = strpos($respon,"<h5 class='price'>IDR ")+21;
            $akhir = strpos($respon,".00 </h5>");
            $product->price = substr($respon,$awal,$akhir - $awal);
            $awal = strpos($respon,"<h5 class='price'>IDR ")+21;
            $akhir = strpos($respon,".00 </h5>");
            $this->collection->push($product);
        }
    }

    /**
     * @return mixed
     */
    private function getCurl()
    {
        $respon = Curl::to('http://divishoes.com/main/katalog_product_ready')->get();
        $pos = strpos($respon, '<div id="product-list">');
        $respon = substr($respon, $pos);
        $pos = strpos($respon, '</div>');
        $respon = substr($respon, 0, $pos);
        $pos = strpos($respon,'<li>');
        $respon = substr($respon, $pos);
        $pos = strpos($respon, '<div class="clearfix">');
        $respon = trim(substr($respon, 0, $pos));
        $respon = substr($respon, 0, strlen($respon)-5);
        $respons = explode('</li>', $respon);
        return $respons;
    }

    public function getAll()
    {
        return $this->collection;
    }

}