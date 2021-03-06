@foreach ($registros as $total) @endforeach

                             @if ($total == 0)
                                                     
					            <div class="container">
					                <div class="text-align-center error-404">
					                    <h1 class="">0 Resultados obtenidos</h1>
					                    Seleccione otros criterios de búsqueda<br>
					                    <h3><i class="fa fa-frown-o"></i></h3>
					                    							
					                </div>					               
					            </div>
	                                                  
                             @endif                                                     
                               
                            @foreach ($total_paginas as $paginas) @endforeach
                    
                            @for ($i = 1; $i < $paginas + 1; $i++) @endfor
                                
                            {!! Form::input('hidden', 'total', $total , ['id'=> 'total']) !!}
                            {!! Form::input('hidden', 'paginas', $i-1 , ['id'=> 'paginas']) !!}
                                
							@foreach ($vehiculos as $vehiculo)

                                <!-- Result Item -->
                                <div class="result-item format-standard">

                                    <div class="result-item-image">    
                                    
                                        <a href="{{ route('detalles',$vehiculo->id) }}" class="media-box"><img class="" src="publicaciones/<?=$vehiculo->str_mini?>" style="width: 140px; height: 93px"/>                                        
                                        
                                        <!-- 
                                        	<a href="{{ route('detalles',$vehiculo->id) }}" class="media-box"><img class="" src="<?=$vehiculo->str_mini?>" style="width: 140px; height: 93px"/>
                                        -->
                                        
                                        <span class="zoom">
                                        	<span class="icon">
                                        		<i class="icon-plus"></i>
                                        	</span>
                                        </span>
                                        
                                        </a>
                                        <span class="vehicle-age">
                                        <p class="label label-primary">{!! $vehiculo->int_ano !!}</p>
                                                                             
                                        </span>
                                        <span class="premium-listing"></span>
                                        
                                        <div class="result-item-view-buttons">

											<input type="hidden" id="idpub<?=$vehiculo->id?>" readonly="readonly" name="idpub<?=$vehiculo->id?>" value="{{ $vehiculo->id }}" style="width: 50px">

                                            @if ($vehiculo->str_video == "")                                            	                                            	                                            
                                            	                                            	
                                            	@if (Auth::user())
                                            		
                                            		<a style="font-size:9px" class="col-md-6 col-xs-6" href="{{ route('detalles',$vehiculo->id) }}" title="Ver publicación"><i style="color: green" class="fa fa-eye"></i></a>
                                            		
                                            		
                                            		@if ($vehiculo->fav != "")
                                            		
                                            			<div id="fav_pub<?=$vehiculo->id?>">
                                            				<a style="font-size:9px" class="col-md-6 col-xs-6" href="#" onclick="fav_eliminar({{ $vehiculo->id }})" title="Quitar de favoritos"><i style="color: red" class="fa fa-heart"></i></a>
                                            			</div>
                                            		
                                            		@else
                                            	
                                            			<div id="fav_pub<?=$vehiculo->id?>">
                                            				<a style="font-size:9px" class="col-md-6 col-xs-6" href="#" onclick="fav({{ $vehiculo->id }})" title="Añadir a favoritos"><i class="fa fa-heart"></i></a>
                                            			</div>
                                            	
                                            		@endif
                                            	
                                            	@else
                                            	
                                            		<a style="font-size:9px" class="col-md-12 col-xs-12" href="{{ route('detalles',$vehiculo->id) }}" title="Ver publicación"><i style="color: green" class="fa fa-eye"></i></a>
                                            		                                            	                                            	                                            
                                            	@endif
                                                                                                                                    
                                            @else
                                            
                                            	@if (Auth::user())
                                            	
	                                                <a style="font-size:9px" class="col-md-4 col-xs-4" href="{!! $vehiculo->str_video !!}" data-rel="prettyPhoto" title="Ver video"><i style="color: blue" class="fa fa-video-camera"></i></a>
	                                            	<a style="font-size:9px" class="col-md-4 col-xs-4" href="{{ route('detalles',$vehiculo->id) }}" title="Ver publicación"><i style="color: green" class="fa fa-eye"></i></a>
	                                            	
	                                            	
	                                            	@if ($vehiculo->fav != "")
	                                            	
	                                            		<div id="fav_pub<?=$vehiculo->id?>">
	                                            			<a style="font-size:9px" class="col-md-4 col-xs-4" href="#" onclick="fav_eliminar_4({{ $vehiculo->id }})" title="Quitar de favoritos"><i style="color: red" class="fa fa-heart"></i></a>
	                                            		</div>
		                                            @else
		                                            	
		                                            	<div id="fav_pub<?=$vehiculo->id?>">
		                                            		<a style="font-size:9px" class="col-md-4 col-xs-4" href="#" onclick="fav_4({{ $vehiculo->id }})" title="Añadir a favoritos"><i class="fa fa-heart"></i></a>
		                                            	</div>
		                                            	
		                                            @endif
	                                            
	                                            @else
                                                                                        
	                                                <a style="font-size:9px" class="col-md-6 col-xs-6" href="{!! $vehiculo->str_video !!}" data-rel="prettyPhoto" title="Ver video"><i style="color: blue" class="fa fa-video-camera"></i></a>
	                                            	<a style="font-size:9px" class="col-md-6 col-xs-6" href="{{ route('detalles',$vehiculo->id) }}" title="Ver publicación"><i style="color: green" class="fa fa-eye"></i></a>
	                                            	                                            	                                            	
                                            	@endif
                                            
                                            @endif

                                            <div class="result-item-block col1" style="font-size:11px;width: 100%">
                                                 <img src="{{ asset('autostars/images/banner-correo3.png') }}" alt="Logo">
                                            </div>                                             
                                            
                                        </div>

                                    </div>

                                    <div class="result-item-in">

                                        <h4 class="result-item-title" style="font-size:12px">
                                        	<a href="{{ route('detalles',$vehiculo->id) }}" title="{!! $vehiculo->modelo !!}">
                                        	
	                                        	@if( strlen(".$vehiculo->marca $vehiculo->modelo.") < 20 ) 
	                                        	
	                                        		{!! $vehiculo->marca." ".$vehiculo->modelo !!} 
	                                        		
	                                        	@else 
	                                        		{!! substr($vehiculo->marca." ".$vehiculo->modelo,0,15)."..." !!}
	                                        		
	                                        	@endif 

                                        	</a>
                                        </h4>
                                        
                                        <div class="result-item-cont">
                                            
                                            <div class="result-item-block col2">
                                                <div class="result-item-pricing">                                                                                         

													@if ($vehiculo->lng_idpais == '13' ) 
                            
									                      @if (Auth::guest())
			                                               
					                                                    <div class="price" style="font-size:10px">
			                                                    
																	<a href="#" class="" data-toggle="modal" data-target="#loginModal">
											                            Ver precio
											                        </a>
																	                                                    
			                                                    </div>
			                                                                                                   
			                                               @endif
			                                               
			                                               @if (Auth::user())
			                                               		
																<div class="price" style="font-size:12px">
                                                    
				                                                        @if ($vehiculo->str_moneda == 'Dólares' ) 
			                            
											                            	$
											                            
											                            @elseif ($vehiculo->str_moneda == 'Bolívares' )
											                            	
											                            	<!-- VEF --> BsF
											                            									                            
											                            @elseif ($vehiculo->str_moneda == '' )
											                            
											                            	{!! $vehiculo->str_abreviatura !!}
											                            	                            
											                            @endif 
			                                                    
			                                                                                                       
			                                                    {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!} 
			                                                    
			                                                    </div>

			                                               @endif 
		                                               	
						                            @else
						                            	
														<div class="price" style="font-size:12px;text-align: center;">
                                                    
		                                                        @if ($vehiculo->str_moneda == 'Dólares' ) 
	                            
									                            	$
									                            
									                            @elseif ($vehiculo->str_moneda == 'Bolívares' )
									                            	
									                            	<!-- VEF --> BsF
									                            									                            
									                            @elseif ($vehiculo->str_moneda == '' )
									                            
									                            	{!! $vehiculo->str_abreviatura !!}
									                            	                            
									                            @endif 
	                                                    
	                                                                                                       
	                                                    {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!} 
	                                                    
	                                                    </div>
						                            								                            
						                            @endif                                                 
                                                                                        
                                                </div>
                                            </div>
                                        </div>

                                        <div class="result-item-features" style="font-size:10px;text-align:center"><br>
                                                                                                                                
                                            <p class="text-center" style="margin-top: -2px;">
                                            	<img class="" src="autostars/images/paises-america/<?=$vehiculo->lng_idpais?>.png"/><br>
                                            	{!! $vehiculo->ciudad !!}
                                            	
                                            <div class="result-item-block col1" style="font-size:11px;width: 100%">
                                                <p style="text-align: justify;">{!! $vehiculo->str_comentario !!}</p>
                                            </div>                                              	
                                            	
                                            </p>
                                            
                                        </div>

                                    </div>

                                </div>
                                
                            @endforeach