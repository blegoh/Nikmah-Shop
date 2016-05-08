<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class,'member_id','id');
    }

    public function city()
    {
        return Ongkir::city($this->city);
    }
}
