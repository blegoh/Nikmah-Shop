<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function details()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }

    public function confirms()
    {
        return $this->hasMany(Confirm::class,'order_id','id');
    }

    public function city()
    {
        return Ongkir::city($this->city);
    }
}
