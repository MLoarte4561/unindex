<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'usuario';

    protected $fillable = ['id_usuario','nombre','correo','fecha_nacimiento','contrasenia','sugerencia.id','sugerencia.fecha','sugerencia.descripcion'];
}
