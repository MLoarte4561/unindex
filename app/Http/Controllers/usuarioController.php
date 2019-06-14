<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class usuarioController extends Controller
{

    public function index()
    {
        return view('content.login');
    }

    public function index_registro(){

        return view('content.registro');

    }


    public function registrar(Request $request){
        $User = new User;
        $User -> nombre = $request -> input('nombre');
        $User -> tipo = 1;
        $User -> correo = $request -> input('correo');
        $User -> fecha_nacimiento = $request -> input('fecha_nacimiento');
        $User -> contrasenia = $request -> input('contrasenia');

        $User -> save();

        return redirect('/');

    }



    public function login(Request $request)
    {
        $usu = $request->get('email');
        $pwd = $request->get('password');
        $user = User::where('correo',$usu)->where('contrasenia',$pwd)->where('tipo',1)->first();
        if(!is_null($user)){
            session()->put('user_name', $user->nombre);
            return redirect('/');
        }else{
            return redirect('login');
        }
    }

    public function datos(){
        $datos = User::where("nombre",session('user_name'))->first();

        return view('content.perfil',compact('datos'));

    }

    public function edit($id){

        $datos_user = User::where('_id',$id)->first();

        return view('content.editar_perfil',compact('datos_user'));

    }

    public function editar_datos(Request $res, $id){

        $nuevo = User::where('_id',$id)->first();
        $nuevo -> nombre = $res->input('new_nombre');
        $nuevo -> contrasenia = $res->input('new_pass');
        $nuevo->save();

        return redirect('/');


    }


    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

}
