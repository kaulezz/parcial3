<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    public function services(){

        return $this->belongsTo('App\service');
    }

    
}
