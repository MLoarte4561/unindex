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
            <div class="col-md-6">
              <!-- general form elements -->
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    {{csrf_field()}}
                    <!-- text input -->
                    <div class="form-group">
                      <label>Universidad</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">

                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
   
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>

                  </form>

                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@endsection