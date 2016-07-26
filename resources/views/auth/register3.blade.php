@extends('app')

@section('content')

  <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row" style="margin-top:-49px">

                    <div class="results-container">

                        <div class="results-container-in">
                            {!! Form::input('hidden', 'pag', 1 , ['id'=> 'pag']) !!}
                            
							<div id="barra-progreso" class="">
           
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Buscando...</span>
                                    </div>
                                </div>

                            </div>
                           
                                                  
							<div id="results-holder" class="results-grid-view">
								{!! Form::input('hidden', 'paginas', 1 , ['id'=> 'paginas']) !!}
							
					          <div class="bs-callout bs-callout-warning hidden">
					                   
								<div class="alert alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								  <span aria-hidden="true">&times;</span></button>
								  <strong><i class="fa fa-exclamation-triangle"></i> Disculpe!</strong> Aún faltan datos por completar.....
								</div>     
					                   					                   
					          </div>
					
					          <div class="bs-callout bs-callout-info hidden">
					            <div class="alert alert-info" role="alert">
					            	<strong><i class="fa fa-check"></i> Listo!</strong> Enviando....
					            </div>  
					          </div> 

                    <div class="col-md-4">
                        <h2>Bienvenidos a Troovami!</h2>
                        <p>La nueva forma de publicar y vender tu vehículo, únete a la creciente comunidad de vendedores más grande de latinoamérica.</p>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <h3>Tómate un café mientras vendes tu vehículo</h3>
                            <p>Nosotros te ayudaremos a vender</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-share-alt"></i>
                            </div>
                            <h3>Compartir tu publicación será un placer</h3>
                            <p>Nuestras redes sociales serán tu gran aliado para vender rápida y cómodamente.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <h3>¿Sólo quieres búscar?</h3>
                            <p>Revisa nuestras publicaciones, selecciona y contacta directamente al vendedor.</p>
                        </div>
                        <div class="spacer-20"></div>
                        
                        <hr class="fw">
                        
                        <header>
                            <h3>Testimonios</h3>
                        </header>
                        <div class="spacer-40"></div>
                        <!-- Testimonials -->
                        <div class="carousel-wrapper">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="2" data-items-mobile="1">
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Creo que ofrece una respuesta rápida y eficaz para los usuarios que publiquen.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/testimonios/danny.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Danny Corro</strong><span>San Antonio, Venezuela</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Me gustó la facilidad al momento de realizar una búsqueda.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/testimonios/gabriela.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Gabriela Cardozo</strong><span>Caracas, Venezuela</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Me parece genial la interaccion con las redes sociales, compartir y ver opiniones.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/testimonios/luis.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Luis Curra</strong><span>San Antonio, Venezuela</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                                                        
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Yo misma tomé las fotografias de mi carro y lo publique en poco tiempo.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/testimonios/maria.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>María Rodríguez</strong><span>La Victoria, Venezuela</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                     
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Muy rápido el proceso de publicar, y sin intermediarios, para mi lo mejor.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/testimonios/genesis.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Génesis Herrera</strong><span>Madrid, España</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Combinaron bien en un solo sitio, poder buscar varios tipos de vehiculos.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/testimonios/iris.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Iris Velasco</strong><span>Los Teques, Venezuela</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">

                        <section class="signup-form sm-margint">
                           
                            <div class="regular-signup">

								<h3> <i class="fa fa-user-plus"></i> Crear Cuenta</h3>
								<p style="color: red">(*) Campos obligatorios</p>
								{!! Form::open(['route' => 'register', 'id' => 'demo-form', 'data-parsley-validate', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 
								
								@include('auth.campos')
								  
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-8">
										
								        {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block']) !!}
								    </div>
								  </div>
								{!! Form::close() !!}

                            </div>
                            
                        </section>
                    </div>






							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection