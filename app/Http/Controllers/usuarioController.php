<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class usuarioController extends Controller
{

    public function registro(){

        return view('content.registro');

    }

    public function registrar(Request $request){

        $Usuario = new Usuario;

        $Usuario -> nombre = $request -> input('nombre');
        $Usuario -> correo = $request -> input('correo');
        $Usuario -> fecha_nacimiento = $request -> input('fecha_nacimiento');
        $Usuario -> contrasenia = $request -> input('contrasenia');

        $Usuario -> save();

        return redirect('/');

    }

}
