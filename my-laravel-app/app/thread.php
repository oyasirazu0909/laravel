<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    public function board(){
        return $this->belongTo('App\board');
    }

    public function response(){
        return $this->hasMany('App\response');
    }
}
