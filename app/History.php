<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
