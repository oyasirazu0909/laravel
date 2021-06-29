<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function board(){
        return $this->hasMany('App\board');
    }
}
