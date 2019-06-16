<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;


use Session;
use Redirect;

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
        $users = User::all();
        //dd($user);
        //return view('admin_content.sugerencias_admin',compact('user'));
        //return view('admin_content.sugerencias_admin',compact('user'));
        return view('admin_content.sugerencias_admin')
        ->with('users',$users);

    }

    public function insertUniversidad(Request $re){

        $uni = new Universidades;

        $uni -> nombre =    $re -> input('nombre_uni');        
        $uni -> acerca =    $re -> input('acerca_uni');
        $uni -> direccion = $re -> input('direccion_uni');
        $uni -> telefono =  $re -> input('telefono_uni');
        $uni -> distrito =  $re -> input('distrito_uni');
        $uni -> tipo =      $re -> input('tipo_uni');
        $uni -> correo =    $re -> input('correo_uni');
        $uni -> web =       $re -> input('web_uni');
        $uni -> imagen =    $re -> input('imagen_uni');

        $uni -> save();
        
        Session::flash('message','Universidad registrada correctamente');
        return Redirect::to('/admin/universidades');
    }    

    public function getUniversidades(){
        $universidades = Universidades::orderBy('nombre')->get();

        return view('admin_content.listUni_admin',compact('universidades'));

    }


    public function updateUniversidades(Request $request,$id){
        $nuevo = Universidades::where('_id',$id)->first();

        $nuevo -> nombre =    $request -> input('nombre_uni_new');        
        $nuevo -> acerca =    $request -> input('acerca_uni_new');
        $nuevo -> direccion = $request -> input('direccion_uni_new');
        $nuevo -> telefono =  $request -> input('telefono_uni_new');
        $nuevo -> distrito =  $request -> input('distrito_uni_new');
        $nuevo -> tipo =      $request -> input('tipo_uni_new');
        $nuevo -> correo =    $request -> input('correo_uni_new');
        $nuevo -> web =       $request -> input('web_uni_new');
        $nuevo -> imagen =    $request -> input('imagen_uni_new');

        $nuevo -> save();

        return redirect('/admin/listado');
    }

    public function eliminarUni($id){
        $uni = Universidades::find($id);
        $uni->delete();

        return redirect('/admin/listado');
    }
    
}
