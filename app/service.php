<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public function scores(){

        return $this->hasMany('App\score');
    }
    public function professionals(){

        return $this->hasOne('App\professional');
    }
}
