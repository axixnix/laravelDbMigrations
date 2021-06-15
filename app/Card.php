<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    // public function wallet(){
    //     return $this->belongsTo(Wallet::class);
    // }

    // public function Payment(){
    //     return $this->hasOne(Payment::class);
    // }

    public function Subscription(){
        return $this->hasOne(Subscription::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
