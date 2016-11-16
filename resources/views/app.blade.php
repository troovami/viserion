<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Troovami - Vehículos</title>

<link rel="icon" href="{{ asset('autostars/images/troovami-vehicles.png') }}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{ asset('autostars/images/troovami-vehicles.png') }}" type="image/x-icon"/>

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@troovami">
<meta name="twitter:title" content="Troovami - Vehículos">
<meta name="twitter:description" content="Sitio de venta de vehículos">
<meta name="twitter:creator" content="@author_handle">

<meta name="twitter:image" content="http://troovami.com/autostars/images/troovami-vehicles.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Troovami - Vehículos" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://troovami.com" />
<meta property="og:image" content="http://troovami.com/autostars/images/troovami-vehicles2.jpg" />
<meta property="og:description" content="Sitio de venta de vehículos" />
<meta property="og:site_name" content="troovami.com" /meta property="fb:admins" content="Facebook numeric ID" />

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
{!! Html::style('autostars/css/bootstrap.css') !!} 
{!! Html::style('autostars/css/bootstrap-theme.css') !!} 
{!! Html::style('autostars/css/style.css') !!} 
{!! Html::style('autostars/vendor/prettyphoto/css/prettyPhoto.css') !!} 
{!! Html::style('autostars/vendor/owl-carousel/css/owl.carousel.css') !!} 
{!! Html::style('autostars/vendor/owl-carousel/css/owl.theme.css') !!} 
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
{!! Html::style('autostars/css/custom.css') !!} <!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
{!! Html::style('autostars/colors/color1.css') !!} 
{!! Html::style('autostars/style-switcher/css/style-switcher.css') !!} 
<!-- SCRIPTS
  ================================================== -->
{!! Html::script('autostars/js/modernizr.js') !!} <!-- Modernizr -->
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<!-- Validaciones -->

    <!-- Bootstrap core CSS -->
  

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  
    {!! Html::style('validacionesCliente/src/parsley.css') !!} 

    <style>


/*Parpadeo*/
/*
.text {
  font-size:28px;
  font-family:helvetica;
  font-weight:bold;
  color:#71d90b;
  text-transform:uppercase;
}
.parpadea {
  
  animation-name: parpadeo;
  animation-duration: 1s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;

  -webkit-animation-name:parpadeo;
  -webkit-animation-duration: 1s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
}

@-moz-keyframes parpadeo{  
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}

@-webkit-keyframes parpadeo {  
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
   100% { opacity: 1.0; }
}

@keyframes parpadeo {  
  0% { opacity: 1.0; }
   50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}
*/

/**/










      .hidden {
        display: none;
      }

      .first {
        padding-left: 15px;
        border-left: 2px solid #FF851B;
      }
      .second {
        padding-left: 15px;
        border-left: 2px solid #5bc0de;
      }
      .validate {
        margin-top: 10px;
      }

      .invalid-form-error-message {
        margin-top: 10px;
        padding: 5px;
      }
      .invalid-form-error-message.filled {
        border-left: 2px solid red;
      }
      p.parsley-success {
        color: #468847;
        background-color: #DFF0D8;
        border: 1px solid #D6E9C6;
      }
      p.parsley-error {
        color: #B94A48;
        background-color: #F2DEDE;
        border: 1px solid #EED3D7;
      }
    </style>

<!-- Fin Validaciones -->

</head>   
            	@if(Route::current()->getName() == 'home')

            		@if(Session::has('locacion'))
            	
						<body class="home" onload="inicio();filtro_por_pais(document.getElementById('pais').value)">
					
					@else

						<body class="home" onload="inicio()">

					@endif
                
                @elseif(Route::current()->getName() == 'publicarCarro')
                	
                	<body class="home" onload="setTimeout('formularioDinamico()',500);ImagenesGaleria();ImagenesGaleria1();buscarCiudadPorPais(13)">
                
                @elseif(Route::current()->getName() == 'publicarMotocicleta')
                	
                	<body class="home" onload="ImagenesGaleria();ImagenesGaleria1();buscarCiudadPorPais(13)">
                	
                @elseif(Route::current()->getName() == 'editarPublicacion')
                	                	
                	<body class="home" onload="ImagenesGaleriaEditar();">                      	               	
                
                @endif  

    <div class="body">

	    <div class="navbar-responsive">
		 <div class="navbar">
            <div class="container sp-cont">
            
            

            @if(Route::current()->getName() == 'home')
                <div class="search-function">
                    <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                    <span>Busca tu Vehículo</span>
                </div>         
            @endif

                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li>
                        	<a href="{{ route ('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>                        
                        </li>

                        <!--<li class="megamenu"><a href="#"><i class="fa fa-coffee" aria-hidden="true"></i> Servicios</a>
                            <ul class="dropdown">
                                <li>
                                    <div class="megamenu-container container">
                                        <div class="row">
                                            <div class="mm-col col-md-2">
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('accesorios') }}">Accesorios</a></li>
                                                    <li><a href="{{ route('repuestos') }}">Repuestos</a></li>
                                                   
                                                    <li><a href="{{ route('talleres') }}">Talleres</a></li>
                                                    <li><a href="{{ route('concesionarios') }}">Concesionarios</a></li>
                                                    <li><a href="#">Seguros</a></li>
                                                    <li><a href="#">Eventos</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Espacio Publicitario</span>
													<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
													  //Indicators
													  <ol class="carousel-indicators">
													    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
													    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
													    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
													  </ol>
													  //Wrapper for slides
													  <div class="carousel-inner" role="listbox">
													    <div class="item active">
													      <img src="" alt="...">
													       
													      <div class="carousel-caption">
													        ...
													      </div>
													      
													    </div>
													    <div class="item">
													      <img src="" alt="...">
													      
													      <div class="carousel-caption">
													        ...
													      </div>
													       
													    </div>
													    <div class="item">
													      <img src="" alt="...">
													      
													      
													      <div class="carousel-caption">
													        ...
													      </div>
													       
													      
													    </div>    
													    
													  </div>
													
													  //Controls
													  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
													    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
													    <span class="sr-only">Previous</span>
													  </a>
													  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
													    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
													    <span class="sr-only">Next</span>
													  </a>
													</div>
                                                
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Los más solicitados</span>
                                                <ul class="make-widget">
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                </ul>
                                                <a href="#" class="basic-link">ver todos</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>-->


                        <li><a href="{{ route ('quienes_somos') }}"><i class="fa fa-universal-access" aria-hidden="true"></i> Quiénes Somos</a></li>
                        <li><a href="{{ route ('soporte') }}"><i class="fa fa-life-ring"></i> Soporte</a></li>
                        <li><a href="{{ route ('contacto') }}"><i class="fa fa-envelope"></i> Contacto</a></li>
                        
                        
                    </ul>
                </nav> 
				
				<div class="site-logo">
                    <h1><a href="{{ route ('home') }}"><img src="{{ asset('autostars/images/troovami-vehicles2.png') }}" alt="Logo"></a></h1>
                   <!-- <span class="site-tagline">Comprar o vender<br>ahora es más fácil!</span>-->
                </div>
                
                <div class="header-right">
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- paises -->			
			
			<form id="ubicacionForm" class="btn-group" action="{{ route('ubicacion') }}" style="margin-top: 5px">			
			
					<div class="btn-group" role="group" aria-label="...">
										
					  <div class="" role="group">


