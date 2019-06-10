@extends('layout.index')

@section('login')
<br><br><br><br><br><br>	
<div class="container">
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Acceso</h1>
						 </div>
					</div>
                   <form action="{{route('loginuser')}}" method="post" name="login">
                   	{{csrf_field()}}
                           <div class="form-group">
                              <label for="exampleInputEmail1">Ingresa tu correo</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Correo">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Ingresa tu contraseña</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Contraseña">
                           </div><br>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Ingresar</button>
                           </div>
                           <br>
                           <div class="form-group">
                              <p class="text-center">Aún no tienes una cuenta? <a href="{{route('registrar')}}" id="signup">Registrate</a></p>
                           </div>
                        </form>
                 
					</div>
				</div>
			  
			</div>
		</div>
	</div>   
</div>  

<br><br><br><br><br><br>

@endsection