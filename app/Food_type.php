<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food_type extends Model
{
    protected $table = 'food_types';

    public function foods(){
        return $this->hasMany('App\Food','food_type_id','id');
    }
}
