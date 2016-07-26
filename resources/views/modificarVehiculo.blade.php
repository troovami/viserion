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
                            
								<div id="results-holder" class="results-grid-view">
															
								
								    <!-- Start Body Content -->
								
								    	<!-- Vehicle Details -->
								        	<article class="single-vehicle-details">
								            	<div class="single-vehicle-title">
								                	<span class="badge-premium-listing">
								                            
								                    	<img src="data:image/jpeg;base64,{{ $vehiculo->bandera }}" alt="{!! $vehiculo->pais !!}" title="{!! $vehiculo->pais !!}" style="width:35px"> {!! $vehiculo->pais !!}
								
								                    </span>
													
													<br><br>
																																						
								                  	<div class="col-md-12">
								                      <h1 class="uppercase strong"><i class="fa fa-pencil-square-o accent-color" aria-hidden="true"></i> Modificar</h1>                        
								                    </div>													
													
								                    <h2 class="post-title">  
								                        
									                	<img src="data:image/jpeg;base64,{{ $vehiculo->logo }}" alt="{!! $vehiculo->marca !!}" title="{!! $vehiculo->marca !!}" style="width:65px">
									                    {!! $vehiculo->marca !!}  {!! $vehiculo->modelo !!} {!! $vehiculo->int_ano !!}
								                                                
								                    </h2>
								                        
								               	</div>

                    							<div class="single-listing-actions">

										            @if(Session::has('message'))
										            
														<div class="alert alert-success" role="alert">
														  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
														  <span aria-hidden="true">&times;</span></button>
														  <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{Session::get('message')}}
														</div> 							
												
													@endif

													<a href="{{ route('detalles',$vehiculo->id) }}" target="_blank"><i class="fa fa-desktop" aria-hidden="true"></i> Ver ésta publicación en línea</a>											

                    							</div>

                							</article>
                							                							                							
                							<div class="row">
                							
											  <div class="col-md-6">
                    <div class="row"> <!-- style="background-color: red" -->
                        <div class="col-md-12">

					<div class="panel panel-default">
					  <div class="panel-heading" style="background-color: #5bc0de">
					    <h3 class="panel-title" style="color: #FFF">Imágenes del Vehículo</h3>
					  </div>
					  <div class="panel-body">
												
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
							  </ol>
							
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							  
							  
								<?php $a = 0?>
								
									@foreach ($imagenes as $imagen)
							                                       
										@if($a == 0)
								                                       
											<div class="item active">
												<img src="{{ $imagen->imagen }}" alt="...">
												
												<div class="carousel-caption">
												
													<strong>Imagen Lateral</strong>
												
												</div>
												
											</div>	                                       
								                                       
										@else
								                                       
											<div class="item">
												<img src="{{ $imagen->imagen }}" alt="...">
												<div class="carousel-caption">
												
													<strong>Imagen 
													<?php 
													
														$num = $a+1;
														
														switch ($num){
															
															case 2:
																echo "Trasera";
															break;
															case 3:
																echo "Frontal";
															break;
															case 4:
																echo "Interior";
																break;
															case 5:
																echo "Motor";
															break;
															case 6:
																echo "Kilometraje";
															break;															
															
														}
													
													?>
													
													</strong>
												
												</div>												
											</div>
							    	                                     
										@endif
							
									<?php $a++?>
									
								@endforeach 
								  
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
	
								<br>																					
													
													
						<center>
																	
								<div class="btn-group" role="group" aria-label="...">
								
								
								  <div class="btn-group" role="group" >
								    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								      Seleccionar Imágen
								      <span class="caret"></span>
								    </button>
								    <ul class="dropdown-menu">
						      
								      <?php $a = 0?>
								      @foreach ($imagenes as $imagen)								      
									      <li>								      	
									      	<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="botonCropVisible('0');document.getElementById('id').value={{$imagen->id}}"><img src="{{ $imagen->imagen }}" alt="..." style="height: 25px"> 

													<?php 
													
														$num = $a+1;
														
														switch ($num){
															
															case 1:
																echo "Editar Imagen Lateral";
																break;															
															case 2:
																echo "Editar Imagen  Trasera";
															break;
															case 3:
																echo "Editar Imagen  Frontal";
															break;
															case 4:
																echo "Editar Imagen  Interior";
																break;
															case 5:
																echo "Editar Imagen  Motor";
															break;
															case 6:
																echo "Editar Imagen  Kilometraje";
															break;															
															
														}
													
													?>


