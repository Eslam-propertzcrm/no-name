<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function products()
    {
        return $this->hasMany('App\orderProduct', 'order_id', 'id');
    }
}
