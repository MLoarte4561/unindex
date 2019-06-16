@extends('layout.admin')
@section('ad_usuarios')
        

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

          <h2 class="page-header">Usuarios registrados</h2>

          <div class="row">
            @foreach($user as $users)
              <div class="col-md-4">
              <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-aqua-active">
                    <h3 class="widget-user-username">{{$users->nombre}}</h3>
                 
                    @if($users->tipo == 1)
                    <h5 class="widget-user-desc">Estudiante</h5>
                    @else
                    <h5 class="widget-user-desc">Administrador</h5>
                    @endif
                    {{$users->correo}}
                  </div>
                  <div class="box-footer">
                     @for($i=0;$i<20;$i++)
                      @if(isset($su->sugerencias[$i]))
                      <span>* {{$su->sugerencias[$i]['descripcion']}}</span><br>
                      @endif
                    @endfor
                  </div>
                </div><!-- /.widget-user -->
              </div><!-- /.col -->
            @endforeach
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

@endsection
