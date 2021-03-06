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

    public function events()
    {
        return $this->hasMany(Event::class, 'owner_id');
    }
}



/*

    users -> events(owner_id)
    User:events:hasMany  -> Event:owner:belongsTo
    User::find(1)->events (Collection com os eventos)
    User::find(1)->events() (HasMany)

    Event::::find(1)->owner -> User populado com os
                    dados do dono do evento

    Event::find(1)->owner();
*/
