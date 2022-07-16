<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table='address';

    public static function get_val(){
        return DB::table('address')->Orderby('id','desc')->get();
    }

}
