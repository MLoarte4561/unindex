<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Universidades extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'universidades';

	protected $fillables = ['nombre','acerca','direccion','telefono','distrito','tipo','correo','web','imagen'];

	public function carreras(){

        return $this->embedsMany('App\Carreras');

    }

}
