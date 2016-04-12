<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 28/03/16
 * Time: 14:50
 */

namespace App\Models;


use Ixudra\Curl\Facades\Curl;
use Crypt;

class Product extends Model
{

    private $name;
    private $description;
    private $weight;
    private $price;
    private $photo;
    private $link;

    public function __construct()
    {
        $this->attributes = ['name','description','weight','price','photo','link'];
    }

    /**
     * method set untuk semua property
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if(property_exists($this,$name)){
            $this->$name = $value;
        }
    }

    /**
     * method get untuk semua property
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if(property_exists($this,$name)){
            return $this->$name;
        }
    }

    /**
     * @param $link
     * @return Product
     */
    public static function find($link)
    {
        $product = new Product();
        $product->link = $link;
        $respon = self::getCurl(Crypt::decrypt($link));
        $awal = strpos($respon,'<h3>')+4;
        $akhir = strpos($respon,'</h3>');
        $product->name = substr($respon,$awal,$akhir - $awal);
        $awal = strpos($respon,'<img src="')+10;
        $akhir = strpos($respon,'" class="image-large"/>');
        $product->photo = substr($respon,$awal,$akhir - $awal);
        $awal = strpos($respon,'<p>')+3;
        $akhir = strpos($respon,'</p>');
        $product->description = substr($respon,$awal,$akhir - $awal);
        $awal = strpos($respon,'<input class="span3" value="')+28;
        $akhir = strpos($respon,'" type="text" name="weight"');
        $product->weight = substr($respon,$awal,$akhir - $awal);
        $awal = strpos($respon,'name="price" value="')+20;
        $akhir = strpos($respon,'.00">');
        $product->price = substr($respon,$awal,$akhir - $awal);
        return $product;
    }

    private static function getCurl($url)
    {
        $respon = Curl::to($url)->get();
        $pos = strpos($respon, '<!-- Main -->');
        $respon = substr($respon, $pos);
        $respon = Products::clearMetaCharacter($respon);
        $pos = strpos($respon, '<!-- End Main -->');
        $respon = substr($respon, 0, $pos);
        return $respon;
    }
}
