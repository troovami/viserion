@extends('app')

@section('content')

@foreach ($vehiculos as $vehiculo)

@endforeach
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
							

    <!-- Start Body Content -->

                <!-- Vehicle Details -->
                <article class="single-vehicle-details">
                    <div class="single-vehicle-title">
                        <span class="badge-premium-listing">
                            
                            <img src="data:image/jpeg;base64,{{ $vehiculo->bandera }}" alt="{!! $vehiculo->pais !!}" title="{!! $vehiculo->pais !!}" style="width:35px"> {!! $vehiculo->pais !!}

                        </span>

                        <h2 class="post-title">  
                        
	                        <img src="data:image/jpeg;base64,{{ $vehiculo->logo }}" alt="{!! $vehiculo->marca !!}" title="{!! $vehiculo->marca !!}" style="width:65px">
	                        {!! $vehiculo->marca !!}  {!! $vehiculo->modelo !!} {!! $vehiculo->int_ano !!}
                                                
                        </h2>
                        
                    </div>



                    <div class="single-listing-actions">
                        <div class="btn-group pull-right" role="group">






<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Compartir esta publicación">
    <i class="fa fa-share-alt"></i> Compartir <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li>

    
		&nbsp;&nbsp;<a href="https://twitter.com/share" class="twitter-share-button" data-text="Se vende este vehículo {!! $vehiculo->marca !!} {!! $vehiculo->modelo !!} {!! $vehiculo->int_ano !!}" data-url="http://www.troovami.com/{{Request::path()}}" data-via="troovami" data-hashtags="">Tweet</a>
  
    
    </li>
    <li>
        &nbsp;&nbsp;<div class="fb-share-button" data-href="http://viserion-troovami.ddns.net/{{Request::path()}}" data-layout="button"></div>
    </li>

  </ul>
