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
use Crypt;

class Products
{
    private $collection;
    private $site1 = 'http://divishoes.com/main/katalog_product_ready';
    private $site2 = 'http://ratuwedges.com/main/katalog_product_ready/ready';

    public function __construct($page = 1,$site1='',$site2='')
    {
        $this->collection = new Collection();
        $this->site1 = ($site1 == '')?$this->site1: $site1;
        $this->site2 = ($site2 == '')?$this->site2: $site2;
        $site1 = ($page == 1) ? $this->site1 : $this->site1.'/'.(($page -1)*12);
        $site2 = ($page == 1) ? $this->site2 : $this->site2.'/'.(($page -1)*12);
        if($page <= $this->getPageCount($this->site1))
            $this->parse($this->getCurl($site1));
        if($page <= $this->getPageCount($this->site2))
            $this->parse($this->getCurl($site2));
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
            $product->price = substr($respon,$awal,$akhir - $awal) + 20000 ;
            $awal = strpos($respon,"<a href='")+9;
            $akhir = strpos($respon,"'><img");
            $product->link = Crypt::encrypt(substr($respon,$awal,$akhir - $awal));
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

    private function getPageCount($site)
    {
        $respon = Curl::to($site)->get();
        $awal = strrpos($respon, $site.'/')+ strlen($site)+1;
        $akhir = strpos($respon, '">Last');
        $page = substr($respon,$awal,$akhir - $awal)/12+1;
        return $page;
    }

    public function getPage(){
        $page1 = $this->getPageCount($this->site1);
        $page2 = $this->getPageCount($this->site2);
        return ($page1 > $page2) ? $page1 : $page2;
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