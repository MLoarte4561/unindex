<?php

namespace App\Http\Controllers;

use App\Universidades;

use App\Carreras;

use App\User;

use App\Sugerencia;

use Illuminate\Http\Request;


class universidadesController extends Controller
{
    
	public function distritos(){

		$universidades_mos = universidades::take(6)->get();

		$nombres = universidades::orderBy('nombre')->get();
		
		return view('content.inicio',compact('nombres','universidades_mos'));
	}

	public function universidad(){
		$universidad = universidades::orderBy('nombre')->paginate(12);

		return view('content.universidades', compact('universidad'));
	}

	public function ranking(){
		return view('content.ranking');
	}

	public function getUniversidad($nombre){
		$uni = universidades::where('nombre','=',$nombre)->first();

		$carreras = Universidades::where('nombre','=',$nombre)->first()->carreras;

		return view('content.vista_universidad',compact('uni','carreras')); 
	}

	public function crearsugerencia($universidad, $user_name,Request $request){

		$usuario = User::find($user_name);
        $descripcion = $request->get('message');
        $arrModel[] = [
            'descripcion' => $descripcion,
        ];       
        $usuario->push('sugerencias', $arrModel);

        return redirect('/');

	}
	
}
