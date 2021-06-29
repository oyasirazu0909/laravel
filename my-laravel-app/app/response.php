<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model
{
    public function thread(){
        return $this->belongTo('App\thread');
    }
}
