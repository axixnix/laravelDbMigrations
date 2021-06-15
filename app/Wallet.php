<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //

    //  public function BankTransaction(){
    //      return $this->hasOne(Bank_transaction::class);
    //  }

     public function Subscription(){
        return $this->hasOne(Subscription::class);
    }
}
