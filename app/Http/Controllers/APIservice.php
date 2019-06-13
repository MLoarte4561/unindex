<?php

namespace App\Http\Controllers;

use App\Universidades;

use Illuminate\Http\Request;


class APIservice extends Controller
{

	public function universidades(){
		$universidades = universidades::all();
		return response()->json($universidades);
	}

}
