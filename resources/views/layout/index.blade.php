<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{URL::asset('fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{URL::asset('css/aos.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/rangeslider.css')}}">

  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="  sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::asset('css/login.css')}}">
</head>

<body>

  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-2" style="background-color: #2D9EDB;" role="banner">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{route('inicio')}}" class="text-white h2 mb-0">UNINDEX</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">

      <!-- Optional JavaScript -->

            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block nav navbar-nav navbar-right">
                <li ><a href="{{route('inicio')}}" style="color: white;"><span>Inicio</span></a></li>
                <li ><a href="{{route('universidad')}}" style="color: white;"><span>Universidades</span></a></li>
                @if(Session::has('user_name'))
                  <li><a href="{{route('ranking')}}" style="color: white;"><span>Ranking</span></a></li>  
                @endif
                <li><a href="{{route('nosotros')}}" style="color: white;"><span>Nosotros</span></a></li>
                @if(Session::has('user_name'))
                <li>

                                      <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
                        <p>
                         Usuario
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                      
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  <a href="{{route('perfil')}}">
                    <span style="color: white;">

                      {{session('user_name')}}

                    </span>

                  </a>
                </li>

                  
                
                @else
                <li>
                <a href="{{route('login')}}" ><span style="color: white;">Iniciar sesión</span></a>
                </li>  
                @endif
                
              </ul>
            </nav>
          </div>

          <!--data-target="#exampleModal"-->
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>
      </div>
    </header>

    @yield('inicio')
    @yield('universidades')
    @yield('vista_unive')
    @yield('ranking')
    @yield('nosotros')
    @yield('login')
    @yield('perfil')
    @yield('editar')
      
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-3">Enlaces</h2>
                <ul class="list-unstyled">
                  <li><a href="{{route('inicio')}}">Inicio</a></li>
                  <li><a href="{{route('universidad')}}">Universidades</a></li>
                  <li><a href="{{route('ranking')}}">Ranking Universitario</a></li>
                  

                  @if(session::has('user_name'))

                  @else
                    <li><a href="{{route('login')}}">Login</a></li>
                  @endif

                </ul>
              </div>
              <div class="col-md-5">
                <h2 class="footer-heading mb-3">Infomarción del Sistema</h2>
                <ul class="list-unstyled">
                  <li><a href="{{route('nosotros')}}">Nosotros</a></li>
                </ul>
              </div>
              <div class="col-md-2">
                <h2 class="footer-heading mb-4">Contactos: </h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                <p>Edwin Arévalo</p>
                <div class="mt-3"></div>
                
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                <p>Moisés Loarte</p>
                <div class="mt-3"></div>

                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>        
                <p>Marcelo Cuellar</p>
              </div>

            </div>
          </div>
          
        </div>
        <div class="row pt-1 mt-3 text-center">
          <div class="col-md-12">
            <div class="border-top pt-3">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Tecsup</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="{{URL::asset('js/typed.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{URL::asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{URL::asset('js/jquery-ui.js')}}"></script>
      <script src="{{URL::asset('js/popper.min.js')}}"></script>
      <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
      <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{URL::asset('js/jquery.stellar.min.js')}}"></script>
      <script src="{{URL::asset('js/jquery.countdown.min.js')}}"></script>
      <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{URL::asset('js/bootstrap-datepicker.min.js')}}"></script>
      <script src="{{URL::asset('js/aos.js')}}"></script>
      <script src="{{URL::asset('js/rangeslider.min.js')}}"></script>
      <script>
      var typed = new Typed('.typed-words', {
     strings: ['Carreras Universitarias', 'Ranking de Universidades'],
      typeSpeed: 30,
      backSpeed: 30,
      backDelay: 2000,
      startDelay: 1000,
      loop: true,
      showCursor: true
      });
      </script>

      <script src="{{URL::asset('js/main.js')}}"></script>


</body>
</html>