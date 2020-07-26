<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juridica extends Model
{
    Protected $table = 'juridica';
    protected $fillable = [
        'nit', 'razon', 'departamento', 'municipio', 'direccion', 'correo', 'telefono'
    ];

}
