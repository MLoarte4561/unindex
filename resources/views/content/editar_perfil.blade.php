@extends('layout.index')
@section('editar')
<BR><BR><BR><BR><BR>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card-body">
            <h1 class="card-title text-center">Editar Datos </h1>
            <form class="form-signin" method="post" action="{{route('new',$datos_user->id)}}">
    			     {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" id="nombre" name="new_correo" class="form-control" placeholder="Nombre"  name="nombre"  required>
                <label for="nombre">{{$datos_user->correo}}</label>
              </div>  
              <div class="form-label-group">
                <input type="password" id="inputPassword"  name="new_pass" class="form-control" placeholder="Nueva contraseña" name="contrasenia" required>
                <label for="inputPassword">Nueva contraseña</label>
              </div>           
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Actualizar</button>
              <hr class="my-4">
            </form>
          </div>
      </div>
    </div>
  </div>

@endsection