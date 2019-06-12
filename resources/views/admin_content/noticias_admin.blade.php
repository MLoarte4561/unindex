@extends('layout.admin')

@section('ad_noticias')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

                 <!-- Content Wrapper. Contains page content -->
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <h1>
                Actualizar Noticias
              </h1>
            </section>
    
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <!-- general form elements disabled -->
                  <div class="box box-warning">
                    <div class="box-header with-border">
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <form role="form">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Titulo</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
    
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Fuente</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
    
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="text-area" class="form-control" placeholder="Enter ...">
       
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                      </form>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!--/.col (right) -->
              </div>   <!-- /.row -->
            </section><!-- /.content -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- /.box -->

            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

@endsection