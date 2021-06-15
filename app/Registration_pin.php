<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration_pin extends Model
{
    //

    public function User(){
        return $this->belongsTo(User::class);
    }
}
