<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
