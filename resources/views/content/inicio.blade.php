@extends('layout.index')

@section('inicio')

<div class="site-blocks-cover overlay" style="background-image:  url(images/1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">¡Bienvenido a Unindex, el buscador de universidades! <span class="typed-words"></span></h1>
                <p data-aos="fade-up" data-aos-delay="100"><b> Empieza a buscar universidades licenciadas por la SUNEDU en Lima Metropolitana</b></p>
              </div>
            </div>

            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
              <form method="post">


                <div class="row align-items-center">

                  

                    <div class="col-lg-12 col-xl-3">
                        <div class="select-wrap">
                          <span class="icon icon-room"></span></span>
                          <select class="form-control" name="" id="">
                              <option value="">Distrito</option>
                              <option value="">La Molina</option>
                              <option value="">Ate</option>
                              <option value="">Santa Anita</option>
                              <option value="">Los Olivos</option>
                              <option value="">Monterrico</option>
                              <option value="">San Miguel</option>
                            </select>
                        </div>
                      </div>
                  
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                      <div class="select-wrap">
                          <select class="form-control" name="" id="">
                            <option value="">Universidad</option>
                            <option value="">PUCP</option>
                            <option value="">UNMSM</option>
                            <option value="">UNI</option>
                            <option value="">UPC</option>
                            <option value="">USMP</option>
                            <option value="">UTEC</option>
                          </select>
                        </div>
                    
                  </div>

                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary" value="Search">
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Universidades</h2>
            <p class="color-black-opacity-5">Visualiza las Universidades Licenciadas por la SUNEDU </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/2.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category" href="#">Universidad</a>
                <h2 class="mb-1"><a href="#">Universidad Nacional Mayor de San Marcos</a></h2>
                <span class="address">Estudia en la Decana de America</span>
              </div>
            </div>

          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            
              <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/2.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category" href="#">Universidad</a>
                    <h2 class="mb-1"><a href="#">Universidad Peruana de Ciencias Aplicadas</a></h2>
                    <span class="address">Estudia en la sede de Monterrico</span>
                  </div>
                </div>

          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            
              <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/2.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category" href="#">Universidad</a>
                    <h2 class="mb-1"><a href="#">Universidad Nacional de Ingeniera</a></h2>
                    <span class="address">Estudia en la universidad con las carreras de ingeniera unicas en el Perú</span>
                  </div>
                </div>

          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            
              <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/2.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category" href="#">Universidad</a>
                    <h2 class="mb-1"><a href="#">Pontificie Universidad Catolica del Perú</a></h2>
                    <span class="address">Estudia en la Universidad mas prestigiosa del Perú</span>
                  </div>
                </div>

          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            
              <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/2.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category" href="#">Universidad</a>
                    <h2 class="mb-1"><a href="#">Universidad de Lima</a></h2>
                    <span class="address">Estudia en su unica sede de Surco</span>
                  </div>
                </div>

          </div>

          

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            
            
              <div class="listing-item">
                  <div class="listing-image">
                    <img src="images/2.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category" href="#">Universidad</a>
                    <h2 class="mb-1"><a href="#">Universidad de Tecnologia e Ingeniera</a></h2>
                    <span class="address">Estudia en la sede de Barranco</span>
                  </div>
                </div>

          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="images/3.jpeg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">¿Porqué estudiar en una universidad Licensiada?</h2>
            <p>Estudiar en una universidad licenciada brinda confianza, credibilidad y garantía a los estudiantes y les asegura que la institución cuenta con las mejores condiciones académicas, de infraestructura y de proyección laboral, para beneficio de los futuros profesionales</p>

            <ul class="ul-check list-unstyled success">
              <li>La SUNEDU sienta las bases para mejorar la empleabilidad de los jóvenes, señaló Lorena Masías, Superintendente de la institución.</li>
              <li>El licenciamiento permite que el estudiante egresado se convierta en una opción elegible para las empresas privadas e instituciones públicas que solicitan personal.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    



    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Noticias</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/4.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">UPC</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">El Comercio</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/5.jpeg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">PUCP</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">Peru 21</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">Sugerencia</h2>
              <p class="color-black-opacity-5">Realiza sugerencias para mejorar nuestro sistema web</p>
            </div>
          </div>
        <div class="container">
          <div class="row">
            <div class="col-md-7 mb-5"  data-aos="fade">
  
              
  
              <form action="#" class="p-5 bg-white">
  
                <div class="row form-group">

                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Nombre</label> 
                    <input type="subject" id="subject" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  
                    <div class="col-md-12">
                      <label class="text-black" for="email">Email</label> 
                      <input type="email" id="email" class="form-control">
                    </div>
                  </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Mensaje</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe aquí tu sugerencia.."></textarea>
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Enviar Sugerencia" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>
  
    
              </form>
            </div>
            <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
              
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Informacion</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              </div>
  
            </div>
          </div>
        </div>
      </div>


    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-2 text-white">Realiza sugerencias y valoraciones en el sistema web universitario.</h2>
            <p class="mb-4 lead text-white-opacity-05">Puedes acceder como invitado o registrarte con tu correo electronico</p>
            <p class="mb-0"><a href="#"data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-white text-white btn-md font-weight-bold">Acceder</a></p>
          </div>
        </div>
      </div>
    </div>
    
    
  </div>


@endsection