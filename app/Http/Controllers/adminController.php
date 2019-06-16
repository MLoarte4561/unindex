<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\User;
use App\Universidades;
use App\Valoracion;
use App\Sugerencia;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //Cantidades de valores
        $users = User::count();
        $universidades = Universidades::count();
        $valoraciones = Valoracion::count(); 
        $sugerencias = User::first()->sugerencia;
        $cant_sug = count($sugerencias);
                    

        //Datos de los usuario
        $usuarios = User::orderBy('nombre')->paginate(12);

        return view('admin_content.index_admin',compact('users','universidades','valoraciones','cant_sug','usuarios'));
    }

    
    public function getUsuarios(){
        $user = User::orderBy('nombre')->paginate(12);

        return view('admin_content.usuarios_admin',compact('user'));
    }

    public function getSugerencias(){
        $user = User::first()->sugerencia;

        return view('admin_content.sugerencias_admin',compact('user'));
    }

    
    
}
