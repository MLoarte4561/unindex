@extends('layout.admin')
@section('ad_inicio')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Panel de control
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$universidades}}</h3>
            <p>Universidades registradas</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$users}}</h3>
            <p>Usuarios registrados</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$valoraciones}}</h3>
            <p>Comentarios a universidades</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="container">
        <table class="table table-hover ">
          <thead>
            <tr class="table-secondary">
              <th scope="col">Nombres de usuarios</th>
              <th scope="col">Correos</th>
              <th scope="col">Fechas de nacimiento</th>
            </tr>
          </thead>
          <tbody>
            @foreach($usuarios as $us)
            <tr>
              <td class="table-primary">{{$us->nombre}}</td>
              <td class="table-primary">{{$us->correo}}</td>
              <td class="table-primary">{{$us->fecha_nacimiento}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="col-12 text-center mt-5">
          <p class="custom-pagination">
            {{ $usuarios->links() }}
          </p>
        </div>
      </div>
      
    </div><!-- /.row (main row) -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection
