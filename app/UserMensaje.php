<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMensaje extends Model
{
    public function mensajes()
    {
        return $this->belongsTo(Mensaje::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
