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
                                        <a href="{{ route('detalles',$vehiculo->id) }}" class="media-box"><img class="" src="{{ $vehiculo->imagen }}" style="width: 140px; height: 93px"/>
                                        
                                        <span class="zoom">
                                        	<span class="icon">
                                        		<i class="icon-plus"></i>
                                        	</span>
                                        </span>
                                        
                                        </a>
                                        <span class="vehicle-age">
                                        <p class="label label-primary">{!! $vehiculo->int_ano !!}</p>
                                                                             
                                        </span>
                                        <span class="  premium-listing "></span>
                                        
                                        <div class="result-item-view-buttons">

                                            @if ($vehiculo->str_video == "")
                                            	<a style="font-size:9px" class="col-md-6" href="{{ route('detalles',$vehiculo->id) }}"><i class="fa fa-eye"></i> Ver</a>
                                            	<a style="font-size:9px" class="col-md-6" href="#"><i class="fa fa-heart"></i> Fav</a>
                                            @else
                                                <a style="font-size:9px" class="col-md-4" href="{!! $vehiculo->str_video !!}" data-rel="prettyPhoto"><i class="fa fa-play-circle-o"></i> Video</a>
                                            	<a style="font-size:9px" class="col-md-4" href="{{ route('detalles',$vehiculo->id) }}"><i class="fa fa-eye"></i> Ver</a>
                                            	<a style="font-size:9px" class="col-md-4" href="#"><i class="fa fa-heart"></i> Fav</a>
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
			                                               
					                                                    <div class="price" style="font-size:12px">
			                                                    
																	<a href="#" class="" data-toggle="modal" data-target="#loginModal">
											                            Click ver precio
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