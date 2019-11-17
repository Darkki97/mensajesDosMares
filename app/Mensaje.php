<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //campos del modelo que se pueden escribir
    protected $fillable = [
        'titulo', 'contenido'
    ];

    public function respuesta()
    {
        return $this->hasOne(Mensaje::class);
    }

    public function userMensajes()
    {
        return $this->hasMany(UserMensaje::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
