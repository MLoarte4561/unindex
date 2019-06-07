<?php

namespace App\Http\Controllers;

use App\Universidades;

use Illuminate\Http\Request;


class universidadesController extends Controller
{
    
	public function distritos(){
		$universidades_fil = universidades::where('distrito','=','Villa El Salvador')
						->orWhere('distrito','=','La Molina')
						->orWhere('distrito','=','Rimac')
						->orWhere('distrito','=','San Miguel')
						->orWhere('distrito','=','San Martin de Porres')
						->orWhere('distrito','=','Jesús María')
						->orWhere('distrito','=','Santiago de Surco')
						->orWhere('distrito','=','Chosica')
						->orWhere('distrito','=','San Isidro')
						->orWhere('distrito','=','Chorrillos')
						->orWhere('distrito','=','Independencia')
						->orWhere('distrito','=','Magdalena')
						->orWhere('distrito','=','Los Olivos')
						->orWhere('distrito','=','Pueblo Libre')
						->orWhere('distrito','=','San Borja')
						->orWhere('distrito','=','Barranco')
						->orWhere('distrito','=','San Juan de Lurigacho')
						->orWhere('distrito','=','Cercado de Lima')
						->groupBy('distrito')
						->orderBy('distrito')
						->get();

		$universidades_mos = universidades::take(6)->get();

		$nombres = universidades::orderBy('nombre')->get();

		return view('content.inicio',compact('universidades_fil','nombres','universidades_mos'));
	}

	public function universidad(){
		$universidad = universidades::orderBy('nombre')->paginate(12);

		return view('content.universidades', compact('universidad'));
	}

	

	
}
