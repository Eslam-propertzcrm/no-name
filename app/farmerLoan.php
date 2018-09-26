<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class farmerLoan extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
