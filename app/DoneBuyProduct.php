<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoneBuyProduct extends Model
{
    public function userFarmer()
    {
        return $this->hasOne('App\User', 'id', 'farmer_id');
    }

    public function userDelegate()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
