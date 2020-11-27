<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
    public function flower()
    {
        return $this->hasMany('App\Models\Flower');
    }
}