<!-- color: #e96c4c" -->
					    <button type="button" class="site-footer" style="border: 0px; color: #a40000" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">					    					   				
					    					   				
							@if(Session::has('locacion'))
																			
								<?php
									
									switch (Session::get('locacion')){
										
										case "Argentina":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Argentina.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Bolivia":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Bolivia.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Chile":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Chile.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Colombia":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Colombia.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Costa Rica":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Costa_Rica.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Republica Dominicana":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_the_Dominican_Republic.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Ecuador":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Ecuador.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "El Salvador":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_El_Salvador.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;										
										case "Guatemala":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Guatemala.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Honduras":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Honduras.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Mexico":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Mexico.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Nicaragua":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Nicaragua.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Panama":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Panama.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Paraguay":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Paraguay.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Peru":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Peru.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Puerto Rico":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Puerto_Rico_(1952-1995).svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;										
										case "Rep. Dominicana":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_the_Dominican_Republic.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Uruguay":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Uruguay.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Venezuela":
											?><img src="{{ asset('autostars/images/paises-america/13.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;											
										
									}
								
								?>
														
							@else
													    		
					      		<img src="{{ asset('autostars/images/paises-america/mapa-paises-america2.png') }}" alt="..." style="width:30px; height: 25px" title="Latino América" >

							@endif					    					   				

					      <span class="caret"></span>

					    </button>					    
					        					   
						    <ul class="dropdown-menu">
				      
						      @foreach ($paisesLista as $lista)	
						      					      			      
							      <li onclick="document.getElementById('locacion').value = '{{ $lista->str_paises}}';document.getElementById('id_locacion').value = '{{ $lista->id}}';document.getElementById('ubicacionForm').submit() ">								      	
							      	<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="" style="font-size: 12px">
							      		<img src="autostars/images/paises-america/<?=$lista->id?>.png" alt="..." style="width:30px; height: 25px"> {{ $lista->str_paises }}
							      	</a>
							      </li>
							      
						      @endforeach
						      	
						      	<li onclick="document.getElementById('locacion').value = 'todos';document.getElementById('ubicacionForm').submit() ">			
						      	
							      	<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="" style="font-size: 12px">
							      		<img src="{{ asset('autostars/images/paises-america/mapa-paises-america2.png') }}" alt="..." style="width:30px; height: 25px" title="Latino América"> Latino América
							      	</a>						      	
						      		
						      	</li>	
						      								      								                
						    </ul>
					    
					  </div>
					    
					</div>					
					
					<input type="hidden" readonly="readonly" id="locacion" name="locacion" value="">
					<input type="hidden" readonly="readonly" id="id_locacion" name="id_locacion" value="">
					
			</form>
			      
			<!-- paises -->                    

				</div>


                <div class="header-right">

                @if (Auth::guest())

                    <div class="user-login-panel" style="color:#FFF;">
                    
                        <a href="#" class="user-login-btn" data-toggle="modal" data-target="#loginModal">
                            <i class="fa fa-user" style="color:#FFF;"></i>
                        </a>

                    </div>

                @endif

                @if (Auth::user())
                    <div class="user-login-panel logged-in-user">
                        <a href="#" class="user-login-btn" id="userdropdown" data-toggle="dropdown">

                            @if (Auth::user()->blb_img != "")
                            	<img src="data:image/jpeg;base64,{{ Auth::user()->blb_img }}" alt="">
							@else
						
								  @if (Auth::user()->lng_idgenero == 1)
								  	<img src="{{ asset('autostars/images/user_masculino.png') }}" alt="">								  	
								  @elseif (Auth::user()->lng_idgenero == 2)
								  	<img src="{{ asset('autostars/images/usuario_femenino.png') }}" alt="">
								  @endif								

                       		@endif

                            <span class="user-informa">
                                <span class="meta-data" style="color:#FFF;">Bienvenido</span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </span>
                            <span class="user-dd-dropper"><i class="fa fa-angle-down"></i></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="userdropdown">
                            <li><a href="{{route('cuenta')}}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                            <li><a href="{{route('publicar')}}"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Publicar</a></li>
                            <!-- <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Sugerencias</a></li>-->                            
                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Salir</a></li>
                        </ul>
                    </div>
                @endif

				@if (Auth::guest())

                    <div class="topnav dd-menu">
                        <ul class="top-navigation sf-menu">
                            
                            <li>
                                <a class="user-login-btn" href="{{route('register')}}" style="color:#FFF;"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                            </li>

                        </ul>

                    </div>
                    
 				@endif
                    
                    
                </div>
				
                 <div class="container">
                    @if (Session::has('errors'))

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <ul>
                                    <!-- <strong>Oops! Something went wrong : </strong> -->
                                    <strong>Por favor complete los siguientes campos: </strong>
                                    @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                        </div>

                    @endif
                </div> 

                <!-- Search Form -->
                <div class="search-form">
                    <div class="search-form-inner">
                        <form id="formularioBusqueda" name="formularioBusqueda">
                            <h3>Busca tu Vehículo</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                    
                                        <div class="col-md-6">
                                        {!! Form::label('tipo', 'Tipos de Vehículos') !!}

                                            <select id='tipo' name='tipo' class='form-control' onchange='filtro_por_tipo(this.value)' style="cursor:pointer">            
                                                <option value='0'>Seleccione</option>
                                                    @foreach ($tipos as $tipo)
                                                    
                                                       <option value='{{ $tipo->id }}'>{{ $tipo->str_descripcion }}</option>
                                                                                            
                                                    @endforeach                                                 
                                                                                                                                    
                                            </select>

                                        </div>
                                                                            
                                        <div class="col-md-6">

	                                        {!! Form::label('pais', 'Paises') !!}
	            								<!--           	            								          	
							    					<select id='pais' name='pais' class='form-control' onchange='filtro_por_pais(this.value)' style="cursor:pointer">            
								                        <option value='0'>Venezuela</option>                      																													               					
													</select>
												-->
											<div id="dependientePaisesBuscador" class="">

												@if(Session::has('locacion'))
																				
						    						<select id='pais' name='pais' class='form-control' onchange='' style="cursor:pointer">
						    						          
								                        <option value='{{Session::get("id_locacion")}}'>{{Session::get('locacion')}}</option>
										               						
													</select>
													
												@else
												
							    					<select id='pais' name='pais' class='form-control' onchange='filtro_por_pais(this.value)' style="cursor:pointer">            
								                        <option value='0'>Seleccione</option>
															
															@foreach ($paisesBuscador as $pais)
															
															   <option value='{{ $pais->id }}'>{{ $pais->str_paises }}</option>
															    								    
															@endforeach	                        						
																										               						
													</select>
																								
												@endif

											</div>											
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                    	{!! Form::label('ciudad', 'Ciudades') !!}
                                    										
											<div id="divBuscadorCiudades">
											
						    					<select id='ciudad' name='ciudad' class='form-control ' onchange='filtro_por_ciudad(this.value)' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($ciudades as $ciudad)
													
													   <option value='{{ $ciudad->id }}'>{{ $ciudad->str_ciudad }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
											</div>
											
                                        </div>
                                        <div class="col-md-6">
                                        {!! Form::label('marca', 'Marcas') !!}
                                        
	                                        <div id="dependienteMarcasBuscador" class="">
						    					<select id='marca' name='marca' class='form-control' onchange="filtro_por_marca(this.value)" style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
														@foreach ($marcas as $marca)
														
														   <option value='{{ $marca->id }}'>{{ $marca->str_marca }}</option>
														    								    
														@endforeach	                        						
																									               						
												</select>
	                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        {!! Form::label('modelo', 'Modelos') !!}

						                    <div id="dependienteModelosBuscador">

												<select id='modelo' name='modelo' class='form-control ' onchange='filtro_por_modelo(this.value)' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($modelosTotal as $modelo)
													
													   <option value='{{ $modelo->lng_idmodelo }}'>{{ $modelo->str_modelo }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>

						                    </div>
                                                            
                                        </div>
                                        <div class="col-md-6">
                                        {!! Form::label('color', 'Colores') !!}
                                        
                                        	<div id="dependienteColoresBuscador">
                                        	
												<select id='color' name='color' class='form-control ' onchange='' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($colors as $color)
													
													   <option value='{{ $color->lng_idcolor }}'>{{ $color->str_descripcion }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
												
											</div>
											                 
                                        </div>
                                    </div>
                          
                                </div>
                                <div class="col-md-6 col-sm-6">
                                
                                
                                    <div class="row">
                                        <div class="col-md-6">
       
					                    {!! Form::label('min_ano', 'Año Desde') !!}
					                    
											<div id="dependienteAnosBuscadorMin">
															    						
					    						<select id='min_ano' name='min_ano' class='form-control' onchange='' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($anospublicados as $ano)
													
													   <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano}}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
												
											</div>	
																								                                               
                                        </div>
                                        <div class="col-md-6">
                                        
					                    {!! Form::label('max_ano', 'Año Hasta') !!}


											<div id="dependienteAnosBuscadorMax">
					    					<select id='max_ano' name='max_ano' class='form-control' onchange='' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($anospublicados as $ano)
													
													   <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
												</div>
											
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <label>Precio Mínimo  </label> 
										   
										    <div class="input-group">
										      <div id="monedaMinimo" name="monedaMinimo" class="input-group-addon"> {!! Form::input('hidden', 'str_moneda', '', ['id' => 'str_moneda']) !!}  <div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div></div>
										     {!! Form::input('text', 'min_precio', '', ['id' => 'min_precio', 'class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => '']) !!}
										    </div>

                                        </div>
                                        <div class="col-md-6"> 
                                            <label>Precio Máximo </label> 
                                                                                         										
										    <div class="input-group">
										      <div id="monedaMaximo" name="monedaMaximo" class="input-group-addon"><div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div></div>
										     {!! Form::input('text', 'max_precio', '', ['id' => 'max_precio', 'class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => '']) !!}
										    </div>											
											
                                        </div>
                                    </div>

									@if (Auth::user())

	                                    <div class="row">
	                                        <div class="col-md-4">
	                                        	<br>
	                                            <input type="button" class="btn btn-block btn-primary btn-lg" value="Buscar" onclick="buscador()">      
	                                        </div>
	                                                                                
	                                        <div class="col-md-4">
	                                        	<br>
	                                            <input type="reset" class="btn btn-block btn-primary btn-lg" value="Limpiar" onclick="limpiar()">     
	                                        </div>                                        
	                                        
	                                     	<div class="col-md-4">
	                                        	<br>                                                                                        
	                                             
	                                            	<a href="#" class="btn btn-block btn-primary btn-lg"><i class="fa fa-folder-o"></i> Guardar</a>
	                                        
	                                        </div>                                        
	                                    </div>
                                    
           							@endif                         
                                    
									@if (Auth::guest())

	                                    <div class="row">
	                                        <div class="col-md-6">
	                                        	<br>
	                                            <input type="button" class="btn btn-block btn-primary btn-lg" value="Buscar" onclick="buscador()">      
	                                        </div>
	                                                                                
	                                        <div class="col-md-6">
	                                        	<br>
	                                            <input type="reset" class="btn btn-block btn-primary btn-lg" value="Limpiar" onclick="limpiar()">     
	                                        </div>                                        
                                       
	                                    </div>
                                    
           							@endif 
                                    

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<div class="site-header-wrapper disable">
        <header class="site-header" style="background-color: #2F2E2E;">
            <div class="container sp-cont" >
                <div class="site-logo">
                    <h1><a href="{{ route ('home') }}"><img src="{{ asset('autostars/images/trovami-logo-beta.png') }}" alt="Logo"></a></h1>
                   <!-- <span class="site-tagline">Comprar o vender<br>ahora es más fácil!</span>-->
                </div>

				<div class="header-right">
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- paises -->			
			
			<form id="ubicacionForm" class="btn-group" action="{{ route('ubicacion') }}" style="margin-top: 5px">			
			
					<div class="btn-group" role="group" aria-label="...">
										
					  <div class="" role="group">


<!-- color: #e96c4c" -->
					    <button type="button" class="site-footer" style="border: 0px; color: #a40000" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">					    					   				
					    					   				
							@if(Session::has('locacion'))
																			
								<?php
									
									switch (Session::get('locacion')){
										
										case "Argentina":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Argentina.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Bolivia":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Bolivia.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Chile":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Chile.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Colombia":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Colombia.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Costa Rica":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Costa_Rica.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Republica Dominicana":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_the_Dominican_Republic.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Ecuador":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Ecuador.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "El Salvador":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_El_Salvador.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;										
										case "Guatemala":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Guatemala.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Honduras":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Honduras.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Mexico":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Mexico.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Nicaragua":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Nicaragua.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Panama":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Panama.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Paraguay":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Paraguay.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Peru":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_Peru.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Puerto Rico":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Puerto_Rico_(1952-1995).svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;										
										case "Rep. Dominicana":
											?><img src="{{ asset('autostars/images/paises-america/Flag_of_the_Dominican_Republic.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Uruguay":
											?><img src="{{ asset('autostars/images/paises-america/800px-Flag_of_Uruguay.svg.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;
										
										case "Venezuela":
											?><img src="{{ asset('autostars/images/paises-america/13.png') }}" alt="..." style="width:30px; height: 25px" title="{{Session::get('locacion')}}" ><?php
										break;											
										
									}
								
								?>
														
							@else
											
								<img src="{{ asset('autostars/images/paises-america/13.png') }}" alt="..." style="width:30px; height: 25px" title="Venezuela" >			
													    		
					      		<!-- 
					      			<img src="{{ asset('autostars/images/paises-america/mapa-paises-america2.png') }}" alt="..." style="width:30px; height: 25px" title="Latino América" >
 								-->
 								
							@endif					    					   				

							<!-- 
					      		<span class="caret"></span>
 							-->
					    </button>					    
					        	
					        	
					        	<!-- 				   
						    <ul class="dropdown-menu">
				      
						      @foreach ($paisesLista as $lista)	
						      					      			      
							      <li onclick="document.getElementById('locacion').value = '{{ $lista->str_paises}}';document.getElementById('id_locacion').value = '{{ $lista->id}}';document.getElementById('ubicacionForm').submit() ">								      	
							      	<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="" style="font-size: 12px">
							      		<img src="autostars/images/paises-america/<?=$lista->id?>.png" alt="..." style="width:30px; height: 25px"> {{ $lista->str_paises }}
							      	</a>
							      </li>
							      
						      @endforeach
						      	
						      	
						      	<!-- 
						      	
						      	<li onclick="document.getElementById('locacion').value = 'todos';document.getElementById('ubicacionForm').submit() ">			
						      	
							      	<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="" style="font-size: 12px">
							      		<img src="{{ asset('autostars/images/paises-america/mapa-paises-america2.png') }}" alt="..." style="width:30px; height: 25px" title="Latino América"> Latino América
							      	</a>						      	
						      		
						      	</li>	
						      	
						      	 -- >
						      	
						      								      								                
						    </ul>
						    
						     -->
					    
					  </div>
					    
					</div>					
					
					<input type="hidden" readonly="readonly" id="locacion" name="locacion" value="">
					<input type="hidden" readonly="readonly" id="id_locacion" name="id_locacion" value="">
					
			</form>
			      
			<!-- paises -->                    

				</div>


                <div class="header-right">

                @if (Auth::guest())

                    <div class="user-login-panel" style="color:#FFF;">
                    
                        <a href="#" class="user-login-btn" data-toggle="modal" data-target="#loginModal">
                            <i class="fa fa-user" style="color:#FFF;"></i>
                        </a>

                    </div>

                @endif

                @if (Auth::user())
                    <div class="user-login-panel logged-in-user">
                        <a href="#" class="user-login-btn" id="userdropdown" data-toggle="dropdown">

                            @if (Auth::user()->blb_img != "")
                            	<img src="data:image/jpeg;base64,{{ Auth::user()->blb_img }}" alt="">
							@else
						
								  @if (Auth::user()->lng_idgenero == 1)
								  	<img src="{{ asset('autostars/images/user_masculino.png') }}" alt="">								  	
								  @elseif (Auth::user()->lng_idgenero == 2)
								  	<img src="{{ asset('autostars/images/usuario_femenino.png') }}" alt="">
								  @endif								

                       		@endif

                            <span class="user-informa">
                                <span class="meta-data" style="color:#FFF;">Bienvenido</span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </span>
                            <span class="user-dd-dropper"><i class="fa fa-angle-down"></i></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="userdropdown">
                            <li><a href="{{route('cuenta')}}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                            <li><a href="{{route('publicar')}}"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Publicar</a></li>
                            <!-- <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Sugerencias</a></li>-->                            
                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Salir</a></li>
                        </ul>
                    </div>
                @endif

				@if (Auth::guest())

                    <div class="topnav dd-menu">
                        <ul class="top-navigation sf-menu">
                            
                            <li>
                                <a href="{{route('register')}}" style="color:#FFF;">Registrate</a>
                            </li>

                        </ul>

                    </div>
                    
 				@endif
                    
                    
                </div>

            </div>

        </header>

        <!-- End Site Header -->
        <div class="navbar">
            <div class="container sp-cont">

            @if(Route::current()->getName() == 'home')
                <div class="search-function">
                    <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                    <span>Busca tu Vehículo</span>
                </div>         
            @endif

                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li>
                        	<a href="{{ route ('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>                        
                        </li>


<!-- 
                        <li class="megamenu"><a href="#"><i class="fa fa-coffee" aria-hidden="true"></i> Servicios</a>
                            <ul class="dropdown">
                                <li>
                                    <div class="megamenu-container container">
                                        <div class="row">
                                            <div class="mm-col col-md-2">
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('accesorios') }}">Accesorios</a></li>
                                                    <li><a href="{{ route('repuestos') }}">Repuestos</a></li>
                                                   
                                                    <li><a href="{{ route('talleres') }}">Talleres</a></li>
                                                    <li><a href="{{ route('concesionarios') }}">Concesionarios</a></li>
                                                    <li><a href="#">Seguros</a></li>
                                                    <li><a href="#">Eventos</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Espacio Publicitario</span>
													<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
													  <!-- Indicators --
													  <ol class="carousel-indicators">
													    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
													    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
													    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
													  </ol>
													
													  <!-- Wrapper for slides --
													  <div class="carousel-inner" role="listbox">
													    <div class="item active">
													      <img src="" alt="...">
													      <!-- 
													      <div class="carousel-caption">
													        ...
													      </div>
													       --
													    </div>
													    <div class="item">
													      <img src="" alt="...">
													      <!-- 
													      <div class="carousel-caption">
													        ...
													      </div>
													       --
													    </div>
													    <div class="item">
													      <img src="" alt="...">
													      
													      <!-- 
													      <div class="carousel-caption">
													        ...
													      </div>
													       --
													      
													    </div>    
													    <!-- ...  --
													  </div>
													
													  <!-- Controls --
													  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
													    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
													    <span class="sr-only">Previous</span>
													  </a>
													  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
													    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
													    <span class="sr-only">Next</span>
													  </a>
													</div>
                                                
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Los más solicitados</span>
                                                <ul class="make-widget">
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="" alt=""></a></li>
                                                </ul>
                                                <a href="#" class="basic-link">ver todos</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

			-->


                        <li><a href="{{ route ('quienes_somos') }}"><i class="fa fa-universal-access" aria-hidden="true"></i> Quiénes Somos</a></li>
                        <li><a href="{{ route ('soporte') }}"><i class="fa fa-life-ring"></i> Soporte</a></li>
                        <li><a href="{{ route ('contacto') }}"><i class="fa fa-envelope"></i> Contacto</a></li>
                        
                        
                    </ul>
                </nav> 

                 <div class="container">
                    @if (Session::has('errors'))

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <ul>
                                    <!-- <strong>Oops! Something went wrong : </strong> -->
                                    <strong>Por favor complete los siguientes campos: </strong>
                                    @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                        </div>

                    @endif
                </div> 

                <!-- Search Form -->
                <div class="search-form">
                    <div class="search-form-inner">
                        <form id="formularioBusqueda" name="formularioBusqueda">
                            <h3>Busca tu Vehículo</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                    
                                        <div class="col-md-6">
                                        {!! Form::label('tipo', 'Tipos de Vehículos') !!}

                                            <select id='tipo' name='tipo' class='form-control' onchange='filtro_por_tipo(this.value)' style="cursor:pointer">            
                                                <option value='0'>Seleccione</option>
                                                    @foreach ($tipos as $tipo)
                                                    
                                                       <option value='{{ $tipo->id }}'>{{ $tipo->str_descripcion }}</option>
                                                                                            
                                                    @endforeach                                                 
                                                                                                                                    
                                            </select>

                                        </div>
                                                                            
                                        <div class="col-md-6">

	                                        {!! Form::label('pais', 'Paises') !!}
	            								<!--           	            								          	
							    					<select id='pais' name='pais' class='form-control' onchange='filtro_por_pais(this.value)' style="cursor:pointer">            
								                        <option value='0'>Venezuela</option>                      																													               					
													</select>
												-->
											<div id="dependientePaisesBuscador" class="">

												@if(Session::has('locacion'))
																				
						    						<select id='pais' name='pais' class='form-control' onchange='' style="cursor:pointer">
						    						          
								                        <option value='{{Session::get("id_locacion")}}'>{{Session::get('locacion')}}</option>
										               						
													</select>
													
												@else
												
							    					<select id='pais' name='pais' class='form-control' onchange='filtro_por_pais(this.value)' style="cursor:pointer">            
								                        <option value='0'>Seleccione</option>
															
															@foreach ($paisesBuscador as $pais)
															
															   <option value='{{ $pais->id }}'>{{ $pais->str_paises }}</option>
															    								    
															@endforeach	                        						
																										               						
													</select>
																								
												@endif

											</div>											
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                    	{!! Form::label('ciudad', 'Ciudades') !!}
                                    										
											<div id="divBuscadorCiudades">
											
						    					<select id='ciudad' name='ciudad' class='form-control ' onchange='filtro_por_ciudad(this.value)' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($ciudades as $ciudad)
													
													   <option value='{{ $ciudad->id }}'>{{ $ciudad->str_ciudad }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
											</div>
											
                                        </div>
                                        <div class="col-md-6">
                                        {!! Form::label('marca', 'Marcas') !!}
                                        
	                                        <div id="dependienteMarcasBuscador" class="">
						    					<select id='marca' name='marca' class='form-control' onchange="filtro_por_marca(this.value)" style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
														@foreach ($marcas as $marca)
														
														   <option value='{{ $marca->id }}'>{{ $marca->str_marca }}</option>
														    								    
														@endforeach	                        						
																									               						
												</select>
	                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        {!! Form::label('modelo', 'Modelos') !!}

						                    <div id="dependienteModelosBuscador">

												<select id='modelo' name='modelo' class='form-control ' onchange='filtro_por_modelo(this.value)' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($modelosTotal as $modelo)
													
													   <option value='{{ $modelo->lng_idmodelo }}'>{{ $modelo->str_modelo }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>

						                    </div>
                                                            
                                        </div>
                                        <div class="col-md-6">
                                        {!! Form::label('color', 'Colores') !!}
                                        
                                        	<div id="dependienteColoresBuscador">
                                        	
												<select id='color' name='color' class='form-control ' onchange='' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($colors as $color)
													
													   <option value='{{ $color->lng_idcolor }}'>{{ $color->str_descripcion }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
												
											</div>
											                 
                                        </div>
                                    </div>
                          
                                </div>
                                <div class="col-md-6 col-sm-6">
                                
                                
                                    <div class="row">
                                        <div class="col-md-6">
       
					                    {!! Form::label('min_ano', 'Año Desde') !!}
					                    
											<div id="dependienteAnosBuscadorMin">
															    						
					    						<select id='min_ano' name='min_ano' class='form-control' onchange='' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($anospublicados as $ano)
													
													   <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano}}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
												
											</div>	
																								                                               
                                        </div>
                                        <div class="col-md-6">
                                        
					                    {!! Form::label('max_ano', 'Año Hasta') !!}


											<div id="dependienteAnosBuscadorMax">
					    					<select id='max_ano' name='max_ano' class='form-control' onchange='' style="cursor:pointer">            
							                        <option value='0'>Seleccione</option>
													@foreach ($anospublicados as $ano)
													
													   <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano }}</option>
													    								    
													@endforeach	                        						
																									               						
												</select>
												</div>
											
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <label>Precio Mínimo  </label> 
										   
										    <div class="input-group">
										      <div id="monedaMinimo" name="monedaMinimo" class="input-group-addon"> {!! Form::input('hidden', 'str_moneda', '', ['id' => 'str_moneda']) !!}  <div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div></div>
										     {!! Form::input('text', 'min_precio', '', ['id' => 'min_precio', 'class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => '']) !!}
										    </div>

                                        </div>
                                        <div class="col-md-6"> 
                                            <label>Precio Máximo </label> 
                                                                                         										
										    <div class="input-group">
										      <div id="monedaMaximo" name="monedaMaximo" class="input-group-addon"><div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div></div>
										     {!! Form::input('text', 'max_precio', '', ['id' => 'max_precio', 'class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => '']) !!}
										    </div>											
											
                                        </div>
                                    </div>

									@if (Auth::user())

										<!-- 
	                                    <div class="row">
	                                        <div class="col-md-4">
	                                        	<br>
	                                            <input type="button" class="btn btn-block btn-primary btn-lg" value="Buscar" onclick="buscador()">      
	                                        </div>
	                                                                                
	                                        <div class="col-md-4">
	                                        	<br>
	                                            <input type="reset" class="btn btn-block btn-primary btn-lg" value="Limpiar" onclick="limpiar()">     
	                                        </div>                                        
	                                        
	                                     	<div class="col-md-4">
	                                        	<br>                                                                                        
	                                             
	                                            	<a href="#" class="btn btn-block btn-primary btn-lg"><i class="fa fa-folder-o"></i> Guardar</a>
	                                        
	                                        </div>                                        
	                                    </div>	                                    
	                                    -->
                                    
                                    
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                        	<br>
	                                            <input type="button" class="btn btn-block btn-primary btn-lg" value="Buscar" onclick="buscador()">      
	                                        </div>
	                                                                                
	                                        <div class="col-md-6">
	                                        	<br>
	                                            <input type="reset" class="btn btn-block btn-primary btn-lg" value="Limpiar" onclick="limpiar()">     
	                                        </div>                                        
                                       
	                                    </div>                                    	
                                    
                                    
                                    
           							@endif                         
                                    
									@if (Auth::guest())

	                                    <div class="row">
	                                        <div class="col-md-6">
	                                        	<br>
	                                            <input type="button" class="btn btn-block btn-primary btn-lg" value="Buscar" onclick="buscador()">      
	                                        </div>
	                                                                                
	                                        <div class="col-md-6">
	                                        	<br>
	                                            <input type="reset" class="btn btn-block btn-primary btn-lg" value="Limpiar" onclick="limpiar()">     
	                                        </div>                                        
                                       
	                                    </div>
                                    
           							@endif 
                                    

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   	</div>

 <!-- Utiity Bar -->
    <div class="utility-bar" style="background-color: #FFF;">
    	<div class="container" >
        	<div class="row">
            	<div class="col-md-4 col-sm-6 col-xs-4">
            	
            	@if(Route::current()->getName() == 'home')
                	<div class="toggle-make">
                		<a href="#" title="Indicadores del día">
                			<!-- <i class="fa fa-navicon"></i>-->
                			<i class="fa fa-bar-chart" aria-hidden="true"></i>	
                		</a>
                    </div>
                 @endif   
                    
                    <span>
                        <ol class="breadcrumb">
                            @if(Route::current()->getName() == 'home')
                                
                                <li class="active"> <i class="fa fa-home"></i> Inicio</li>
                                
                            @elseif(Route::current()->getName() == 'publicar')
                            
                                <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                                <li class="active"> <i class="fa fa-newspaper-o"></i> Publicar</li>

                            @elseif(Route::current()->getName() == 'publicarCarro')
                                
                                <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                                <li><a href="{!! route('publicar') !!}"> <i class="fa fa-newspaper-o"></i> Publicar</a></li>
                                <li class="active"> <i class="fa fa-car"></i> Carros</li>
                                
                            @elseif(Route::current()->getName() == 'publicarMotocicleta')
                                
                                <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                                <li><a href="{!! route('publicar') !!}"> <i class="fa fa-newspaper-o"></i> Publicar</a></li>
                                <li class="active"> <i class="fa fa-motorcycle"></i> Motocicletas</li>                                
                           
                            @elseif(Route::current()->getName() == 'register')
                            
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-user-plus"></i> Crear-Cuenta</li>
                           
                            @elseif(Route::current()->getName() == 'detalles')
                            
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-outdent"></i> Vehiculo/@if(isset($vehiculo->id)){!! $vehiculo->id !!} @else No existe @endif</li>
                            
                            @elseif(Route::current()->getName() == 'error')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-chain-broken"></i> No existe</li>

                            @elseif(Route::current()->getName() == 'denegado')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-ban"></i> Acceso-Restringido</li>

                            @elseif(Route::current()->getName() == 'recuperar')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-key"></i> Recuperar-Clave</li>                              
                              
                            @elseif(Route::current()->getName() == 'quienes_somos')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              
                              <li class="active"> <i class="fa fa-universal-access" aria-hidden="true"></i> Quiénes Somos</li>
                              
                            @elseif(Route::current()->getName() == 'contacto')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              
                              <li class="active"> <i class="fa fa-envelope"></i> Contacto</li>                              
                              
                            @elseif(Route::current()->getName() == 'soporte')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li class="active"> <i class="fa fa-life-ring"></i> Soporte</li>                              
                              
                            @elseif(Route::current()->getName() == 'accesorios')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-tags"></i>Accesorios</li>
                              
                            @elseif(Route::current()->getName() == 'repuestos')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-cogs" aria-hidden="true"></i> Repuestos</li>
                              
                            @elseif(Route::current()->getName() == 'servicios')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-check-square-o"></i> Servicios</li>
                              
                            @elseif(Route::current()->getName() == 'talleres')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                              <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-wrench"></i> Talleres</li>
                              
                            @elseif(Route::current()->getName() == 'concesionarios')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="#"> <i class="fa fa-coffee"></i> Servicios</a></li>
                              <li class="active"> <i class="fa fa-building"></i> Concesionarios</li>                                                                                                                                                          

                            @elseif(Route::current()->getName() == 'cuenta')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="#"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                       		  
                            @elseif(Route::current()->getName() == 'editar')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              <li class="active"> <i class="fa fa-user"></i> Perfil</li>
                              
                            @elseif(Route::current()->getName() == 'editar2')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              <li class="active"> <i class="fa fa-file-image-o" aria-hidden="true"></i> Imágen</li>
                              
                            @elseif(Route::current()->getName() == 'editar3')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              <li class="active"> <i class="fa fa-key" aria-hidden="true"></i> Clave</li>                                  
                              
                            @elseif(Route::current()->getName() == 'editarPublicacion')
                           
                              <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                       		  <li><a href="{!! route('cuenta') !!}"> <i class="fa fa-cog"></i> Mi Cuenta</a></li>
                              
                              <li class="active"> <i class="fa fa-pencil-square-o"></i> Modificar/@if(isset($vehiculo->id)){!! $vehiculo->id !!} @else No existe @endif</li>
                                                              
                            @endif
                            
                        </ol>
                    </span>
                </div>

          	</div>
      	</div>
    	<div class="by-type-options">
    		<div class="container" >
               	<div class="row">
                  	<ul class="owl-carousel carousel-alt" data-columns="6" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="3" data-items-tablet="4">
                    	                    
					@foreach ($marcasPublicadosHoy as $hoy)	
                    	                    
                            <li class="item" style="margin-top: -4px">       

							
                            <?php 
								                            	
								switch ($hoy->str_marca) {

									case "Alfa Romeo": ?> <img src="{{ asset('autostars/images/marcas/alfa-romeo.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Audi": ?> <img src="{{ asset('autostars/images/marcas/audi.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Adly": ?> <img src="{{ asset('autostars/images/marcas/adly-moto.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "BMW": ?> <img src="{{ asset('autostars/images/marcas/bmw.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Asia Motors": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Buick": ?> <img src="{{ asset('autostars/images/marcas/buick.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Bugatti": ?> <img src="{{ asset('autostars/images/marcas/bugatti.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Brilliance": ?> <img src="{{ asset('autostars/images/marcas/brilliance.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cadillac": ?> <img src="{{ asset('autostars/images/marcas/cadillac.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chana": ?> <img src="{{ asset('autostars/images/marcas/chana.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Changhe": ?> <img src="{{ asset('autostars/images/marcas/changhe.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chery": ?> <img src="{{ asset('autostars/images/marcas/chery.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chevrolet": ?> <img src="{{ asset('autostars/images/marcas/chevrolet.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Citroën": ?> <img src="{{ asset('autostars/images/marcas/citroen.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Daelim": ?> <img src="{{ asset('autostars/images/marcas/daelim.jpg') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Daewoo": ?> <img src="{{ asset('autostars/images/marcas/daewoo.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Delorean": ?> <img src="{{ asset('autostars/images/marcas/dmc.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Dodge": ?> <img src="{{ asset('autostars/images/marcas/dodge.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ferrari": ?> <img src="{{ asset('autostars/images/marcas/ferrari.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Fiat": ?> <img src="{{ asset('autostars/images/marcas/fiat.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ford": ?> <img src="{{ asset('autostars/images/marcas/ford.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Geely": ?> <img src="{{ asset('autostars/images/marcas/geely.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Great wall": ?> <img src="{{ asset('autostars/images/marcas/great-wall.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hafei": ?> <img src="{{ asset('autostars/images/marcas/hafei.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Haima": ?> <img src="{{ asset('autostars/images/marcas/haima.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Harley davidson": ?> <img src="{{ asset('autostars/images/marcas/harley.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Honda": ?> <img src="{{ asset('autostars/images/marcas/honda.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hummer": ?> <img src="{{ asset('autostars/images/marcas/hummer.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hyundai": ?> <img src="{{ asset('autostars/images/marcas/hyundai.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Infiniti": ?> <img src="{{ asset('autostars/images/marcas/infiniti.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Isuzu": ?> <img src="{{ asset('autostars/images/marcas/izusu.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jaguar": ?> <img src="{{ asset('autostars/images/marcas/jaguar.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jeep": ?> <img src="{{ asset('autostars/images/marcas/jeep.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Keeway": ?> <img src="{{ asset('autostars/images/marcas/keeway.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Kia": ?> <img src="{{ asset('autostars/images/marcas/kia.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lada": ?> <img src="{{ asset('autostars/images/marcas/lada.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Land Rover": ?> <img src="{{ asset('autostars/images/marcas/land-rover.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lexus": ?> <img src="{{ asset('autostars/images/marcas/lexus.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lifan": ?> <img src="{{ asset('autostars/images/marcas/lifan.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Lotus": ?> <img src="{{ asset('autostars/images/marcas/lotus.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;									
									case "Maserati": ?> <img src="{{ asset('autostars/images/marcas/maserati.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mazda": ?> <img src="{{ asset('autostars/images/marcas/mazda.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mercedes Benz": ?> <img src="{{ asset('autostars/images/marcas/mercedes-benz.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mercury": ?> <img src="{{ asset('autostars/images/marcas/mercury.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mini": ?> <img src="{{ asset('autostars/images/marcas/mini.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mitsubishi": ?> <img src="{{ asset('autostars/images/marcas/mitsubichi.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Nissan": ?> <img src="{{ asset('autostars/images/marcas/nissan.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Peugeot": ?> <img src="{{ asset('autostars/images/marcas/peugeot.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Pontiac": ?> <img src="{{ asset('autostars/images/marcas/pontiac.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Porsche": ?> <img src="{{ asset('autostars/images/marcas/porsche.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Renault": ?> <img src="{{ asset('autostars/images/marcas/renault.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Seat": ?> <img src="{{ asset('autostars/images/marcas/seat.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Skoda": ?> <img src="{{ asset('autostars/images/marcas/skoda.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Smart": ?> <img src="{{ asset('autostars/images/marcas/smart.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Subaru": ?> <img src="{{ asset('autostars/images/marcas/subaru.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Suzuki": ?> <img src="{{ asset('autostars/images/marcas/suzuki.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tata": ?> <img src="{{ asset('autostars/images/marcas/tata.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Toyota": ?> <img src="{{ asset('autostars/images/marcas/toyota.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Volkswagen": ?> <img src="{{ asset('autostars/images/marcas/volkswagen.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Zotye": ?> <img src="{{ asset('autostars/images/marcas/zotye.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Samsung": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Brilliance": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Byd": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Changan": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Chrysler": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Daihatsu": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Delorean": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Dodge ram": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Effa": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Engesa": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Gmc": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jac": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Jinbei": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mahindra": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mg": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Miura": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Opel": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Rely": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Rover": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Saipa": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Shineray": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Shanghai maple (sma)": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ssangyong": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Troller": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Volvo": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Acura": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "BMW": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Geely": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Honda": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mini": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Peugeot": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Smart": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Abat": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Adiva": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Adly": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Aeon": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ajp": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Aiyumo": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Alpina ": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Aprilia": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ava": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Azel": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Benelli": ?> <img src="{{ asset('autostars/images/marcas/benelli.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bera": ?> <img src="{{ asset('autostars/images/marcas/bera.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Beta": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Big bear choppers": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bimota": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Brammo": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Buell ": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bultaco": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Bye bike": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cagiva": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Can-am": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cfmoto": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Clipic": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cpi": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Cr&s": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Csr": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Daelim": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Derbi": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ducati": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Empire": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "E-max": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Fantic": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Garelli": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Gas gas": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Generic": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Gilera": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Goccia": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Goes": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Govecs": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hanway": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Harley davidson": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Headbanger": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hm": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Husaberg": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Husqvarna": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Hyosung": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Indian": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Innocenti": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kawasaki": ?> <img src="{{ asset('autostars/images/marcas/kawasaki.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Keeway": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kenrod": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ksr moto": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ktm": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kymco": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Kyoto": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lambretta": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lemev": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Leonhart": ?> <img src="{{ asset('autostars/images/marcas/leonhart.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Linhai": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lml": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Lotus": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Macbor": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Malaguti": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mash": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Metrakit": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Montesa": ?> <img src="{{ asset('autostars/images/marcas/montesa.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Motivas": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Moto guzzi": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Moto morini": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Motor hispania": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mtr": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mv agusta": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Mx motor": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Nimoto": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Norton": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Oset": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ossa": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Oxygen": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Pgo": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Piaggio": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Quadro": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Quantya": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Rieju": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Royal enfield": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Scorpa": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Scutum": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Sherco": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Skygo": ?> <img src="{{ asset('autostars/images/marcas/skygo.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Suzuki": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Sym": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tacita": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tgb": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Tm racing": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Triumph": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Um ": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Unico": ?> <img src="{{ asset('autostars/images/marcas/unico.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Ural": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Vectrix": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Vespa": ?> <img src="{{ asset('autostars/images/marcas/vespa.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Victory": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Volta": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Voxan": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Vyrus": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Xero": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Yamaha": ?> <img src="{{ asset('autostars/images/marcas/yamaha.png') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
									case "Zero": ?> <img src="{{ asset('autostars/images/marcas/') }}" style="height: 55px;" alt="" title="{{ $hoy->str_marca}}" style="cursor: pointer"><?php ; break;
										

								}
                            
                            ?>
                            
                      
                              
                              
                              
                              <br>
                              <div style="margin-top: -7px; font-size: 10px">
                              	
                              	<b style="color: #a40000">Hoy:</b>  <strong>{{ $hoy->total}} publicados</strong>
                              </div>
                                                                       
                            </li>                     	                    	
                    	
                    	@endforeach
                    	
                  	</ul>
               	</div>
            </div>
        </div>
    </div>

        @include('login')
        @yield('content')
        @include('pie')
        
        <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    </div>



    {!! Html::script('autostars/js/jquery-2.0.0.min.js') !!}  <!-- Jquery Library Call -->
    {!! Html::script('autostars/vendor/prettyphoto/js/prettyphoto.js') !!}  <!-- PrettyPhoto Plugin -->
    {!! Html::script('autostars/js/ui-plugins.js') !!}  <!-- UI Plugins -->
    {!! Html::script('autostars/js/helper-plugins.js') !!}  <!-- Helper Plugins -->
    {!! Html::script('autostars/vendor/owl-carousel/js/owl.carousel.min.js') !!}  <!-- Owl Carousel -->
    {!! Html::script('autostars/vendor/password-checker.js') !!}  <!-- Password Checker -->
    {!! Html::script('autostars/js/bootstrap.js') !!}  <!-- UI -->
    <!-- {!! Html::script('autostars/js/init.js') !!}   All Scripts -->
    {!! Html::script('autostars/vendor/flexslider/js/jquery.flexslider.js') !!}  <!-- FlexSlider -->
    <!-- {!! Html::script('http://maps.googleapis.com/maps/api/js?sensor=false') !!}--> 
    {!! Html::script('autostars/style-switcher/js/jquery_cookie.js') !!} 
    {!! Html::script('autostars/style-switcher/js/script.js') !!} 
    
    <!-- Propios -->
    {!! Html::script('autostars/js/init_cars.js') !!}  <!-- All Scripts -->
    {!! Html::script('autostars/js/ajaxCars.js') !!}  <!-- Ajax -->
    {!! Html::script('autostars/js/cropbox.js') !!}
    

            <!-- Validaciones-->

          
            {!! Html::script('validacionesCliente/bower_components/bootstrap/js/affix.js') !!}
            {!! Html::script('validacionesCliente/dist/parsley.js') !!}


 <script type="text/javascript">

      $(document).ready(function () {
          
        $.listen('parsley:field:validate', function () {
          //validateFront();
        });

        //Descripción, avanza hacia las caracteristicas
        $('#descripcion2 .siguiente').on('click', function () {
          $('#descripcion2').parsley().validate();
          validateFront();
        });

          var validateFront = function () {

          var flag = false;

            if (true === $('#descripcion2').parsley().isValid()) {
              //$('.bs-callout-info').removeClass('hidden');
              //$('.bs-callout-warning').addClass('hidden');
              flag = true;
            } else {
              //$('.bs-callout-info').addClass('hidden');
              //$('.bs-callout-warning').removeClass('hidden');
              flag = false;
            }

           //alert(flag)

           if(flag == true){

			   	$(".listing-form-progress .progress-bar").removeClass('progress-bar-primary');
			   	$(".listing-form-progress .progress-bar").addClass('progress-bar-info');        	   
        	   	$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","25%").width("25%");
        	  
        	   	$("#estatus_formulario").removeClass('fa fa-square-o');
        	   	$("#estatus_formulario").addClass('fa fa-check-square-o').attr("style", "color: green");           	   
        	   
               	document.getElementById('caracteristicas').style.display = 'inline';
               	document.getElementById('caracteristicas2').style.display = 'inline';               
               	document.getElementById('descripcion2').style.display = 'none';

           }else{

				$("#estatus_formulario").removeClass('fa fa-check-square-o');
        	    $("#estatus_formulario").addClass('fa fa-square-o');  
	                  		
				$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","0%").width("0%");			
        	   	$('#myModal').modal('show');								
           }                
          };
         
		//Caracteristicas, avanza hacia las fotos
          $('#caracteristicas2 .siguiente').on('click', function () {
              $('#caracteristicas2').parsley().validate();
              validateFront2();
            });

              var validateFront2 = function () {

              var flag = false;

                if (true === $('#caracteristicas2').parsley().isValid()) {
                  //$('.bs-callout-info').removeClass('hidden');
                  //$('.bs-callout-warning').addClass('hidden');
                  flag = true;
                } else {
                  //$('.bs-callout-info').addClass('hidden');
                  //$('.bs-callout-warning').removeClass('hidden');
                  flag = false;
                }

               //alert(flag)

               if(flag == true){

            	   	$(".listing-form-progress .progress-bar").addClass('progress-bar-warning');     
            	   	$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","50%").width("50%");

            	   	$("#estatus_formulario2").removeClass('fa fa-square-o');
            	   	$("#estatus_formulario2").addClass('fa fa-check-square-o').attr("style", "color: green");                 	   
            	   
                   	document.getElementById('fotos').style.display = 'inline';
                   	document.getElementById('fotos2').style.display = 'inline';
                   	document.getElementById('caracteristicas2').style.display = 'none';            

               }else{

            	   	$("#estatus_formulario2").removeClass('fa fa-check-square-o');
            	   	$("#estatus_formulario2").addClass('fa fa-square-o');

    				$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","25%").width("25%");
            	   	$('#myModal').modal('show');				
               }
                         
              };

      		//Caracteristicas, retrocede hacia la descripción
              $('#caracteristicas2 .anterior').on('click', function () {
                  $('#caracteristicas2').parsley().validate();
                  validateFront5();
                });

                  var validateFront5 = function () {

                  var flag = false;

                    if (true === $('#caracteristicas2').parsley().isValid()) {
                      //$('.bs-callout-info').removeClass('hidden');
                      //$('.bs-callout-warning').addClass('hidden');
                      flag = true;
                    } else {
                      //$('.bs-callout-info').addClass('hidden');
                      //$('.bs-callout-warning').removeClass('hidden');
                      flag = false;
                    }

                   //alert(flag)

                   if(flag == true){
                      
                	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","0%").width("0%");

                	   $("#estatus_formulario").removeClass('fa fa-check-square-o');
                	   $("#estatus_formulario").addClass('fa fa-square-o');  
                	   
                       document.getElementById('descripcion').style.display = 'inline';
                       document.getElementById('descripcion2').style.display = 'inline';
                       document.getElementById('caracteristicas').style.display = 'none';
                       document.getElementById('caracteristicas2').style.display = 'none';
                
                   }else{

                	   $('#myModal').modal('show');				
                   }
                             
                  };


      		//Fotos, avanza hacia la publicacion
              $('#fotos2 .siguiente').on('click', function () {                  
                  $('#fotos2').parsley().validate();
                  validateFront3();                 
                });

                  var validateFront3 = function () {

                  var flag = false;

                    if (true === $('#fotos2').parsley().isValid()) {
                      //$('.bs-callout-info').removeClass('hidden');
                      //$('.bs-callout-warning').addClass('hidden');
                      flag = true;
                    } else {
                      //$('.bs-callout-info').addClass('hidden');
                      //$('.bs-callout-warning').removeClass('hidden');
                      flag = false;
                    }

                   //alert(flag)

                   if(flag == true){
                       
                	   $(".listing-form-progress .progress-bar").addClass('progress-bar-primary');  
                	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","75%").width("75%");

                	   $("#estatus_formulario3").removeClass('fa fa-square-o');
                	   $("#estatus_formulario3").addClass('fa fa-check-square-o').attr("style", "color: green");     
                	   
                       document.getElementById('publicar').style.display = 'inline';
                       document.getElementById('publicar2').style.display = 'inline';
                       document.getElementById('fotos2').style.display = 'none';
                
                   }else{
       				//alert('Disculpe! Aún faltan datos por completar.....')
						$("#estatus_formulario3").removeClass('fa fa-check-square-o');
                	   	$("#estatus_formulario3").addClass('fa fa-square-o');         				
       					$(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","50%").width("50%");
                		$('#myModal').modal('show');				
                  }
                             
                  };

            	//Fotos, retrocede hacia las caracteristicas
                  $('#fotos2 .anterior').on('click', function () {
                      
                      $('#fotos2').parsley().validate();
                      validateFront6();
                    });

                      var validateFront6 = function () {

                      var flag = false;

                        if (true === $('#fotos2').parsley().isValid()) {
                          //$('.bs-callout-info').removeClass('hidden');
                          //$('.bs-callout-warning').addClass('hidden');
                          flag = true;
                        } else {
                          //$('.bs-callout-info').addClass('hidden');
                          //$('.bs-callout-warning').removeClass('hidden');
                          flag = false;
                        }

                       //alert(flag)

                       if(flag == true){

              			   $(".listing-form-progress .progress-bar").removeClass('progress-bar-warning');
            			   $(".listing-form-progress .progress-bar").addClass('progress-bar-info');                              
                    	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","25%").width("25%");

                    	   $("#estatus_formulario2").removeClass('fa fa-check-square-o');
                    	   $("#estatus_formulario2").addClass('fa fa-square-o');  
                    	                       	   
                           document.getElementById('caracteristicas').style.display = 'inline';
                           document.getElementById('caracteristicas2').style.display = 'inline';
                           document.getElementById('fotos').style.display = 'none';
                           document.getElementById('fotos2').style.display = 'none';                    

                       }else{
           				
                    		$('#myModal').modal('show');				
                      }
                                 
                      };                  


            		//Publicar, retrocede hacia las fotos
                  $('#publicar2 .anterior').on('click', function () {
                      
                      $('#publicar2').parsley().validate();
                      validateFront7();
                    });

                      var validateFront7 = function () {

                      var flag = false;

                        if (true === $('#publicar2').parsley().isValid()) {
                          //$('.bs-callout-info').removeClass('hidden');
                          //$('.bs-callout-warning').addClass('hidden');
                          flag = true;
                        } else {
                          //$('.bs-callout-info').addClass('hidden');
                          //$('.bs-callout-warning').removeClass('hidden');
                          flag = false;
                        }

                       //alert(flag)

                       if(flag == true){

                    	   $(".listing-form-progress .progress-bar").removeClass('progress-bar-primary'); 
                    	   $(".listing-form-progress .progress-bar").addClass('progress-bar-warning');  
                    	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","50%").width("50%");

                    	   $("#estatus_formulario3").removeClass('fa fa-check-square-o');
                    	   $("#estatus_formulario3").addClass('fa fa-square-o');                      	   
                    	   
                           document.getElementById('fotos').style.display = 'inline';
                           document.getElementById('fotos2').style.display = 'inline';
                           document.getElementById('publicar').style.display = 'none';
                           document.getElementById('publicar2').style.display = 'none';                    

                       }else{
                    	$('#myModal').modal('show');				
                      }
                                 
                      };


              		//Guardar la publicacion
                      $('#demo-form .guardar').on('click', function () {
                          
                          $('#demo-form').parsley().validate();
                          validateFront8();
                          //hola();
                        });

                          var validateFront8 = function () {

                          var flag = false;

                            if (true === $('#publicar2').parsley().isValid()) {
                              //$('.bs-callout-info').removeClass('hidden');
                              //$('.bs-callout-warning').addClass('hidden');
                              flag = true;
                            } else {
                              //$('.bs-callout-info').addClass('hidden');
                              //$('.bs-callout-warning').removeClass('hidden');
                              flag = false;
                            }

                           //alert(flag)

                           if(flag == true){

                        	   $(".listing-form-progress .progress-bar").removeClass('progress-bar-primary'); 
                        	   $(".listing-form-progress .progress-bar").addClass('progress-bar-success');  
                        	   $(".listing-form-progress .progress-bar").attr("data-appear-progress-animation","100%").width("100%");

                        	   $("#estatus_formulario4").removeClass('fa fa-square-o');
                        	   $("#estatus_formulario4").addClass('fa fa-check-square-o').attr("style", "color: green");                             	               

                           }else{
               				
                	   			$("#estatus_formulario4").removeClass('fa fa-check-square-o');
                	   			$("#estatus_formulario4").addClass('fa fa-square-o');                 				
               				
                        		$('#myModal').modal('show');				
                          }
                                     
                          };


        
      });

      try {
        hljs.initHighlightingOnLoad();
      } catch ( err ) {}

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-37229467-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); 
        ga.type = 'text/javascript'; 
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

        <!-- Fin Validaciones-->



    
        @if(Route::current()->getName() == 'accesorios') 
 		
<!-- jQuery -->
        <!-- {!! Html::script('pag/js/jquery-1.4.4.min.js') !!}-->

        <!-- Demo stuff -->
        {!! Html::style('pag/css/jq.css') !!}
        <!-- {!! Html::style('pag/css/bootstrap.min.css') !!}-->
        {!! Html::style('pag/css/prettify.css') !!}
        {!! Html::script('pag/js/prettify.js') !!}
        {!! Html::script('pag/js/docs.js') !!}

        <!-- Tablesorter: required for bootstrap -->
        {!! Html::style('pag/css/theme.bootstrap.css') !!}
        {!! Html::script('pag/js/jquery.tablesorter.js') !!}
        {!! Html::script('pag/js/jquery.tablesorter.widgets.js') !!}
        
        <!-- {!! Html::style('pag/css/print.css') !!}-->

        <!-- Tablesorter: optional -->
        {!! Html::style('pag/js/jquery.tablesorter.pager.css') !!}
        {!! Html::script('pag/js/jquery.tablesorter.pager.js') !!}
    



<!-- jQuery -->
        
        <script id="js">$(function() {

                $.extend($.tablesorter.themes.bootstrap, {
                    // these classes are added to the table. To see other table classes available,
                    // look here: http://twitter.github.com/bootstrap/base-css.html#tables
                    table: 'table table-bordered',
                    caption: 'caption',
                    header: 'bootstrap-header', // give the header a gradient background
                    footerRow: '',
                    footerCells: '',
                    icons: '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
                    sortNone: 'bootstrap-icon-unsorted',
                    sortAsc: 'icon-chevron-up glyphicon glyphicon-chevron-up', // includes classes for Bootstrap v2 & v3
                    sortDesc: 'icon-chevron-down glyphicon glyphicon-chevron-down', // includes classes for Bootstrap v2 & v3
                    active: '', // applied when column is sorted
                    hover: '', // use custom css here - bootstrap class may not override it
                    filterRow: '', // filter row class
                    even: '', // odd row zebra striping
                    odd: ''  // even row zebra striping
                });

                // call the tablesorter plugin and apply the uitheme widget
                $("table").tablesorter({
                    // this will apply the bootstrap theme if "uitheme" widget is included
                    // the widgetOptions.uitheme is no longer required to be set
                    theme: "bootstrap",
                    widthFixed: true,
                    headerTemplate: '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

                    // widget code contained in the jquery.tablesorter.widgets.js file
                    // use the zebra stripe widget if you plan on hiding any rows (filter widget)
                    widgets: ["uitheme", "filter", "zebra"],
                    widgetOptions: {
                        // using the default zebra striping class name, so it actually isn't included in the theme variable above
                        // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
                        zebra: ["even", "odd"],
                        // reset filters button
                        filter_reset: ".reset"

                                // set the uitheme widget to use the bootstrap theme class names
                                // this is no longer required, if theme is set
                                // ,uitheme : "bootstrap"

                    }
                })
                        .tablesorterPager({
                            // target the pager markup - see the HTML block below
                            container: $(".ts-pager"),
                            // target the pager page select dropdown - choose a page
                            cssGoto: ".pagenum",
                            // remove rows from the table to speed up the sort of large tables.
                            // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
                            removeRows: false,
                            // output string - default is '{page}/{totalPages}';
                            // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
                            output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

                        });

            });</script>

        <script>
            $(function() {

                // filter button demo code
                $('button.filter').click(function() {
                    var col = $(this).data('column'),
                            txt = $(this).data('filter');
                    $('table').find('.tablesorter-filter').val('').eq(col).val(txt);
                    $('table').trigger('search', false);
                    return false;
                });

                // toggle zebra widget
                $('button.zebra').click(function() {
                    var t = $(this).hasClass('btn-success');
//			if (t) {
                    // removing classes applied by the zebra widget
                    // you shouldn't ever need to use this code, it is only for this demo
//				$('table').find('tr').removeClass('odd even');
//			}
                    $('table')
                            .toggleClass('table-striped')[0]
                            .config.widgets = (t) ? ["uitheme", "filter"] : ["uitheme", "filter", "zebra"];
                    $(this)
                            .toggleClass('btn-danger btn-success')
                            .find('i')
                            .toggleClass('icon-ok icon-remove glyphicon-ok glyphicon-remove').end()
                            .find('span')
                            .text(t ? 'disabled' : 'enabled');
                    $('table').trigger('refreshWidgets', [false]);
                    return false;
                });
            });
        </script> 
         		
 	@endif
        
</body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87039691-1', 'auto');
  ga('send', 'pageview');

</script>

</html>    
