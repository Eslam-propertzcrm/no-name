<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoneOrder extends Model
{
    public function userDealer()
    {
        return $this->hasOne('App\User', 'id', 'dealer_id');
    }

    public function userDelegate()
    {
        return $this->hasOne('App\User', 'id', 'delegate_id');
    }

    public function products()
    {
        return $this->hasMany('App\DoneOrderProduct', 'order_id', 'id');
    }
}