</div>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>    
  
                            @if (Auth::guest())

                                <div class="user-login-panel">
                                    <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-default" title="Ver datos del vendedor"><i class="fa fa-eye"></i> <span> Ver datos del vendedor</span></a>
                                </div>

                            @endif
          

                        </div>
                        
																	@if ($vehiculo->lng_idpais == '13' ) 
		                            
											                            	@if (Auth::guest())
					                                               
													                          <div class="btn btn-default price">
													                          
																				<a href="#" class="" data-toggle="modal" data-target="#loginModal">
														                            Click ver precio
														                        </a>
														                        
													                          </div>
							                                                                                                   
							                                               @endif
							                                               
							                                               @if (Auth::user())
							                                               		
														                        <div class="btn btn-info price">
														                                                           				                                                                        
														                         	@if ($vehiculo->str_moneda == 'Dólares' ) 
														                            
														                            	$
														                            	
														                            @elseif ($vehiculo->str_moneda == 'Bolívares' )
														                            	
														                            	BsF
														                            	
														                            @elseif ($vehiculo->str_moneda == '' )
														                            
														                            	{!! $vehiculo->str_abreviatura !!}
														                            	                            
														                            @endif
														                        
														                         {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!} 
														                                                                   
														                        </div>
							                                                	
							                                               @endif 
						                                               	
										                            @else
										                            	
													                        <div class="btn btn-info price">
													                                                           				                                                                        
													                         	@if ($vehiculo->str_moneda == 'Dólares' ) 
													                            
													                            	$
													                            	
													                            @elseif ($vehiculo->str_moneda == 'Bolívares' )
													                            	
													                            	BsF
													                            	
													                            @elseif ($vehiculo->str_moneda == '' )
													                            
													                            	{!! $vehiculo->str_abreviatura !!}
													                            	                            
													                            @endif
													                        
													                         {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!} 
													                                                                   
													                        </div>
										                            								                            
										                            @endif 
                        

                    </div>
                    
                    <div class="row"> <!-- style="background-color: red" -->
                        <div class="col-md-8">
                            <div class="single-listing-images">
                            
                                <div class="featured-image format-image">
                                    <a href="{{ $vehiculo->imagen }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ $vehiculo->imagen }}" style="width: 100%" alt=""></a>
                                </div>
                                
                                <div class="additional-images">

									<ul class="owl-carousel" data-columns="4" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="3">
	                                        
	                                       @if ($vehiculo->str_video != "")
		                                        
		                                   		<li class="item format-image"> <a href="{{ $vehiculo->str_video }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ $vehiculo->imagen }}" alt=""></a></li>
		                                        
		                                   @endif
		                                   
	                                       @foreach ($imagenes as $imagen)
                                  
												<li class="item format-image">
													 <a href="{{ $imagen->imagen }}" data-rel="prettyPhoto[gallery]" class="media-box">
													 	<img src="{{ $imagen->imagen }}" alt="">
													 </a>
												</li>
											
											@endforeach 					

	                                </ul>
                     
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="sidebar-widget widget">

                            @if (Auth::user())


                            <div class="panel panel-default">
                              <div class="panel-heading" style="background-color: #5bc0de">
                                <h3 class="panel-title" style="color: #FFF"><img src="data:image/jpeg;base64,{{ $vehiculo->bandera_persona }}" alt="{!! $vehiculo->pais_persona !!}" title="{!! $vehiculo->pais_persona !!}" style="width:35px"> Datos del contacto</h3>
                              </div>
                                  <div class="panel-body">
                                    <div class="row">
                                      <div class="col-xs-6 col-md-4 thumbnail">
                                        
                                            <img src="data:image/jpeg;base64,{{ $vehiculo->ima_persona }}" alt="{!! $vehiculo->nombre_persona !!} {!! $vehiculo->apellido_persona !!}" title="{!! $vehiculo->nombre_persona !!} {!! $vehiculo->apellido_persona !!}" style="width:100%">

                                      </div>

                                         Usuario: <b>{!! $vehiculo->usuario !!}</b><br>
                                         Nombre: <b>{!! $vehiculo->nombre_persona !!}, {!! $vehiculo->apellido_persona !!}</b><br>
                                         País: {!! $vehiculo->pais_persona !!}<br>
                                         Inscrito: {!! $vehiculo->fecha_inscripcion !!}
                                        <br>

                                    </div>
                                        <i class="fa fa-phone"></i> <b>{!! $vehiculo->str_telefono !!}</b><br>
                                        <i class="fa fa-envelope"></i> <a href="mailto:{!! $vehiculo->email !!}">{!! $vehiculo->email !!}</a><br>
                                        <!--
                                        @if ($vehiculo->str_twitter != "") <i class="fa fa-twitter"></i> <b>{!! $vehiculo->str_twitter !!}</b><br> @endif
                                        @if ($vehiculo->str_facebook != "") <i class="fa fa-facebook"></i> <b>{!! $vehiculo->str_facebook !!}</b><br> @endif
                                        @if ($vehiculo->str_instagram != "") <i class="fa fa-instagram"></i> <b>{!! $vehiculo->str_instagram !!}</b><br>@endif
                                        -->
                                  </div>
                                </div>

                            @endif
                                
                                <br>

                                <ul class="list-group">
                                    <li class="list-group-item"> <span class="badge">Fecha de Publicación</span> {!! $vehiculo->created_at !!} </li> 
                                    <li class="list-group-item"> <span class="badge">Clasificación</span> {!! $vehiculo->subtipo !!} </li>
                                    <li class="list-group-item"> <span class="badge">Ciudad</span> {!! $vehiculo->ciudad !!} </li>
                                    <li class="list-group-item"> <span class="badge">Recorrido</span> {!! number_format($vehiculo->str_recorrido, null, ',', '.') !!} </li>
                                    <li class="list-group-item"> <span class="badge">Color</span> {!! $vehiculo->color !!}</li>
                                    <li class="list-group-item"> <span class="badge">Motor</span> {!! $vehiculo->cilindrada !!} cc</li>

                                </ul>
                                
                                <br>
                                @if (Auth::user())
                                    <p class="text-align-center">
                                        <a href="http://www.corporacionjpb.com" title="www.corporacionjpb.com" target="_blank">
                                            <img src="{{ asset('autostars/images/publicidad-troovami/jpb-publicidad.JPG') }}" style="width: 350px" alt="Logo">   
                                        </a>
                                    </p>
                                @endif

                                @if (Auth::guest())
                                
                                    <p class="text-align-center"> 
                                    
                                        <a href="http://www.tecnotropolisla.com" title="www.tecnotropolisla.com" target="_blank">
                                            <img src="{{ asset('autostars/images/publicidad-troovami/publicidad2.jpg') }}" style="width: 350px" alt="Logo">   
                                        </a>

                                    </p>

                                    <p class="text-align-center">
                                        <a href="http://www.corporacionjpb.com" title="www.corporacionjpb.com" target="_blank">
                                            <img src="{{ asset('autostars/images/publicidad-troovami/jpb-publicidad.JPG') }}" style="width: 350px" alt="Logo">   
                                        </a>
                                    </p>
                               
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="row"> <!-- style="background-color: blue" -->
                        <div class="col-md-8">
                            <div class="tabs vehicle-details-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#vehicle-add-features">Especificaciones</a></li>
                                    <li> <a data-toggle="tab" href="#vehicle-specs">Características</a></li>
                                    
                                    <!--<li> <a data-toggle="tab" href="#vehicle-location">Ubicación</a> </li>-->

                                </ul>
                                <div class="tab-content">

                                    <div id="vehicle-add-features" class="tab-pane fade in active">


  <h2>Descripción del Vehículo</h2>



                                        {!! $vehiculo->str_comentario !!}
                                            
                                            <br><br>
                                            <table class="table-specifications table table-striped table-hover">
                                                
                                                <tbody>

                                                    <tr>
                                                        <td>Año</td>
                                                        <td>{!! $vehiculo->int_ano !!}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Marca</td>
                                                        <td>{!! $vehiculo->marca !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Modelo</td>
                                                        <td>{!! $vehiculo->modelo !!}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Recorrido</td>
                                                        <td>{!! number_format($vehiculo->str_recorrido, null, ',', '.') !!}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Color</td>
                                                        <td>{!! $vehiculo->color !!}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Motor</td>
                                                        <td>{!! $vehiculo->cilindrada !!} cc</td>
                                                    </tr>

												@if ($vehiculo->int_cilindros != "")

                                                    <tr>
                                                        <td>Cilindros</td>
                                                        <td>
                                                        
															{!! $vehiculo->int_cilindros !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif 

                                                    <tr>
                                                        <td>Placa</td>
                                                        <td>{!! $vehiculo->str_placa !!}</td>
                                                    </tr>


@if ($vehiculo->int_cantidad_puertas != "")

                                                    <tr>
                                                        <td>Puertas</td>
                                                        <td>
                                                        
															{!! $vehiculo->int_cantidad_puertas !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif 
                                             	
												@if ($vehiculo->estereo != "")

                                                    <tr>
                                                        <td>Estereo</td>
                                                        <td>
                                                        
															{!! $vehiculo->estereo !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif 
                                             	
												@if ($vehiculo->tapizado != "")

                                                    <tr>
                                                        <td>Tapizado</td>
                                                        <td>
                                                        
															{!! $vehiculo->tapizado !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif 
                                             	                                                   
												@if ($vehiculo->vidrios != "")

                                                    <tr>
                                                        <td>Vidrios</td>
                                                        <td>
                                                        
															{!! $vehiculo->vidrios !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif                                                     

												@if ($vehiculo->traccion != "")

                                                    <tr>
                                                        <td>Tracción</td>
                                                        <td>
                                                        
															{!! $vehiculo->traccion !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif 
                                             	
												@if ($vehiculo->transmision != "")

                                                    <tr>
                                                        <td>Transmisión</td>
                                                        <td>
                                                        
															{!! $vehiculo->transmision !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif 

												@if ($vehiculo->direccion != "")

                                                    <tr>
                                                        <td>Dirección</td>
                                                        <td>
                                                        
															{!! $vehiculo->direccion !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif        
                                                    
												@if ($vehiculo->combustible != "")

                                                    <tr>
                                                        <td>Combustible</td>
                                                        <td>
                                                        
															{!! $vehiculo->combustible !!}
                                                                                                                
                                                        </td>
                                                    </tr>
                                             	@endif  
                                                    <tr>
                                                        <td>Negociable</td>
                                                        <td>{!! $vehiculo->negociable !!}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Financiamiento</td>
                                                        <td>{!! $vehiculo->financiamiento !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chocado</td>
                                                        <td>{!! $vehiculo->chocado !!}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Dueños</td>
                                                        <td>{!! $vehiculo->unicodueno !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Motor Reparado</td>
                                                        <td>{!! $vehiculo->reparado !!}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                    </div>

                                    <div id="vehicle-specs" class="tab-pane fade">
                                        <div class="accordion" id="toggleArea">
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Seguridad <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseOne" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "seguridad_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Sonido <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseTwo" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "sonido_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
      
                                            @if ($vehiculo->lng_idtipo_vehiculo == 153)<!-- Carros -->
                                                                                        
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Exterior <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseThird" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "exterior_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseForth"> Confort <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseForth" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "confort_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            @endif

                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFive"> Accesorios Internos <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseFive" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "accesoriosInternos_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Toggle --> 
                                    </div>
        
                                    <!--
                                    <div id="vehicle-location" class="tab-pane fade">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3270.54916947425!2d-81.035158!3d34.942842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856891c407522ef%3A0x263fcc9e9260347a!2sWhite+Horse+Restaurant!5e0!3m2!1sen!2sin!4v1424094975250" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                                    </div>
                                    -->

                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <!-- Recently Listed Vehicles -->

                            @if (Auth::user())                      

                                

                            @endif
                            <div class="fb-comments" data-href="http://cars.troovami.com/{{Request::path()}}" data-numposts="5"></div>

                            @if (Auth::guest())

                            <!--
                                <a href="#" class="" data-toggle="modal" data-target="#loginModal">
                                    <h5>Click para ver los comentarios  
                                        <i class="fa fa-facebook-official"></i>
                                    </h5>
                                    <br><br>
                                </a>
                            -->
                            @endif
                    <hr>
                            <a href="http://www.libost.com" title="www.libost.com" target="_blank">
                                <img src="{{ asset('autostars/images/publicidad-troovami/publicidad-libost.png') }}" style="" alt="Logo">
                            </a>

                            <section class="listing-block recent-vehicles">
                                <div class="listing-header">

                                @if(!empty($vehiculosSimilares))
                        
                                    <h3>Vehículos Similares</h3>

                                @endif

                                </div>
                                
                                <div class="listing-container">
                                    <div class="carousel-wrapper">
                                        <div class="row">
                                            <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                                
                                                @foreach ($vehiculosSimilares as $similares)
	                                                <li class="item">
	                                                    <div class="vehicle-block format-standard">
	                                                      
	                                                        <a href="{{ route('detalles',$similares->id) }}" class="media-box"><img class="" src="{{ $similares->imagen }}" /></a>
	                                                        
	                                                        <span class="label label-default vehicle-age"></span>
					                                        <span class="vehicle-age">
					                                        <p class="label label-default">{!! $similares->int_ano !!}</p>
					                                        <p class="text-center" style="margin-top: -12px;margin-left: -20px;"><img class="" src="data:image/jpeg;base64,{{ $similares->bandera }}" style="width:35px" /></p>                                       
					                                        </span>	                                                        
	                                                        <h5 class="vehicle-title"><a href="#">{!! $similares->marca." ".$similares->modelo!!}</a></h5>
	                                                        <span class="vehicle-cost">{!! $similares->ciudad !!}</span>
	                                                        
																	@if ($similares->lng_idpais == '13' ) 
		                            
											                            	@if (Auth::guest())
					                                               
							                                                    <div class="price" style="font-size:12px">
							                                                    
																					<a href="#" class="" data-toggle="modal" data-target="#loginModal">
															                            Click ver precio
															                        </a>
																					                                                    
							                                                    </div>
							                                                                                                   
							                                               @endif
							                                               
							                                               @if (Auth::user())
							                                               		
						                                               	   		@include('precioSimilares')
							                                                	
							                                               @endif 
						                                               	
										                            @else
										                            	
																		@include('precioSimilares')
										                            								                            
										                            @endif                                                        
	                                                        
	                                                    </div>
	                                                </li>
												@endforeach
												
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </section>	
                            
                        </div>
                        <!-- Vehicle Details Sidebar -->
                        <div class="col-md-4 vehicle-details-sidebar sidebar"><!-- style="background-color: green" -->
                        
                        <div class="col-md-12">

                        </div>
                            <!-- Vehicle Enquiry -->
                            
                             <div class="sidebar-widget widget seller-contact-widget">
                             
                                <div class="vehicle-enquiry-in">
                                    <div class="row">
                                      <div class="col-md-12">

                                            <p>
                                                @include('twitter')
                                            
                                                    <a href="http://www.tecnotropolisla.com" title="www.tecnotropolisla.com" target="_blank">
                                                        <img src="{{ asset('autostars/images/publicidad-troovami/publicidad2.jpg') }}" style="width: 350px" alt="Logo">   
                                                    </a>
                                                @include('facebook')
                                            </p>
                    
                                                <p class="text-align-center"> 
                                                
                                                    <a href="http://www.skd.com.ve" title="www.skd.com.ve" target="_blank">
                                                    	<img src="{{ asset('autostars/images/publicidad-troovami/publicidad3.png') }}" style="width: 350px" alt="Logo">   
                                                    </a>
                                                
                                                </p>
                                            

                                      </div>
                                    </div>
                                </div>
                            </div>   

                            
                        </div>
                    </div>
                </article>
                
</div>


 </div>
			            	
				           
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection