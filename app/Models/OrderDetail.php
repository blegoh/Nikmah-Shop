<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use DB;

use Crypt;

class OrderDetail extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('total', function(Builder $builder) {
            $builder->select(['*',DB::raw('unit_price * quantity as total')]);
        });
    }

    public function product()
    {
        return Product::find(Crypt::encrypt($this->product_link));
    }
}
