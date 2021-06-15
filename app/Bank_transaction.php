<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_transaction extends Model
{
    //
    public function Wallet(){
        return $this->belongsTo(Wallet::class);
    }
}
