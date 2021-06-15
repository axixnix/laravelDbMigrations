<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Card(){
        return $this->belongsTo(Card::class);
    }

}
