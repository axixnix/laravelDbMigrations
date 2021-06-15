<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    public function Card(){
        return $this->belongsTo(Card::class);
    }

    public function Wallet(){
        return $this->belongsTo(Wallet::class);
    }
}
