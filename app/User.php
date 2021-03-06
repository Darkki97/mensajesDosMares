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
        'name', 'email', 'password','alias'
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


    public function mensajes()
    {
        return $this->hasMany(Mensaje::class);
    }
    public function userMensajes()
    {
        return $this->hasMany(UserMensaje::class);
    }
    public function userClases()
    {
        return $this->hasMany(UserClase::class);
    }
    public function clases()
    {
        return $this->hasMany(Clase::class);
    }
}
