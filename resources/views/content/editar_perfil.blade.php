@extends('layout.index')
@section('editar')
<BR><BR><BR><BR><BR>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card-body">
            <h5 class="card-title text-center">Editar Datos </h5>
            <form class="form-signin" method="post" action="{{url('registrar')}}">
    			{{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" id="nombre" class="form-control" placeholder="Nombre"  name="nombre"  >
                <label for="nombre">Nombre</label>
              </div>

                <div class="form-label-group">
                <input type="email" id="correo" class="form-control" placeholder="Correo" name="correo"  >
                <label for="correo">Correo</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="contrasenia" >
                <label for="inputPassword">Contraseña</label>
              </div>

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Actualizar</button>
              <hr class="my-4">
            </form>
          </div>
      </div>
    </div>
  </div>

@endsection