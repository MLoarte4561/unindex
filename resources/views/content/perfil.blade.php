@extends('layout.index')
@section('perfil')
<br><br><br><br><br><br>	
<div class="container">
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
                        <div class="myform form ">
                        <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Perfil</h1>
						 </div>
                    </div>
                    <br>

                           <div class="form-group">
                           <H5 style="text-transform: capitalize;">Nombre: {{session('user_name')}}</H5>
                           </div>
                           <div class="form-group">
                           <H5 >Correo: </H5>
                           </div>
                           <div class="form-group">
                           <H5 >Edad: </H5>
                           </div>
                           <br>
                           <div class="col-md-12 text-center ">
                              <a  href="{{route('editar')}}"><button class=" btn btn-block mybtn btn-primary tx-tfm" >Editar Datos</button></a>
                           </div>
                           <br><br>
                           <div class="form-group">
                              <p class="text-center"><a href="{{route('logout')}}" id="signup">Cerrar Sesión</a></p>
                           </div>
                        </div>
                        
                 
                    
				</div>
			  
			</div>
		</div>
	</div>   
</div>  

<br><br><br><br><br><br>
@endsection