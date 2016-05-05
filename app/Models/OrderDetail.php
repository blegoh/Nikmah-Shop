<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Crypt;

class OrderDetail extends Model
{
    public function product()
    {
        return Product::find(Crypt::encrypt($this->product_link));
    }
}
