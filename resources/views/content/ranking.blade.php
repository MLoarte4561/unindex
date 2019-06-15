@extends('layout.index')
@section('ranking')

 <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/6.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Ranking Universitario</h1>
                <p class="mb-0">De acuerdo a las valoraciones de los aspirantes</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-11">

            @foreach($ranking as $ran)
            <div class="d-block d-md-flex listing-horizontal">
              <a href="{{route('uni',$ran->nombre)}}" class="img d-block" style="background-image: url('{{$ran->imagen}}')">
              </a>
              <div class="lh-content">
                <h3><a href="{{route('uni',$ran->nombre)}}">{{$ran->nombre}}</a></h3>
                <p>{{$ran->distrito}}</p>
              </div>
            </div>
           @endforeach
           <hr>
           <div class="container">
             <p>Esta sección está basada en una investigación sobre las mejores universidades de Lima en 2019. <br>Fuente: <a href="https://www.rankia.pe/blog/mejores-opiniones-peru/4092827-mejores-universidades-peru-2019">https://www.rankia.pe/blog/mejores-opiniones-peru/4092827-mejores-universidades-peru-2019</a></p>
           </div>

          </div>
        </div>
      </div>
    </div>
@endsection
