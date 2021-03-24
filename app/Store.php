<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
