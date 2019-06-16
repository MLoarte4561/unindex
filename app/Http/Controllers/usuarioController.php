<?php

namespace App\Http\Controllers;

use App\User;

use Session;

use Redirect;

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
        $correo =$request -> input('correo');
        $existe = User::where('correo',$correo)->get();
        if (count($existe)>0){
            Session::flash('message','El correo que ingresó ya se encuentra en uso');
            return Redirect::to('/registrar');
        }else{
            $User = new User;
            $User -> nombre = $request -> input('nombre');
            $User -> tipo = 1;
            $User -> correo = $request -> input('correo');
            $User -> fecha_nacimiento = $request -> input('fecha');
            $User -> contrasenia = $request -> input('contrasenia');

            $User -> save();
            return redirect('/login');
        }
    }

    public function enviarTest(Request $request){
        
        $pregunta1=$request->input('pregunta1');
        $pregunta2=$request->input('pregunta2');
        $pregunta3=$request->input('pregunta3');
        $pregunta4=$request->input('pregunta4');
        $pregunta5=$request->input('pregunta5');
        $pregunta6=$request->input('pregunta6');
        $pregunta7=$request->input('pregunta7');
        $pregunta8=$request->input('pregunta8');
        $pregunta9=$request->input('pregunta9');
        $pregunta10=$request->input('pregunta10');

        $contador=0;

        //1
        if($pregunta1=="a"){
            $contador=$contador+30;

        }elseif($pregunta1=="b"){   
            $contador=$contador+40;

        }elseif($pregunta1=="c"){
            $contador=$contador+20;

        }elseif($pregunta1=="d"){
            $contador=$contador+10;
        }

        //2
        if($pregunta2=="a"){
            $contador=$contador+10;

        }elseif($pregunta2=="b"){   
            $contador=$contador+40;
        }

        //3
        if($pregunta3=="a"){
            $contador=$contador+40;

        }elseif($pregunta3=="b"){   
            $contador=$contador+10;

        }elseif($pregunta3=="c"){
            $contador=$contador+20;

        }elseif($pregunta3=="d"){
            $contador=$contador+30;
        }

        //4
        if($pregunta4=="a"){
            $contador=$contador+10;

        }elseif($pregunta4=="b"){   
            $contador=$contador+20;

        }elseif($pregunta4=="c"){
            $contador=$contador+30;

        }elseif($pregunta4=="d"){
            $contador=$contador+40;
        }
        
        //5
        if($pregunta5=="a"){
            $contador=$contador+30;

        }elseif($pregunta5=="b"){   
            $contador=$contador+20;

        }elseif($pregunta5=="c"){
            $contador=$contador+10;

        }elseif($pregunta5=="d"){
            $contador=$contador+40;
        }
        
        //6
        if($pregunta6=="a"){
            $contador=$contador+30;

        }elseif($pregunta6=="b"){   
            $contador=$contador+40;

        }elseif($pregunta6=="c"){
            $contador=$contador+10;

        }elseif($pregunta6=="d"){
            $contador=$contador+20;
        }
        
        //7
        if($pregunta7=="a"){
            $contador=$contador+10;

        }elseif($pregunta7=="b"){   
            $contador=$contador+40;

        }elseif($pregunta7=="c"){
            $contador=$contador+20;

        }elseif($pregunta7=="d"){
            $contador=$contador+30;
        }

        //8
        if($pregunta8=="a"){
            $contador=$contador+20;

        }elseif($pregunta8=="b"){   
            $contador=$contador+10;

        }elseif($pregunta8=="c"){
            $contador=$contador+30;

        }elseif($pregunta8=="d"){
            $contador=$contador+40;
        }

        //9
        if($pregunta9=="a"){
            $contador=$contador+20;

        }elseif($pregunta9=="b"){   
            $contador=$contador+10;

        }elseif($pregunta9=="c"){
            $contador=$contador+40;

        }elseif($pregunta9=="d"){
            $contador=$contador+30;
        }

        //10
        if($pregunta10=="a"){
            $contador=$contador+10;

        }elseif($pregunta10=="b"){   
            $contador=$contador+40;
        }

        if($contador>=100 and $contador<=160){
            Session::flash('message'," Tu carrera ideal está en el ámbito de las LETRAS. 
            Las carreras más adecuadas para ti son: Idiomas, Comunicaciones, Educación, Historia y Periodismo. 
            Estas carreras las puedes encontrar en las siguientes universidades: 
            Pontificia Universidad Católica del Perú, Universidad Nacional Mayor de San Marcos, 
            Universidad Peruana Unión, Universidad Antonio Ruiz de Montoya.");
            return Redirect::to('/test');

        }elseif($contador>=170 and $contador<=220){
            Session::flash('message'," Tu carrera ideal está en el ámbito del ARTE. 
            Las carreras más adecuadas para ti son: Diseño, Animación, Moda, Bellas Artes, Teatro o Cine.
            Estas carreras las puedes encontrar en las siguientes universidades: 
            Universidad de Ciencias y Artes de América Latina, Pontificia Universidad Católica del Perú,
             Universidad Peruana Unión.");
            return Redirect::to('/test');

        }elseif($contador>=230 and $contador<=280){
            Session::flash('message'," Tu carrera ideal está en el ámbito de la SALUD. 
            Las carreras más adecuadas para ti son: Medicina, Farmacia, Psicología, Veterinaria o Enfermería.
            Estas carreras las puedes encontrar en las siguientes universidades: 
            Universidad María Auxiliadora, Universidad Nacional Mayor de San Marcos, Universidad Peruana Cayetano Heredia.");
            return Redirect::to('/test');

        }elseif($contador>=290 and $contador<=340){
            Session::flash('message'," Tu carrera ideal está en el ámbito de las CIENCIAS. 
            Las carreras más adecuadas para ti son: Biología, Matemáticas, Física, Astronomía o Estadística.
            Estas carreras las puedes encontrar en las siguientes universidades: 
            Pontificia Universidad Católica del Perú,Universidad de Ciencias y Artes de América Latina,
             Universidad Autónoma del Perú,Universidad de Lima, Universidad Nacional Mayor de San Marcos,
              Universidad Nacional Agraría de La Molina, Universidad del Pacífico, Universidad Nacional de Ingeniería,
               Universidad ESAN, Universidad Peruana Cayetano Heredia, Universidad Científica del Sur.");
            return Redirect::to('/test');

        }elseif($contador>=350 and $contador<=400){
            Session::flash('message'," Tu carrera ideal está en el ámbito de la TECNOLOGÍA. 
            Las carreras más adecuadas para ti son: Informática, Marketing, Telecomunicaciones o Diseño Industrial.
            Estas carreras las puedes encontrar en las siguientes universidades: 
            Pontificia Universidad Católica del Perú,Universidad de Lima,Universidad Nacional de Ingeniería,
             Universidad Nacional Mayor de San Marcos,Universidad del Pacífico, Universidad ESAN, Universidad Científica del Sur.");
            return Redirect::to('/test');

        }else{
            Session::flash('message',"No ha respondido todas las preguntas, resultados no disponibles");
            return Redirect::to('/test');
        }
        
    }



    public function login(Request $request)
    {

        $usu = $request->get('email');
        $pwd = $request->get('password');
        $user = User::where('correo',$usu)->where('contrasenia',$pwd)->where('tipo',1)->first();
        $user2 = User::where('correo',$usu)->where('contrasenia',$pwd)->where('tipo',2)->first();
        if(!is_null($user)){
            session()->put('user_name', $user->nombre);
            return redirect('/');
        }elseif (!is_null($user2)) {
            session()->put('user_name', $user2->nombre);
            return redirect('/admin/home');
        }else{
            Session::flash('message','El correo y/o la contraseña son incorrectas');
            return Redirect::to('/login');
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
        $nuevo -> correo = $res->input('new_correo');
        $nuevo -> contrasenia = $res->input('new_pass');
        $nuevo->save();

        return redirect('/perfil');


    }


    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

}
