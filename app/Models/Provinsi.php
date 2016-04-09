<?php
/**
 * Created by PhpStorm.
 * User: as
 * Date: 4/8/16
 * Time: 5:20 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $primaryKey = 'id';

    public $timestamps = false;
}