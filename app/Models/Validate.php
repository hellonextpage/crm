<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Validate extends Model
{
    use HasFactory;
    protected $table='validations';

    public static function get_val(){
        return DB::table('validations')->Orderby('id','desc')->get();
    }
    public static function val_reg($data){
        return DB::table('validations')->insertGetID($data);

    }

    public function address(){
        return $this->hasOne(Address::class,'user_id');
    }

    public function posts(){
        return $this->hasOne(Post::class,'user_id')->withDefault(['title','Title']);
    }

    public function addresses(){
        return $this->hasMany(Address::class,'user_id');
    }

    
}
