@extends('layout.index')
@section('test')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/test-vocacional.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Test de orientación Vocacional</h1>
                <p class="mb-0">Descubre las carreras adecuadas para ti de acuerdo a tu personalidad.</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  
    <br><br><br>

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">A continuación deberás responder a tu criterio las siguientes preguntas y situaciones planteadas</h2>
              <p class="color-black-opacity-5">PARA OBTENER UN RESULTADO PRECISO es necesario que marques tu respuesta en cada pregunta</p>
            </div>
          </div>



          @if(Session::has('message'))
          <div class="container">
                <div class="form-group" align="center">
                  <div class="alert alert-primary" role="alert">
                  <h1>Resultados </h1>
                    <h4>{{Session('message')}}</h4>
                  </div>
                </div>
            </div>
        @else
        <div class="container">
                <div class="form-group" align="center">
                  <div class="alert alert-primary" role="alert">
                  <h1>Sección de Resultados</h1>
                  </div>
                </div>
                </div>
         @endif

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-11">


          <form method="post" action="{{route('enviarTest')}}">
          {{ csrf_field() }}
            
            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 1</h3>
                <h5>Termina la frase: "Me gustaría que mi trabajo sirviese para .."</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="pregunta1" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Mejorar la vida de las personas</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="pregunta1" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Construir un mundo mejor</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="pregunta1" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">Ayudar a las demás personas</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="pregunta1" value="d"    class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">Unir a las demás personas</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 2</h3>
                <h5>Prefieres trabajar ...</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio5" name="pregunta2" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio5">Sólo/a</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio6" name="pregunta2" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio6">En equipo</label>
                </div>
               
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 3</h3>
                <h5>¿Cuál de estas crees que tu mejor cualidad?</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio7" name="pregunta3" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio7">Mi lógica</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio8" name="pregunta3" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio8">Mi juicio</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio9" name="pregunta3" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio9">Mi empatía</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio10" name="pregunta3" value="d" class="custom-control-input">
                <label class="custom-control-label" for="customRadio10">Mi creatividad</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 4</h3>
                <h5>Escoje la situación que más te atraiga:</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio11" name="pregunta4" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio11">Personas leyendo</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio12" name="pregunta4" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio12">Personas unidas tomándose de la mano</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio13" name="pregunta4" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio13">Una persona ayudando a otra</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio14" name="pregunta4" value="d" class="custom-control-input">
                <label class="custom-control-label" for="customRadio14">Personas trabajando en un escritorio</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 5</h3>
                <h5>¿Cuál de estas es tu peor cualidad?</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio15" name="pregunta5" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio15">Mi empatía</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio16" name="pregunta5" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio16">Mi lógica</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio17" name="pregunta5" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio17">Mi creatividad</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio18" name="pregunta5" value="d" class="custom-control-input">
                <label class="custom-control-label" for="customRadio18">Mi juicio</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 6</h3>
                <h5>¿Qué asignatura te gusta más?</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio19" name="pregunta6" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio19">Química</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio20" name="pregunta6" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio20">Matemática</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio21" name="pregunta6" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio21">Lenguaje</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio22" name="pregunta6" value="d" class="custom-control-input">
                <label class="custom-control-label" for="customRadio22">Educación física</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 7</h3>
                <h5>Termina la frase: "Me considero una persona .."</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio23" name="pregunta7" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio23">Social</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio24" name="pregunta7" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio24">Ambiciosa</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio25" name="pregunta7" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio25">Activa</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio26" name="pregunta7" value="d" class="custom-control-input">
                <label class="custom-control-label" for="customRadio26">Creativa</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 8</h3>
                <h5>Tienes un problema y no sabes cómo resolverlo. ¿Qué haces?</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio27" name="pregunta8" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio27">Busco un tutorial</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio28" name="pregunta8" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio28">Pruebo hasta que me salga</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio29" name="pregunta8" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio29">Pido ayuda a otras personas</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio30" name="pregunta8" value="d" class="custom-control-input">
                <label class="custom-control-label" for="customRadio30">Busco a alguien que sepa resolverlo</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 9</h3>
                <h5>Si tuvieras que escoger una de estas aficiones. ¿Cuál escogerías?</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio31" name="pregunta9" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio31">Cocinar</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio32" name="pregunta9" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio32">Escribir</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio33" name="pregunta9" value="c" class="custom-control-input">
                <label class="custom-control-label" for="customRadio33">Dibujar</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio34" name="pregunta9" value="d" class="custom-control-input">
                <label class="custom-control-label" for="customRadio34">Deporte</label>
                </div>
              </div>
            </div>

            <div class="d-block d-md-flex listing-horizontal">
              <div class="lh-content">
                <h3 style="color:blue">Pregunta 10</h3>
                <h5>Termina la frase: "Prefiero trabajar con mi .."</h5>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio35" name="pregunta10" value="a" class="custom-control-input">
                <label class="custom-control-label" for="customRadio35">Cuerpo</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio36" name="pregunta10" value="b" class="custom-control-input">
                <label class="custom-control-label" for="customRadio36">Mente</label>
                </div>
              </div>
            </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar test</button>
               

            </form>
            
            <br>

           <hr>
           <div class="container" align="center">
             <p>Esta sección está basada en una investigación psicológica. Agosto 2018<br>Fuente: <a href="https://www.youtube.com/watch?v=tMu5gNYeqcE&feature=youtu.be" target="_blank">https://www.youtube.com/watch?v=tMu5gNYeqcE&feature=youtu.b</a></p>
           </div>

          </div>
        </div>
      </div>
    </div>


@endsection