<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/04/16
 * Time: 19:25
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $primaryKey = 'id';

    public $timestamps = false;
}