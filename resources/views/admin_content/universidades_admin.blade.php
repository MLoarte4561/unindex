 @extends('layout.admin')

 @section('ad_universidades')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Agregar Universidades
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
                  <form role="form" action="#" method="post" files="true" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!-- text input -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_uni" placeholder="Nombre de la universidad">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Dirección</label>
                          <input type="text" class="form-control" name="direccion_uni" placeholder="Dirección" required>
                      </div>
                    </div>

                    <!-- textarea -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Teléfono</label>
                          <input type="text" class="form-control" name="telefono_uni" placeholder="Teléfono" required>  
                      </div>
                      <div class="form-group col-md-6">
                          <label>Distrito</label>
                          <input type="text" class="form-control" name="distrito_uni" placeholder="Distrito" required>  
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label>Tipo</label>
                          <input type="text" class="form-control" name="tipo_uni" placeholder="¿Privada o pública?" required>  
                      </div>
                      <div class="form-group col-md-6">
                          <label>Correo</label>
                          <input type="text" class="form-control" name="correo_uni" placeholder="Correo electrónico" required>  
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Web</label>
                        <input type="text" class="form-control" name="web_uni" placeholder="Dirección de página web" required>
                    </div>
                    <div class="form-group" >
                      <label>Acerca de la universidad</label>
                      <textarea type="text" class="form-control" name="acerca_uni" placeholder="Ingrese una breve descripción"></textarea>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                      <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                    <hr>

                    <button type="submit" class="btn btn-primary">Registrar</button>

                  </form>

                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@endsection