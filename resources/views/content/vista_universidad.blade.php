@extends('layout.index')
@section('vista_unive')
  
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('../{{$uni->imagen}}');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">{{$uni->nombre}}</h1>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <h2 class="text-primary mb-3">¿Acerca de la {{$uni->nombre}}?</h2>
              <p>{{$uni->acerca}}</p>
              <br>
            </div>
          </div>
          
          <div class="col-md-3 ml-auto">
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Información general</h3>
                <p><strong>Dirección:</strong> {{$uni->direccion}}</p> 
                <p><strong>Distrito: </strong>{{$uni->distrito}}</p>
                <p><strong>Teléfono: </strong>{{$uni->telefono}}</p>
                <p><strong>Correo: </strong>{{$uni->correo}}</p>
                <p><strong>Tipo: </strong>{{$uni->tipo}}</p>
                <p><strong><a href='{{$uni->web}}'>Web</a></strong></p>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
        

          <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                  <h2 class="font-weight-light text-primary">Carreras de la Universidad</h2>
                  <p class="color-black-opacity-5">Visualiza las carreras que ofrece</p>
                </div>

                @foreach($carreras as $car)
                  <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{$car->nombres}}
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          {{$car->descripcion}}<br><br>
                        <a href="{{$car->curricula}}" class="btn btn-primary">Ver currícula</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>

              <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                  <h2 class="font-weight-light text-primary">Comentarios</h2>
                  <p class="color-black-opacity-5">Comentarios respecto a la información de la universidad</p>
                </div>

              </div>

            
                

                  
                  @if(Session::has('user_name'))
                  <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                  <h2 class="font-weight-light text-primary">Realiza una Valoracion sobre la Universidad</h2>
                  <p class="color-black-opacity-5">Realiza valoraciones sobre la universidad</p>
                </div>
              </div>
            <div class="container">
              <div class="row">
                <div class="col-md-7 mb-3"  data-aos="fade">
                  <form action="{{route('sugerencia',$uni->nombre,session('user_name'))}}" class="p-5 bg-white">
                    <div class="row form-group">
                      <div class="col-md-12">
                        <label class="text-black" for="message">Mensaje</label> 
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe aquí tu sugerencia.." required></textarea>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-12">
                        <input type="submit" value="Enviar Valoracion" class="btn btn-primary py-2 px-4 text-white">
                      </div>
                    </div>
                  </form>

                  @else
                  <div class="py-5 bg-primary">
                    <div class="container">
                      <div class="row text-center">
                        <div class="col-md-12">
                          <h2 class="mb-2 text-white">Realiza sugerencias y valoraciones en el sistema web universitario.</h2>
                          <p class="mb-4 lead text-white-opacity-05">Puedes acceder como invitado o registrarte con tu correo electronico</p>
                          <p class="mb-0"><a href="{{route('login')}}" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-white text-white btn-md font-weight-bold">Acceder</a></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endif
                </div>
              </div>
            </div>

@endsection
