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
        $this->parse($this->getCurl('http://divishoes.com/main/katalog_product_ready'));
        $this->parse($this->getCurl('http://ratuwedges.com/main/katalog_product_ready/ready'));
    }

    private function parse($respons)
    {
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
            $awal = strpos($respon,"<a href='")+8;
            $akhir = strpos($respon,"'><img");
            $product->link = substr($respon,$awal,$akhir - $awal);
            $this->collection->push($product);
        }
    }

    /**
     * @return mixed
     */
    private function getCurl($url)
    {
        $respon = Curl::to($url)->get();
        $pos = strpos($respon, '<div id="product-list">');
        $respon = substr($respon, $pos);
        $respon = self::clearMetaCharacter($respon);
        $pos = strpos($respon, '</div>');
        $respon = substr($respon, 0, $pos);
        $pos = strpos($respon,'<li>');
        $respon = substr($respon, $pos);
        $respon = str_replace('<div class="clearfix">','',$respon);
        $respons = explode('</li><li>', $respon);
        return $respons;
    }

    /**
     * @param $string
     * membersihkan hasil curl agar mudah di explode
     * @return mixed
     */
    public static function clearMetaCharacter($string)
    {
        $string = str_replace(array("\r", "\n", "\t", "\v"),'',$string);
        $string = str_replace(array("  ", "   ", "    ", "     ","      ","       "),'',$string);
        $string = str_replace("> <","><",$string);
        return $string;
    }

    public  function all()
    {
        return $this->collection;
    }

}