</a>
									      </li>
									      <?php $a++?>
								      @endforeach
								      								                
								    </ul>
								  </div>
								    
								</div>																		
							
							</center>														
								
								
								<label style="color: #777">Vista Preliminar:</label>
								
								
							 	{!! Form::model($imagenes, ['route' => 'actualizarImagenes', 'method'=>'PUT','id' => 'demo-form','enctype'=>'multipart/form-data']) !!}
							 	<input type="hidden" id="id" name="id" readonly="readonly" required="required" value="">
							 	<input type="hidden" id="idPublicacion" name="idPublicacion" readonly="readonly" value="{{$vehiculo->id}}">	
								 	<!-- 
								 		<input type="hidden" name="blb_img0">		
									 -->
									<div class="cropped-0 thumbnail">
									
										<center><i class="fa fa-image"></i></center>
									
									</div>
								
									<center>
										{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
									</center>	
								
								{!! Form::close() !!}
																
					
					  </div>
					</div>
					
				<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Editar Imagen</h4>
			      </div>
			      <div class="modal-body">


					<div class="" id="">
					
					    <div class="row">
						    <div class="col-md-12">
					    		<center>
						    		<span class="btn btn-default btn-lg btn-block btn-file" style="background-color: #5bc0de; width: 650px;">							        
								        <h3 class="panel-title" style="color: #FFF"><i class="fa fa-image"></i> Seleccione la Imágen</h3>
								        <input type="file" id="file">
								    </span>
							    </center>
								<div class="imageBox">
							        <div class="thumbBox"></div>
							        <div class="spinner" style="display: none">
						        		<i class="glyphicon glyphicon-picture" style="font-size:10em;"></i>
							        </div>
							    </div>
							</div>
						</div>
					 <br>
					 	<center>
						    <div class="btn-group"  role="group" aria-label="...">
						        <button type="button" class="btn btn-primary btn-lg" id="btnZoomIn" title="Maximizar Imagen"><i class="fa fa-plus"></i></button>
						        <button type="button" class="btn btn-danger btn-lg" id="btnZoomOut" title="Minimizar Imagen"><i class="fa fa-minus"></i></button>
						        <button type="button" id="btnCrop-0" class="crop btn btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-1" class="crop btn btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-2" class="crop btn btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-3" class="crop btn btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-4" class="crop btn btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-5" class="crop btn btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						    </div>
					    </center>
					    
					</div>


			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>

					
				

				<div class="panel panel-default">
				  <div class="panel-heading" style="background-color: #5bc0de">
				    <h3 class="panel-title" style="color: #FFF">Video del Vehículo</h3>
				  </div>
				  <div class="panel-body">
				  
				  
				  @if($vehiculo->str_video == '')
				  
				  	<center>
				  		<h1 style="font-size: 150px">
				  			<strong>
				  				<i class="fa fa-youtube"></i>
				  			</strong>
				  		</h1>
				  		<h1>
				  			Sin Video
				  		</h1>
				  	</center>
				  	
				  @else

					    	<!-- 16:9 aspect ratio -->
							<div class="embed-responsive embed-responsive-16by9">
						
						  		<?php
						  		
						  			$video = str_replace("&nohtml5=False", "", $vehiculo->str_video);
						  		
						  			$video = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $video);
						  		
						  		?>
						  
						    	<iframe class="embed-responsive-item" src="{{ $video }}"></iframe>
						    	
						    </div>	  

				  @endif
				  
				                                                      
				  					{!! Form::model($vehiculo, ['route' => 'actualizarVideo', 'method'=>'PUT','id' => 'demo-form','enctype'=>'multipart/form-data']) !!}
                                    
                                    <br>
                                    <label style="color: #777">Video de Youtube:</label>
                                    {!! Form::input('text', 'str_video', $vehiculo->str_video, ['id'=>'str_video','class'=> 'form-control' ,'placeholder'=> 'Ej.: https://www.youtube.com/watch?v=YykjpeuMNEd', 'onchange' => 'validarUrl(this.value)']) !!}


										<input type="hidden" id="idPublicacion" name="idPublicacion" readonly="readonly" value="{{$vehiculo->id}}">

									<center>
										{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
									</center>	
								
								{!! Form::close() !!}			  
				  
				  </div>
				</div>

				

                           

                        </div>

                    </div>											  
											  </div>
											  
											  <div class="col-md-6">
                    <div class="row"> <!-- style="background-color: blue" -->
                        <div class="col-md-12">
                        
                        
                        
                        <div class="panel panel-default">
						  <div class="panel-heading" style="background-color: #5bc0de">
						    <h3 class="panel-title" style="color: #FFF">Datos del Vehículo</h3>
						  </div>
						  <div class="panel-body">

                            <div class="tabs vehicle-details-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#vehicle-add-features">Especificaciones</a></li>
                                    <li> <a data-toggle="tab" href="#vehicle-specs">Características</a></li>
                                    
                                    <!--<li> <a data-toggle="tab" href="#vehicle-location">Ubicación</a> </li>-->

                                </ul>
                                <div class="tab-content">

                                    <div id="vehicle-add-features" class="tab-pane fade in active">

										{!! Form::model($vehiculo, ['route' => 'actualizarEspecificaciones', 'method'=>'PUT','id' => 'demo-form','enctype'=>'multipart/form-data']) !!}
										<input type="hidden" id="idPublicacion" name="idPublicacion" readonly="readonly" value="{{$vehiculo->id}}">
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
                                                        <td>
                                                                                                                
															<select id="lng_idnegociable" name="lng_idnegociable" class = "form-control" onchange="">
																<option value="">Seleccione</option>
																
																	@foreach ($respuesta as $res => $valor)
																			<option value="{{$res}}" @if($vehiculo->negociable == $valor) selected="selected" @endif >{{$valor}}</option>
																	@endforeach																
																
															</select>
																														
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Financiamiento</td>
                                                        <td>
                                                        
															<select id="lng_idfinanciamiento" name="lng_idfinanciamiento" class = "form-control" onchange="">
																<option value="">Seleccione</option>
																
																	@foreach ($respuesta as $res => $valor)
																			<option value="{{$res}}" @if($vehiculo->financiamiento == $valor) selected="selected" @endif >{{$valor}}</option>
																	@endforeach																
																
															</select>
															                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chocado</td>
                                                        <td>
                                                        
															<select id="lng_idchocado" name="lng_idchocado" class = "form-control" onchange="">
																<option value="">Seleccione</option>
																
																	@foreach ($respuesta as $res => $valor)
																			<option value="{{$res}}" @if($vehiculo->chocado == $valor) selected="selected" @endif >{{$valor}}</option>
																	@endforeach																
																
															</select>
															                                                       
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Dueños</td>
                                                        <td>
                                                        
															<select id="lng_idunicodueno" name="lng_idunicodueno" class = "form-control" onchange="">
																<option value="">Seleccione</option>
																
																	@for ($x = 1; $x <= 10; $x++)
																			<option value="{{$x}}" @if($vehiculo->unicodueno == $x) selected="selected" @endif >{{$x}}</option>
																	@endfor																
																
															</select>
															
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Motor Reparado</td>
                                                        <td>
                                                                                                                
															<select id="lng_idmotorreparado" name="lng_idmotorreparado" class = "form-control" onchange="">
																<option value="">Seleccione</option>
																
																	@foreach ($respuesta as $res => $valor)
																			<option value="{{$res}}" @if($vehiculo->reparado == $valor) selected="selected" @endif >{{$valor}}</option>
																	@endforeach																
																
															</select>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                    	<td>Precio                                                    	                                                   
                                                    	
								                         	@if ($vehiculo->pais == 'Venezuela' ) 
								                            								                            
																<select id="str_moneda" name="str_moneda" class = "form-control" onchange="">
																	<option value="">Seleccione</option>																	
																	<option value="Dólares"<?php if($vehiculo->str_moneda == 'Dólares'){?>selected="selected"<?php }?>>Dólares</option>																	
																	<option value="Bolívares"<?php if($vehiculo->str_moneda == 'Bolívares'){?>selected="selected"<?php }?>>Bolívares</option>																																															
																</select>						                                        

								                            @else
								                            
									                         	@if ($vehiculo->str_moneda == 'Dólares' ) 
									                            
									                            	$
									                            	
									                            @elseif ($vehiculo->str_moneda == 'Bolívares' )
									                            	
									                            	BsF
									                            	
									                            @elseif ($vehiculo->str_moneda == '' )
									                            
									                            	{!! $vehiculo->str_abreviatura !!}
									                            	                            
									                            @endif 								                            
								                            	                            
								                            @endif                                                     	
                                                    	                                           	
                                                    	</td>
                                                    	
                                                    	<td>
                                                    		@if ($vehiculo->pais == 'Venezuela' ) 
                                                    			&nbsp;
                                                    		@endif

															{!! Form::input('text', 'str_precio_venta', $vehiculo->str_precio_venta, ['class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)','required']) !!}
															<!-- 
																 Form::input('text', 'str_precio_venta', number_format($vehiculo->str_precio_venta, null, ',', '.'), ['class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)','required']) !!}
															-->
                                                    	</td>
                                                    	                                                    
                                                    </tr>
                                                                                                       
                                                </tbody>
                                            </table>
                                            
									<center>
										{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
									</center>	                                            
                                            {!! Form::close() !!}
                                            
                                    </div>

                                    <div id="vehicle-specs" class="tab-pane fade">
                                    
                                    
{!! Form::model($vehiculo, ['route' => 'actualizarCaracteristicas', 'method'=>'PUT','id' => 'demo-form','enctype'=>'multipart/form-data']) !!}
<input type="hidden" id="idPublicacion" name="idPublicacion" readonly="readonly" value="{{$vehiculo->id}}">                                    
                                        <div class="accordion" id="toggleArea">
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Seguridad <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                                                                                                               
                                                @if($vehiculo->lng_idtipo_vehiculo == 153)
                                                
                                                	<?php 
                                                		
                                                		$seguridad = $seguridad; 
                                                		$sonido = $sonido;
                                                		
                                                	?>
                                                	
                                                @elseif($vehiculo->lng_idtipo_vehiculo == 559)
                                                
                                                	<?php 
                                                		
                                                		$seguridad = $seguridad_motocicletas;
                                                		$sonido = $sonido_motocicletas;
                                                	?>
                                                		
                                                @endif                                                
                                                
                                                
                                                <div id="collapseOne" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>                                                                         
                                                                            
							                                                <ul class="optional-features-list">
							                                                         
								                                                <?php $a = 0; ?>								                                               
								                                                
								                                                @foreach ($seguridad as $valor => $descripcion)
								
								                                                    <li class="checkbox">
								                                                        <label>
								                                                                   							                                                                   
										                                                    <?php $flag = 'false'; ?>       
			                                                                              	@foreach ($caracteristicas as $caracteristica)

				                                                                                    @if ($caracteristica->str_tipo == "seguridad_vehiculos")
				
																										@if ($caracteristica->str_descripcion == $descripcion)
																										
					                                                                                        {!! Form::checkbox("lng_idcaracteristica[$a]", $valor,'checked') !!}
												                                                            
												                                                            <?php $flag = 'true'; ?>
												                                                            							                                                    
				                                                                                     	@endif
				
				                                                                                     @endif

			                                                                                @endforeach								                                                                   
								                                                                  
								                                                            @if($flag == 'false')
								                                                            
								                                                            	{!! Form::checkbox("lng_idcaracteristica[$a]", $valor) !!}
	           		                                                                          		           		                                                                          	
	                                                                                     	@endif   
	                                                                                     	          
								                                                        	{!! Form::label('lng_idcaracteristica', $descripcion) !!}	
								                                                         					                                                                        
								                                                         </label>
								                                                    </li>
								
								                                                    <?php $a++; ?>
								                                                @endforeach
							                                                
							                                                </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group panel">￼ 
                                            
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Sonido <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseTwo" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

							                                                <ul class="optional-features-list">
							                                                         							                                                        							                                                         
								                                                <?php $b = $a; ?>
								                                                @foreach ($sonido as $valor => $descripcion)
								
								                                                    <li class="checkbox">
								                                                        <label>
								                                                                   							                                                                   
										                                                    <?php $flag = 'false'; ?>       
			                                                                              	@foreach ($caracteristicas as $caracteristica)
			                                                                                     
			                                                                                     @if ($caracteristica->str_tipo == "sonido_vehiculos")
			
																									@if ($caracteristica->str_descripcion == $descripcion)
																									
				                                                                                        {!! Form::checkbox("lng_idcaracteristica[$b]", $valor,'checked') !!}
											                                                            
											                                                            <?php $flag = 'true'; ?>
											                                                            							                                                    
			                                                                                     	@endif
			
			                                                                                     @endif
			
			                                                                                @endforeach								                                                                   
								                                                                  
								                                                            @if($flag == 'false')
								                                                            
								                                                            	{!! Form::checkbox("lng_idcaracteristica[$b]", $valor) !!}
	           		                                                                          		           		                                                                          	
	                                                                                     	@endif   
	                                                                                     	          
								                                                        	{!! Form::label('lng_idcaracteristica', $descripcion) !!}	
								                                                         					                                                                        
								                                                         </label>
								                                                    </li>
								
								                                                    <?php $b++; ?>
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

							                                                <ul class="optional-features-list">
							                                                        
								                                                <?php $c = $b; ?>
								                                                @foreach ($exterior as $valor => $descripcion)
								
								                                                    <li class="checkbox">
								                                                        <label>
								                                                                   							                                                                   
										                                                    <?php $flag = 'false'; ?>       
			                                                                              	@foreach ($caracteristicas as $caracteristica)
			                                                                                     
			                                                                                     @if ($caracteristica->str_tipo == "exterior_vehiculos")
			
																									@if ($caracteristica->str_descripcion == $descripcion)
																									
				                                                                                        {!! Form::checkbox("lng_idcaracteristica[$c]", $valor,'checked') !!}
											                                                            
											                                                            <?php $flag = 'true'; ?>
											                                                            							                                                    
			                                                                                     	@endif
			
			                                                                                     @endif
			
			                                                                                @endforeach								                                                                   
								                                                                  
								                                                            @if($flag == 'false')
								                                                            
								                                                            	{!! Form::checkbox("lng_idcaracteristica[$c]", $valor) !!}
	           		                                                                          		           		                                                                          	
	                                                                                     	@endif   
	                                                                                     	          
								                                                        	{!! Form::label('lng_idcaracteristica', $descripcion) !!}	
								                                                         					                                                                        
								                                                         </label>
								                                                    </li>
								
								                                                    <?php $c++; ?>
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

							                                                <ul class="optional-features-list">
							                                                    
								                                                <?php $d = $c; ?> 
								                                                @foreach ($confort as $valor => $descripcion)
								
								                                                    <li class="checkbox">
								                                                        <label>
								                                                                   							                                                                   
										                                                    <?php $flag = 'false'; ?>       
			                                                                              	@foreach ($caracteristicas as $caracteristica)
			                                                                                     
			                                                                                     @if ($caracteristica->str_tipo == "confort_vehiculos")
			
																									@if ($caracteristica->str_descripcion == $descripcion)
																									
				                                                                                        {!! Form::checkbox("lng_idcaracteristica[$d]", $valor,'checked') !!}
											                                                            
											                                                            <?php $flag = 'true'; ?>
											                                                            							                                                    
			                                                                                     	@endif
			
			                                                                                     @endif
			
			                                                                                @endforeach								                                                                   
								                                                                  
								                                                            @if($flag == 'false')
								                                                            
								                                                            	{!! Form::checkbox("lng_idcaracteristica[$d]", $valor) !!}
	           		                                                                          		           		                                                                          	
	                                                                                     	@endif   
	                                                                                     	          
								                                                        	{!! Form::label('lng_idcaracteristica', $descripcion) !!}	
								                                                         					                                                                        
								                                                         </label>
								                                                    </li>
								
								                                                    <?php $d++; ?>
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

							                                                <ul class="optional-features-list">
							                                                    
								                                                <?php 
								                                                	
								                                                	if(isset($d)){
								                                                		$e = $d;
								                                                	}else{
								                                                		$e = $b;
								                                                	}
								                                                	
								                                                ?> 
								                                                @foreach ($accesorios_internos as $valor => $descripcion)
								
								                                                    <li class="checkbox">
								                                                        <label>
								                                                                   							                                                                   
										                                                    <?php $flag = 'false'; ?>       
			                                                                              	@foreach ($caracteristicas as $caracteristica)			                                                                                     			                                                                                    			                                                                                  
			                                                                                     
			                                                                                     @if ($caracteristica->str_tipo == "accesoriosInternos_vehiculos")
			
																									@if ($caracteristica->str_descripcion == $descripcion)
																									
				                                                                                        {!! Form::checkbox("lng_idcaracteristica[$e]", $valor,'checked') !!}
											                                                            
											                                                            <?php $flag = 'true'; ?>
											                                                            							                                                    
			                                                                                     	@endif
			
			                                                                                     @endif
			
			                                                                                @endforeach								                                                                   
								                                                                  
								                                                            @if($flag == 'false')
								                                                            
								                                                            	{!! Form::checkbox("lng_idcaracteristica[$e]", $valor) !!}
	           		                                                                          		           		                                                                          	
	                                                                                     	@endif   
	                                                                                     	          
								                                                        	{!! Form::label('lng_idcaracteristica', $descripcion) !!}	
								                                                         					                                                                        
								                                                         </label>
								                                                    </li>
								
								                                                    <?php $e++; ?>
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
                                        
                                        <br>
									<center>
										{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
									</center>	                                            
                                            {!! Form::close() !!}                                        
                                        
                                        <!-- End Toggle --> 
                                    </div>


                                </div>
                            </div>


							
								
						  </div>
						</div>
                        
							<div class="panel panel-default">
							  <div class="panel-heading" style="background-color: #5bc0de">
							    <h3 class="panel-title" style="color: #FFF">Comentarios del Vehículo</h3>
							  </div>
							  <div class="panel-body">

				  				{!! Form::model($vehiculo, ['route' => 'actualizarComentario', 'method'=>'PUT','id' => 'demo-form','enctype'=>'multipart/form-data']) !!}

										<input type="hidden" id="idPublicacion" name="idPublicacion" readonly="readonly" value="{{$vehiculo->id}}">
	
										<textarea id="str_comentario" name="str_comentario" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" data-parsley-minlength-message = "Vamos! Tu comentario solo tiene 20 o menos palabras"  data-parsley-maxlength-message="Tu comentario tiene mas de 500 palabras" data-parsley-validation-threshold="10" rows="8">{!! trim($vehiculo->str_comentario) !!}</textarea>
										<center>
											{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
																																
										</center>
								
								{!! Form::close() !!}	
									
							  </div>
							</div>
                            
                        </div>



                    </div>											  
											  </div>
											</div>
                							
                							        
								</div>
 							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection