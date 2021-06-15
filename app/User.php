<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Card(){
        return $this->hasOne(Card::class);
    }

    public function Payment(){
        return $this->hasOne(Payment::class);
    }

    public function RegistrationPin(){
        return $this->hasOne(Registration_pin::class);
    }

    public function Verification(){
        return $this->hasOne(Verification::class);
    }

    public function Subscription(){
        return $this->hasOne(Subscription::class);
    }
}
