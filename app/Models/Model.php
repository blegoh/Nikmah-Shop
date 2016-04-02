<?php
/**
 * Created by PhpStorm.
 * User: as
 * Date: 4/2/16
 * Time: 11:39 AM
 */

namespace App\Models;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

class Model implements Jsonable,JsonSerializable,Arrayable
{
    protected $attributes = [];

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->attributesToArray();
    }

    /**
     * Convert the model's attributes to an array.
     *
     * @return array
     */
    public function attributesToArray()
    {
        $attributes = [];
        foreach ($this->attributes as $attribute) {
            $attributes[$attribute] = $this->$attribute;
        }
        return $attributes;
    }

    public function __toString()
    {
        $this->toJson();
    }
}