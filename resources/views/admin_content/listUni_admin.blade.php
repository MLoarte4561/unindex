@extends('layout.admin')
@section('listUni')
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Universidades registradas
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
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-sm table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Universidad</th>
                          <th scope="col">Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($universidades as $uni)
                        <tr>
                          <td>{{$uni->nombre}}</td>
                          <td>
                            <button type="button" class="btn btn-primary btn-sm btn-large" data-toggle="modal" data-target="{{'#modal-'.$uni->_id}}">
                              Editar
                            </button>
                            <button type="button" class="btn btn-danger btn-sm btn-large text-white" data-toggle="modal" data-target="{{'#modal-eliminar-'.$uni->_id}}" >
                              Eliminar
                            </button>        

                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


      @foreach($universidades as $universidad)
      <div class="modal fade" id="modal-{{$universidad->_id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
                {{$universidad->nombre}}
              </h5>
            </div>
            <div class="modal-body">
              <form role="form" action="{{route('listUniUp',['id'=>$universidad->_id])}}"  method="post">
                    {{csrf_field()}}
                    <!-- text input -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_uni_new" placeholder="{{$universidad->nombre}}">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Dirección</label>
                          <input type="text" class="form-control" name="direccion_uni_new" placeholder="{{$universidad->direccion}}" required>
                      </div>
                    </div>

                    <!-- textarea -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Teléfono</label>
                          <input type="number" class="form-control" name="telefono_uni_new" placeholder="{{$universidad->telefono}}" required>  
                      </div>
                      <div class="form-group col-md-6">
                          <label>Distrito</label>
                          <input type="text" class="form-control" name="distrito_uni_new" placeholder="{{$universidad->distrito}}" required>  
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Tipo</label>
                          <input type="text" class="form-control" name="tipo_uni_new" placeholder="{{$universidad->tipo}}" required>  
                      </div>
                      <div class="form-group col-md-6">
                          <label>Correo</label>
                          <input type="email" class="form-control" name="correo_uni_new" placeholder="{{$universidad->correo}}" required>  
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Web</label>
                        <input type="text" class="form-control" name="web_uni_new" placeholder="web" required>
                    </div>
                    <div class="form-group" >
                      <label>Acerca de la universidad</label>
                      <textarea type="text" class="form-control" name="acerca_uni_new" placeholder="{{$universidad->acerca}}"></textarea>
                    </div>
                    <div class="custom-file">
                      <label>Link de imagen referencial</label>
                      <input type="text" class="form-control" name="imagen_uni_new" placeholder="{{$universidad->imagen}}" required>
                    </div>
                    <hr>

                    <button type="submit" class="btn btn-primary">Actualizar</button>

                  </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach 

      @foreach($universidades as $univ)
      <div class="modal fade" id="modal-eliminar-{{$univ->_id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sma">
          <div class="modal-content">
            <div class="modal-header" >
              <h5 class="modal-title ">
                center
              </h5>
            </div>
            <div class="modal-body">
              <form action="{{route('listUniDelete',['id'=>$univ->_id])}}"  method="post">
                {{csrf_field()}}
                <div class="form-group text-center">
                  <h5>¿Está seguro de eliminar la universidad?</h5>
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
@endsection
