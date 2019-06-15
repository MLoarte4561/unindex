<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Valoracion extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'valoracion';

    protected $fillables = ['universidad','descripcion'];
}
