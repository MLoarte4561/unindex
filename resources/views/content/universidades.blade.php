@extends('layout.index')

@section('universidades')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/7.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Universidades</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100">Universidades licenciadas por la SUNEDU</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  


    
    

    <div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-12">

            <div class="row">


              @foreach($universidad as $uni)
              <div class="col-md-9 col-lg-4 mb-4 mb-lg-3">
                <div class="h-entry">
                  <a href="{{action('universidadesController@getUniversidad',$uni->nombre)}}"><img src="{{$uni -> imagen}}" style="width: 459px; 
                  height: 290px;" alt="Image" class="img-fluid" ></a> 
                  <h2 class="font-size-regular"><a href="{{action('universidadesController@getUniversidad',$uni->nombre)}}">{{$uni -> nombre}}</a></h2>
                  <div class="meta mb-4">Distrito: {{$uni->distrito}} </div>
                </div> 
              </div>

              @endforeach



            </div>
            <div class="col-12 text-center mt-5">
              <p class="custom-pagination">
                {{ $universidad->links() }}
              </p>
            </div>
          </div>

          
        </div>
      </div>
    </div>

@endsection