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
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <div class="box-body">

                  <form action="{{route('carreras_get','buscar_car')}}" method="post">
                  {{csrf_field()}}  
                  <div class="row align-items-center">
                    <div class="col-lg-12 col-xl-10 no-sm-border border-right">
                      <div class="select-wrap">
                          <select class="form-control" name="carreras" id="carreras">
                            <option value="" >-- Seleccionar universidad --</option>
                            
                            @foreach($car as $c)                            
                              <option value="{{$c->nombre}}">{{$c->nombre}}</option>
                            @endforeach
                          
                          </select>
                      </div>   
                    </div>
                    
                    <div class="col-lg-16 col-xl-2 ml-auto text-right">
                      <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                  </div>
                  <hr>
                  @if(Session::has('message'))
                    <div class="form-group">
                      <div class="alert alert-primary" role="alert">
                        {{Session('message')}}
                      </div>
                    </div>
                  @endif
                  @if(Session::has('message2'))
                    <div class="form-group">
                      <div class="alert alert-danger" role="alert">
                        {{Session('message2')}}
                      </div>
                    </div>
                  @endif
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@endsection
