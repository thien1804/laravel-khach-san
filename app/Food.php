<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    public function food_type(){
        return $this->belongsTo('App\Food_type','food_type_id','id');
    }
}
