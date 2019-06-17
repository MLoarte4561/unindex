@extends('layout.admin')
@section('ad_carreras')
        

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Gestion de carreras
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <!-- general form elements disabled -->
              <div class="box box-warning">
                
                <div class="box-body">
                  <div class="form-group col-md-12">
                    @if(Session::has('message'))
                        <div class="form-group">
                          <div class="alert alert-primary" role="alert">
                            {{Session('message')}}
                          </div>
                        </div>
                      @endif
                  </div>

                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($carreras as $car)
                      <tr>
                        <td>{{$car->nombres}}</td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm btn-large" data-toggle="modal" data-target="{{'#eso'.$car->_id}}">
                            Editar
                          </button>
                          <button type="button" class="btn btn-danger btn-sm btn-large text-white" data-toggle="modal" data-target="{{'#modal'.$car->_id}}" >
                            Eliminar
                          </button>        
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
                  <hr>

                  <!---------------------Modal para editar-------------------->

                  @foreach($carreras as $carr)
                    <div class="modal fade" id="eso{{$carr->_id}}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">
                              {{$carr->nombres}}
                            </h5>
                          </div>
                          <div class="modal-body">
                            <form role="form" action="{{route('carreras_update',$carr->_id)}}"  method="post">
                              {{csrf_field()}}
                              <!-- text input -->
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>Nombre</label>
                                  <input type="text" class="form-control" name="car_nombre_new" placeholder="{{$carr->nombres}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Link de plan de estudios</label>
                                    <input type="text" class="form-control" name="car_web_new" placeholder="{{$carr->curricula}}" required>  
                                </div>

                              </div>
                              <!-- textarea -->
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Descripción</label>
                                    <textarea type="text" class="form-control" name="car_desc_new" placeholder="{{$carr->descripcion}}" required></textarea>
                                </div>
                              </div>
                              <hr>
                              <button type="submit" class="btn btn-primary">Actualizar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach 

                  <!----------------------------------------------------------------->


                  <!---------------------Modal para eliminar-------------------->

                  @foreach($carreras as $carre)
                    <div class="modal fade" id="modal{{$carre->_id}}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sma">
                        <div class="modal-content">

                          <div class="modal-header" >
                            <h5 class="modal-title ">
                              {{$carre->nombres}}
                            </h5>
                          </div>

                          <div class="modal-body">
                            <form action="{{route('carreras_delete',$carre->_id)}}"  method="post">
                              {{csrf_field()}}
                              <div class="form-group text-center">
                                <h5>¿Está seguro de eliminar la carrera?</h5>
                              </div>

                              <div class="form-group text-center">
                                <button type="submit" class="btn btn-danger btn-sm btn-large text-white"  >
                                  Seguro
                                </button>
                              </div>
                            </form >

                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach

                  <!----------------------------------------------------------------->

                  <!---------------------Agregar-------------------->
                  <h3>Añadir una carrera</h3>

                  <form role="form" action="{{action('adminController@insertCarreras',$nombre)}}"  method="post">
                    {{csrf_field()}}
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_new" placeholder="Nombre de la carrera">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Descripción</label>
                        <input type="text" class="form-control" name="desc_new" placeholder="Descripción de la carrera" required>
                      </div>
                    </div>

                    <!-- textarea -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>URL</label>
                          <input type="Text" class="form-control" name="url_new" placeholder="URL del plan de estudio" required>  
                      </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </form>
                  <!----------------------------------------------------------------->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@endsection
