@extends('app')

@section('content')

    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full dashboard-pages">
        	<div class="container">
            	<div class="dashboard-wrapper">
                    <div class="row">
                    
                    			@if(Session::has('message'))
					            
									<div class="alert alert-success" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									  <strong><i class="fa fa-exclamation-triangle"></i></strong> {{Session::get('message')}}
									</div> 							
							
								@endif
                    
                <div class="row">
                  <div class="col-md-12">
                      <h1 class="uppercase strong"><i class="fa fa-cog accent-color" aria-hidden="true"></i> Mi cuenta</h1>
                        <p class="lead">Gestione sus datos <span class="accent-color">Usted podrá administrarlos en cualquier momento:</span></p>
                    </div>
                    <div class="col-md-6">
                      
                      <!-- 
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, <span class="accent-color">consectetur adipiscing</span> elit. Nulla convallis egestas rhoncus.</p>
                     -->
                    
                    </div>
                </div> 
                    
                    
                        <div class="col-md-3 col-sm-4 users-sidebar-wrapper">
                            <!-- SIDEBAR -->
                            <div class="users-sidebar tbssticky">
                            	
                                <ul class="list-group">
                                    <li class="list-group-item active"> <a href="#"><i class="fa fa-cog"></i> Mi Cuenta </a></li>
                                                                        
                                    <li class="list-group-item"> <a href="{{route('editar')}}"><i class="fa fa-user"></i> Perfil</a></li>
                                    <li class="list-group-item"> <a href="{{route('editar2')}}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Imágen</a></li>
                                    <li class="list-group-item"> <a href="{{route('editar3')}}"><i class="fa fa-key" aria-hidden="true"></i> Clave</a></li>
                                    <!-- <li class="list-group-item"> <a href="{{route('editar',Auth::user()->id)}}"><i class="fa fa-user"></i> Mi Perfil</a></li>-->
                                    
                                    
                                     <li class="list-group-item"> <a href="{{route('publicar')}}"><i class="fa fa-newspaper-o"></i> Publicar</a></li>
                                     <li class="list-group-item"> <a href="{{route('contacto')}}"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Sugerencias</a></li>

                                    <li class="list-group-item"> <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Salir</a></li>
                                    <li class="list-group-item"> <center><i class="fa fa-paypal" aria-hidden="true"></i> PayPal @include('paypal')</center></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8">

	                         @foreach ($cuenta_usuario as $usuario)							

								
                        				  <div class="row">
	                                    
	<div class="panel panel-default">
  <div class="panel-heading" style="background-color: #5bc0de">
    <h3 class="panel-title" style="color: #FFF"><i class="fa fa-info-circle" aria-hidden="true"></i> Datos del Perfil de Usuario</h3>
  </div>
  <div class="panel-body">
    
	                                    	<div class="col-xs-6 col-md-4 thumbnail">
				                            @if (Auth::user()->blb_img != "")
				                            	<img src="data:image/jpeg;base64,{{ $usuario->blb_img }}" alt="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" title="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" style="width:100%">
											@else
										
												  @if (Auth::user()->lng_idgenero == 1)
												  	<img src="{{ asset('autostars/images/user_masculino.png') }}" alt="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" title="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" style="width:100%">								  	
												  @elseif (Auth::user()->lng_idgenero == 2)
												  	<img src="{{ asset('autostars/images/usuario_femenino.png') }}" alt="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" title="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" style="width:100%">
												  @endif								
				
				                       		@endif	                                    
	                                    
		                                    </div>
	
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-user" aria-hidden="true"></i> Usuario:</strong> {!! $usuario->name !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Nombre Completo: </strong>{!! $usuario->str_nombre !!}, {!! $usuario->str_apellido !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-user-secret" aria-hidden="true"></i> Cédula:</strong> {!! number_format($usuario->str_ididentificacion, 0, ',', '.')    !!}<br>
											 &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-venus-mars" aria-hidden="true"></i> Género: </strong>{!! $usuario->genero !!}<br>
											 &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-birthday-cake" aria-hidden="true"></i> Fecha de Nacimiento: </strong>{!! $usuario->fecha_nacimiento !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-flag" aria-hidden="true"></i> País: 
	                                         <img src="data:image/jpeg;base64,{{ $usuario->blb_bandera}}" alt="{!! $usuario->pais !!}" title="{!! $usuario->pais !!}" style="width:20px">	                                         
	                                         </strong>{!! $usuario->pais !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-calendar" aria-hidden="true"></i> Inscrito: </strong>{!! $usuario->fecha_inscripcion !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-phone-square" aria-hidden="true"></i> Teléfono: </strong>{!! $usuario->str_codarea !!} {!! $usuario->str_telefono !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-envelope" aria-hidden="true"></i> Correo: </strong>{!! $usuario->email !!}<br>	                                        
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-twitter" aria-hidden="true"></i> Twitter: </strong>{!! $usuario->str_twitter !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook: </strong>{!! $usuario->str_facebook !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> <i class="fa fa-instagram" aria-hidden="true"></i> Instagram: </strong>{!! $usuario->str_instagram !!}
	                                     </div>
    
    
  </div>
</div>	                                    
	                                    


								@endforeach


<div class="row">

<div class="panel panel-default">
  <div class="panel-heading" style="background-color: #5bc0de">
    <h3 class="panel-title" style="color: #FFF"><i class="fa fa-newspaper-o"></i> Mis Publicaciones
    <span class="badge" style="background-color: #777"> 
    									@if (isset($totalPublicaciones))
									
	                                    @foreach ($totalPublicaciones as $totales)
										    {{ $totales->total }} 
										@endforeach
										
									@else
										0										
									@endif
    </span>
    
    </h3>
  </div>
  <div class="panel-body">
                               

                                <div class="table-responsive">
                                    <table class="table table-striped dashboard-tables saved-cars-table" style="width: 500%">
                                    
                                    <!-- <table class="table table-bordered dashboard-tables saved-cars-table" style="width: 100%">-->
                                        <thead>
                                            <tr style="text-align: center">
                                            	<td><strong>#</strong></td>
                                                <td><strong>Imágen</strong></td>
                                                <td><strong>Descripción</strong></td>
                                                <td><strong>Precio</strong></td>
                                                <td><strong>Período</strong></td>
                                                
                                                <td colspan="2"><strong>Acciones</strong></td>                                                
                                                <td><strong>Estatus</strong></td>
                                                <td><strong><i class="fa fa-share-alt" aria-hidden="true"></i></strong></td>                                               
                                            </tr>
                                        </thead>

                                        <tbody>
											
											@if (isset($publicaciones_usuario))
											    											
												<?php 
													$a = 0;
												?>
                                             @foreach ($publicaciones_usuario as $publicaciones) 
                                                <tr style="text-align: center">
                                                                                                
                                                    <td>																											
													    <span class="badge" style="background-color: #777"> 
															<?=$a+1?>
													    </span>																										
													</td>                                                
                                                
                                                    <td>
                                                        <!-- Result -->
                                                        <a href="{{ route('detalles',$publicaciones->id) }}" target="_blank" class="car-image">
                                                            <img src="{{ $publicaciones->imagen }}" alt="">
                                                        </a>

													</td>
													
													<td>
                                                       
                                                            <h5><a href="{{ route('detalles',$publicaciones->id) }}" target="_blank" title="Click para ver {{$publicaciones->str_marca}} {{$publicaciones->str_modelo}}"> 

                                                                @if( strlen(".$publicaciones->str_marca $publicaciones->str_modelo.") < 20 ) 
                                                                
                                                                    {!! $publicaciones->str_marca." ".$publicaciones->str_modelo !!} 
                                                                    
                                                                @else 
                                                                    {!! $publicaciones->str_marca." ".substr($publicaciones->str_modelo,0,4)."..." !!}
                                                                    
                                                                @endif
                                                            </a></h5>
                                                       
                                                    </td>
                                                    <td><span class="price">


                                                            @if ($publicaciones->str_moneda == 'Dólares' ) 
                            
                                                                $
                                                            
                                                            @elseif ($publicaciones->str_moneda == 'Bolívares' )
                                                                
                                                                <!-- VEF --> BsF
                                                                                                                            
                                                            @elseif ($publicaciones->str_moneda == '' )
                                                            
                                                                {!! $publicaciones->str_abreviatura !!}
                                                                                            
                                                            @endif

                                                            {!! number_format($publicaciones->str_precio_venta, null, ',', '.') !!} </span></td>
                                                    
                                                        <td align="center">
                                                            <span class="text-success">
                                                                {{ $publicaciones->created_at }}
                                                            </span>
                                                                         		<br>                                             
                                                            <span class="text-danger">
                                                                {{ $publicaciones->dmt_fecha_publicacion_fin }}
                                                            </span>                                                            
                                                            
                                                        </td>                                                        

      												<td>
      													<a href="#">
      													
      														<select id="accionesPublicacion<?=$a?>" name="accionesPublicacion<?=$a?>" class="form-control selectpicker input-sm" onchange="acciones('<?=$publicaciones->id?>', '<?=$a?>' )" >
      															<option value="">Seleccione</option>
      															<option value="706">En Línea</option>
      															<option value="707">Pausar</option>
      															<option value="">Modificar</option>     															
      														</select>
      														
      													</a>
      												</td>

      												<td>

	      													<div id="accionPublicacion<?=$a?>">
	      														 
	      															      														
				      												@if($publicaciones->status_user == "Activa")
				      												
						  												<i title="{{ $publicaciones->status_user }}" style="color: green; cursor:pointer" class="fa fa-play" aria-hidden="true"></i>
						  												
						  												
				      												
				      												@else	      														
					      											
					      												<i title="{{ $publicaciones->status_user }}" style="color: orange; cursor:pointer" class="fa fa-pause" aria-hidden="true"></i>		
					      											
					      											@endif		
	      														
	      													</div>
      													
      												</td>      												  											
      												
      												
      												<td>

	      													<div id="accionPublicacion<?=$a?>">
	      														 
	      															      														
				      												@if($publicaciones->status_admin == "Activa")
				      												
						  												<i title="{{ $publicaciones->status_admin }}" style="color: green; cursor:pointer" class="fa fa-check" aria-hidden="true"></i>
				      												
				      												@elseif($publicaciones->status_admin == "Revisando")	      														
					      											
					      												<i title="{{ $publicaciones->status_admin }}" style="color: blue; cursor:pointer" class="fa fa-clock-o" aria-hidden="true"></i>		
					      											
				      												@elseif($publicaciones->status_admin == "Inactiva")	      														
					      											
					      												<i title="{{ $publicaciones->status_admin }}" style="color: red; cursor:pointer" class="fa fa-times" aria-hidden="true"></i>		
					      																      											
					      											@endif		
	      														
	      													</div>
      												
      												</td> 
      												
      												
      												<td>
      												
      														<a href="https://twitter.com/share" class="twitter-share-button" data-text="Se vende este vehículo {{ $publicaciones->str_marca }} {{ $publicaciones->str_modelo }} {{ $publicaciones->int_ano }}" data-url="http://www.troovami.com/Vehiculo/{{$publicaciones->id}}" data-via="troovami" data-hashtags="">Tweet</a>
															<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>    
      														         			<br>  									
      												&nbsp;<div class="fb-share-button" data-href="http://viserion-troovami.ddns.net/{{Request::path()}}" data-layout="button"></div>
      												</td>
      												      												
      												
      												<?php 
      													$a++;
      												?>
                                                </tr>
                                            @endforeach
										@endif
                                        </tbody>

                                    </table>
                                    
                                    <hr>


                               	</div>
                                
                            
  </div>
</div>
</div>


<!-- 
<div class="row">


<div class="panel panel-default">
  <div class="panel-heading" style="background-color: #5bc0de">
    <h3 class="panel-title" style="color: #FFF"><i class="fa fa-newspaper-o"></i> Busquedas Guardadas</h3>
  </div>
  <div class="panel-body">
    
    
                            

                                <div class="table-responsive">
                                    <table class="table table-striped dashboard-tables saved-cars-table" style="width: 100%">
                                    <!-- <table class="table table-bordered dashboard-tables saved-searches-table"> --
                                        <thead>
                                            <tr style="text-align: center;">
                                                
                                                <td>Custom search name</td>
                                                <td>Details</td>
                                                <td>Receive alerts</td>
                                                <td>Timestamp</td>
                                                <td>Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td><a href="#" class="search-name">Search name</a></td>
                                                <td>Donec facilisis fermentum sem, ac viverra ante luctus vel.</td>
                                                <td><a href="#"><select class="form-control selectpicker input-sm"><option>Enable</option><option>Disable</option></select></a></td>
                                                <td><span class="text-success">Saved on</span> 04/11/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                            <tr>
                                                
                                                <td><a href="#" class="search-name">Search name</a></td>
                                                <td>&nbsp;</td>
                                                <td><a href="#"><select class="form-control selectpicker input-sm"><option>Enable</option><option>Disable</option></select></a></td>
                                                <td><span class="text-success">Saved on</span> 04/11/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                            <tr>
                                                
                                                <td><a href="#" class="search-name">Search name</a></td>
                                                <td>Donec facilisis fermentum sem, ac viverra ante luctus vel.</td>
                                                <td><a href="#"><select class="form-control selectpicker input-sm"><option>Enable</option><option>Disable</option></select></a></td>
                                                <td><span class="text-success">Saved on</span> 04/11/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                               	</div>
                                
                      
    
    
    
  </div>
</div>


</div>

-->

                        </div>
                    </div>
                </div>
           	</div>
        </div>
   	</div>
    <!-- End Body Content -->
  
@endsection