<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    protected $filable = [
        'nombreUsuario', 'nombre','apellido', 'cedula','telefono','celular','direccion','contraseña','rol', 'create_at', 'update_at'
    ];

}
