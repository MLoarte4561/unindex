<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

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
    
    <header class="site-navbar py-2 bg-white" role="banner">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{route('inicio')}}" class="text-black h2 mb-0">UNINDEX</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">

 <!-- Modal Login ----------------------------------------------------->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="card-body">
                    <h5 class="card-title text-center">Iniciar Sesión</h5>
                    <form class="form-signin">

                      <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Correo</label>
                      </div>

                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Contraseña</label>
                      </div>

                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>       
                      </div>

                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                      </br>

                      <h6 class="card-title text-center" data-toggle="modal" data-target="#exampleModal2">¿No tienes cuenta? <a href="{{route('registro')}}">Registrate</a></h66>
                      <hr class="my-4">

                      <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i>Acceder con Google</button>
                      <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i>Acceder como invitado</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>

      <!-- Optional JavaScript -->

            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li ><a href="{{route('inicio')}}"><span>Inicio</span></a></li>
                <li ><a href="{{route('universidad')}}"><span>Universidades</span></a></li>
                <li><a href="{{route('ranking')}}"><span>Ranking</span></a></li>
                <li><a href="{{route('nosotros')}}"><span>Nosotros</span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#exampleModal"><span>Iniciar sesión</span></a></li>
              </ul>
            </nav>
          </div>

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
      
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-4">
                <h2 class="footer-heading mb-3">Enlaces</h2>
                <ul class="list-unstyled">
                  <li><a href="{{route('inicio')}}">Inicio</a></li>
                  <li><a href="{{route('universidad')}}">Universidades</a></li>
                  <li><a href="{{route('ranking')}}">Ranking Universitario</a></li>
                  <li><a href="#"data-toggle="modal" data-target="#exampleModal">Login</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-3">Infomarción del Sistema</h2>
                <ul class="list-unstyled">
                  <li><a href="{{route('nosotros')}}">Nosotros</a></li>
                </ul>
              </div>
              <div class="col-md-4">
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
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Recibe noticias del sistema web</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Ingrese su email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Enviar</button>
                </div>
              </div>
            </form>
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
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="{{URL::asset('js/main.js')}}"></script>


</body>
</html>