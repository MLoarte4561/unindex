<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'usuario';

    protected $fillables = ['id_usuario','nombre','correo','fecha_nacimiento','contrasenia'];

    public function sugerencia(){

    	return $this->embedsMany('App\Sugerencia');
    	
    }
}
