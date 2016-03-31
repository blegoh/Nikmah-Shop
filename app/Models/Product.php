<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 28/03/16
 * Time: 14:50
 */

namespace App\Models;


class Product
{

    private $name;
    private $description;
    private $weight;
    private $price;
    private $photo;
    private $link;

    public function __set($name, $value)
    {
        if(property_exists($this,$name)){
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if(property_exists($this,$name)){
            return $this->$name;
        }
    }
}