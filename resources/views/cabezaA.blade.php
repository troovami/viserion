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
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="Troovami - Vehículos">
<meta name="twitter:description" content="Sitio de venta de vehículos">
<meta name="twitter:creator" content="@author_handle">

<meta name="twitter:image" content="http://50.78.120.122/viserion_web/public/autostars/images/troovami-vehicles.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Troovami - Vehículos" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://viserion-troovami.ddns.net" />
<meta property="og:image" content="http://50.78.120.122/viserion_web/public/autostars/images/troovami-vehicles2.jpg" />
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
                	
                	<body class="home" onload="setTimeout('formularioDinamico()',500);ImagenesGaleria();ImagenesGaleria1();">
                
                @elseif(Route::current()->getName() == 'publicarMotocicleta')
                	
                	<body class="home" onload="ImagenesGaleria();ImagenesGaleria1();">
                	
                @elseif(Route::current()->getName() == 'editarPublicacion')
                	                	
                	<body class="home" onload="ImagenesGaleriaEditar();">                      	               	
                
                @endif  

    <div class="body">
    
	<div class="site-header-wrapper">
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
													  <!-- Indicators -->
													  <ol class="carousel-indicators">
													    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
													    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
													    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
													  </ol>
													
													  <!-- Wrapper for slides -->
													  <div class="carousel-inner" role="listbox">
													    <div class="item active">
													      <img src="" alt="...">
													      <!-- 
													      <div class="carousel-caption">
													        ...
													      </div>
													       -->
													    </div>
													    <div class="item">
													      <img src="" alt="...">
													      <!-- 
													      <div class="carousel-caption">
													        ...
													      </div>
													       -->
													    </div>
													    <div class="item">
													      <img src="" alt="...">
													      
													      <!-- 
													      <div class="carousel-caption">
													        ...
													      </div>
													       -->
													      
													    </div>    
													    <!-- ...  -->
													  </div>
													
													  <!-- Controls -->
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