<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Carreras extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'universidades';

	protected $fillables = ['nombres','descripcion','curricula'];
}
