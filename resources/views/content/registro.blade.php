<!DOCTYPE html>
<html>
<head>
		<title></title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	  	<link rel="stylesheet" href="fonts/icomoon/style.css">

	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/magnific-popup.css">
	  	<link rel="stylesheet" href="css/jquery-ui.css">
	  	<link rel="stylesheet" href="css/owl.carousel.min.css">
	  	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	  	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	  	<link rel="stylesheet" href="css/aos.css">
   	    <link rel="stylesheet" href="css/rangeslider.css">

	  	<link rel="stylesheet" href="css/style.css">
	  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="  sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<br>

	<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card-body">
            <h5 class="card-title text-center">Registrar</h5>
            <form class="form-signin" method="post" action="{{url('registrar')}}">
    			     {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" id="nombre" class="form-control" placeholder="Nombre"  name="nombre" required pattern="[A-Za-z]+">
                <label for="nombre" >Nombre de usuario</label>
              </div>

                <div class="form-label-group">
                <input type="email" id="correo" class="form-control" placeholder="Correo" name="correo" required >
                <label for="correo">Correo</label>
              </div>

              @if(Session::has('message'))
                <div class="form-group">
                  <div class="alert alert-primary" role="alert">
                    {{Session('message')}}
                  </div>
                </div>
              @endif

				      <div class="form-label-group">
                <input type="date" id="fecha" class="form-control" placeholder="Fecha de Nacimiento" name="fecha" required min="1997-12-31" max="2007-01-01">
                <label for="fecha">Fecha de Nacimiento</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password"  minlength="8" name="contrasenia" required>
                <label for="inputPassword">Contraseña</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrarse</button>



            </form>
          </div>
      </div>
    </div>
  </div>



	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="js/typed.js"></script>

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/rangeslider.min.js"></script>

</body>
</html>