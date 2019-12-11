<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professional extends Model
{
    public function services(){

        return $this->hasOne('App\service');
    }
}
