<?php

namespace App\Http\Controllers;

use App\Universidades;

use App\Carreras;

use App\User;

use App\Sugerencia;

use App\Valoracion;

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
		$ranking = Universidades::where('nombre','Pontificia Universidad Católica del Perú')
					->orWhere('nombre','Universidad Peruana Cayetano Heredia')
					->orWhere('nombre','Universidad Nacional Mayor de San Marcos')
					->orWhere('nombre','Universidad Nacional Agraría de La Molina')
					->orWhere('nombre','Universidad Nacional de Ingeniería')->get();
		return view('content.ranking',compact('ranking'));
	}



	public function getUniversidad($nombre, Request $req){

		if($nombre == 'buscar'){
			$nombre = $req->get('universidades');
		}

		$univ = Universidades::where('nombre',$nombre)->first();

		$carreras = Universidades::where('nombre',$nombre)->first()->carreras;

		$valoraciones = Valoracion::where('universidad',$nombre)->get();

		return view('content.vista_universidad',compact('univ','carreras','valoraciones')); 
	}

	public function crearsugerencia(Request $request){
		$user_name = session('user_name');
		$usuario = User::where('nombre',$user_name);
        $descripcion = $request->get('mensaje');
        $arrModel[] = [
            'descripcion' => $descripcion
        ];
        $usuario->push('sugerencias', $arrModel);

        return redirect('/');

	}

	public function valoracion(Request $request, $nombre){

		$valoracion = new Valoracion;

		$valoracion -> universidad = $request -> input('universidad');
		$valoracion -> descripcion = $request -> input('valoracion');

		$valoracion -> save();

		return redirect('/universidades');

	}


	

	
}
