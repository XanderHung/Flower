<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roletype extends Model
{
    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
}
