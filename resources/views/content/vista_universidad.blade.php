@extends('layout.index')
@section('vista_unive')
  
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{URL::asset($univ->imagen)}}');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">{{$univ->nombre}}</h1>
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
              <h2 class="text-primary mb-3">¿Acerca de la {{$univ->nombre}}?</h2>
              <p>{{$univ->acerca}}</p>
              <br>
            </div>
          </div>
          
          <div class="col-md-3 ml-auto">
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Información general</h3>
                <p><strong>Dirección:</strong> {{$univ->direccion}}</p> 
                <p><strong>Distrito: </strong>{{$univ->distrito}}</p>
                <p><strong>Teléfono: </strong>{{$univ->telefono}}</p>
                <p><strong>Correo: </strong>{{$univ->correo}}</p>
                <p><strong>Tipo: </strong>{{$univ->tipo}}</p>
                <p><strong><a href='{{$univ->web}}' target="_blank">Web</a></strong></p>
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
                  <div class="container">
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" disabled style="color: blue;">
                              {{$car->nombres}}
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            {{$car->descripcion}}<br><br>
                          <a href="{{$car->curricula}}" class="btn btn-primary" target="_blank">Ver currícula</a>
                          </div>
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

              @foreach($valoraciones as $valo)
                <center>
                  <div class="col-md-7" style="text-align: left;">
                    <div class="alert alert-primary" role="alert">
                      {{$valo->descripcion}}
                    </div>
                  </div>
                </center>

              @endforeach

                  @if(Session::has('user_name'))
                  <div class="site-section bg-light">
                    <div class="row justify-content-center mb-5">
                      <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Escribe tu opinión sobre la universidad</h2>
                        <p class="color-black-opacity-5">Realiza tu valoración</p>
                      </div>
                    </div>
                    <div class="container ">
                      <div class="row justify-content-center mb-5">
                        <div class="col-md-8 mb-5 "  data-aos="fade">
            
                          <form action="{{route('valoracion',$univ->nombre)}}" method="post" class="p-4 bg-white">
                            {{csrf_field()}}
                            <div class="row form-group">
                              <div class="col-md-12"> 
                                <textarea name="universidad" rows="1" class="form-control" readonly>{{$univ->nombre}}</textarea>
                              </div>
                            </div>
                            <div class="row form-group">
                              <div class="col-md-12"> 
                                <textarea name="valoracion" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe aquí tu opinión.." required></textarea>
                              </div>
                            </div>
            
                            <div class="row form-group">
                              <div class="col-md-12">
                                <input type="submit" value="Enviar" class="btn btn-primary py-2 px-4 text-white">
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>

                  @else
                  <div class="py-5 bg-primary">
                    <div class="container">
                      <div class="row text-center">
                        <div class="col-md-12">
                          <h2 class="mb-2 text-white">Realiza sugerencias y visualiza el ranking de las universidades de Lima </h2>
                          <p class="mb-4 lead text-white-opacity-05">Puedes acceder como invitado o registrarte con tu correo electronico</p>
                          <p class="mb-0"><a href="{{route('login')}}" class="btn btn-outline-white text-white btn-md font-weight-bold">Acceder</a></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endif
                </div>
              </div>
            </div>

@endsection
