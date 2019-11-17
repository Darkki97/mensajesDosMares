<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    //campos del modelo que se pueden escribir
    protected $fillable = [
        'nombre', 'descripcion'
    ];


    public function userClase()
    {
        return $this->hasMany(UserClase::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
