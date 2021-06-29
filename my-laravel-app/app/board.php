<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    public function category(){
        return $this->belongTo('App\category');
    }

    public function thread(){
        return $this->hasMany('App\thread');
    }
}
