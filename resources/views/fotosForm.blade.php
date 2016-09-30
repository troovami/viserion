                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-image"></i>
                                        Fotos
                                    </h3>
                                        <div class="lighter"><p style="color: #777">Añade fotos de tu vehículo</p></div>

			
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="subirImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Editar Imágen</h4>
			      </div>
			      <div class="modal-body">
				
					    <div class="row">
						    <div class="col-md-12">						    
					    		<center>
						    		<span class="btn-default btn-lg btn-block btn-file" style="background-color: #5bc0de; width: 650px;">							        
								        <h3 class="panel-title" style="color: #FFF; cursor: pointer;"><i class="fa fa-image"></i> Seleccione la Imágen</h3>
								        <input type="file" id="fileImage" name="fileImage">
								    </span>
							    </center>
							    
								<div class="imageBoxImage">
							        <div class="thumbBoxImage"></div>
							        <div class="spinnerImage" style="display: none">
						        		<i class="glyphicon glyphicon-picture" style="font-size:10em;"></i>
							        </div>
							    </div>
							</div>
						</div>
					 
					 <br>
					 	<center>
						    <div class="btn-group"  role="group" aria-label="...">
						        <button type="button" class="btn-primary btn-lg" id="btnZoomInImage" title="Maximizar Imagen"><i class="fa fa-plus"></i></button>
						        <button type="button" class="btn-danger btn-lg" id="btnZoomOutImage" title="Minimizar Imagen"><i class="fa fa-minus"></i></button>
						        <button type="button" id="btnCrop-0" class="crop btn-success btn-lg" data-dismiss="modal">Aceptar</button>

						    </div>
					    </center>
					    
				


			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>

			
			
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="binarioImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Editar Imágen</h4>
			      </div>
			      <div class="modal-body">
				
					    <div class="row">
						    <div class="col-md-12">						    
					    		<center>
						    		<span class="btn-default btn-lg btn-block btn-file" style="background-color: #5bc0de; width: 650px;">							        
								        <h3 class="panel-title" style="color: #FFF; cursor: pointer;"><i class="fa fa-image"></i> Seleccione la Imágen</h3>
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
						        <button type="button" class="btn-primary btn-lg" id="btnZoomIn" title="Maximizar Imagen"><i class="fa fa-plus"></i></button>
						        <button type="button" class="btn-danger btn-lg" id="btnZoomOut" title="Minimizar Imagen"><i class="fa fa-minus"></i></button>
						       
						        <button type="button" id="btnCrop-1" class="crop btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-2" class="crop btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-3" class="crop btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-4" class="crop btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						        <button type="button" id="btnCrop-5" class="crop btn-success btn-lg" data-dismiss="modal">Aceptar</button>
						    </div>
					    </center>
					    
				


			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>

<div class="col-md-12">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
		        	<div class="panel panel-default">
					 	<div class="panel-heading" style="background-color: #5bc0de"><h3 class="panel-title" style="color: #FFF"><i class="fa fa-image"></i> Imágen Lateral</h3></div>
					 	{!! Form::input('hidden', 'principal0', '1',['id'=> 'principal0']) !!}
					 	{!! Form::input('hidden', 'principal1', '2',['id'=> 'principal1']) !!}
					 	{!! Form::input('hidden', 'principal2', '2',['id'=> 'principal2']) !!}
					 	{!! Form::input('hidden', 'principal3', '2',['id'=> 'principal3']) !!}
					 	{!! Form::input('hidden', 'principal4', '2',['id'=> 'principal4']) !!}
					 	{!! Form::input('hidden', 'principal5', '2',['id'=> 'principal5']) !!}
					 	<div class="panel-body cropped-0" style="cursor: pointer;" data-toggle="modal" data-target="#subirImagen" onclick="botonCropVisible('0')">
					    	<p class="text-center">
					    		<i class="fa fa-image"></i>
					    	</p>
							<input required="required" readonly="readonly" placeholder="* Click aquí" style="border: 0; text-align: center; cursor: pointer;" type="text" name="blb_img0">
					  	</div>
					</div>                       
		        </div>
		        <!-- img-0 -->
		        <div class="col-md-4">
		        	<div class="panel panel-default">
					 	<div class="panel-heading" style="background-color: #5bc0de"><h3 class="panel-title" style="color: #FFF"><i class="fa fa-image"></i> Imágen Trasera</h3></div>
					 	<div class="panel-body cropped-1" style="cursor: pointer;" data-toggle="modal" data-target="#binarioImagen" onclick="botonCropVisible('1')">
					    	<p class="text-center">
					    		<i class="fa fa-image"></i>
					    	</p>
					    	<input required="required" readonly="readonly" placeholder="* Clic aquí" style="border: 0; text-align: center; cursor: pointer;" type="text" name="blb_img1">
					  	</div>
					</div>                       
		        </div>
		        <!-- img-1 -->
		        <div class="col-md-4">
		        	<div class="panel panel-default">
					 	<div class="panel-heading" style="background-color: #5bc0de"><h3 class="panel-title" style="color: #FFF"><i class="fa fa-image"></i> Imágen Frontal</h3></div>
					 	<div class="panel-body cropped-2" style="cursor: pointer;" data-toggle="modal" data-target="#binarioImagen" onclick="botonCropVisible('2')">
					    	<p class="text-center">
					    		<i class="fa fa-image"></i>
					    	</p>
					    	<input required="required" readonly="readonly" placeholder="* Click aquí" style="border: 0; text-align: center; cursor: pointer;" type="text" name="blb_img2">
					  	</div>
					</div>                       
		        </div>
		        <!-- img-2 -->
			</div><!-- .col-md-12 -->
			<div class="col-md-12">
				<div class="col-md-4">
		        	<div class="panel panel-default">
					 	<div class="panel-heading" style="background-color: #5bc0de"><h3 class="panel-title" style="color: #FFF"><i class="fa fa-image"></i> Imágen interior</h3></div>
					 	<div class="panel-body cropped-3" style="cursor: pointer;" data-toggle="modal" data-target="#binarioImagen" onclick="botonCropVisible('3')">
					    	<p class="text-center">
					    		<i class="fa fa-image"></i>
					    	</p>
					    	<input required="required" readonly="readonly" placeholder="* Click aquí" style="border: 0; text-align: center; cursor: pointer;" type="text" name="blb_img3">
					  	</div>
					</div>                       
		        </div>
		        <!-- img-3 -->
		        <div class="col-md-4">
		        	<div class="panel panel-default">
					 	<div class="panel-heading" style="background-color: #5bc0de"><h3 class="panel-title" style="color: #FFF"><i class="fa fa-image"></i> Imágen Motor</h3></div>
					 	<div class="panel-body cropped-4" style="cursor: pointer;" data-toggle="modal" data-target="#binarioImagen" onclick="botonCropVisible('4')">
					    	<p class="text-center">
					    		<i class="fa fa-image"></i>
					    	</p>
					    	<input required="required" readonly="readonly" placeholder="* Click aquí" style="border: 0; text-align: center; cursor: pointer;" type="text" name="blb_img4">
					  	</div>
					</div>                       
		        </div>
		        <!-- img-4 -->
		        <div class="col-md-4">
		        	<div class="panel panel-default">
					 	<div class="panel-heading" style="background-color: #5bc0de"><h3 class="panel-title" style="color: #FFF"><i class="fa fa-image"></i> Imágen Kilometraje</h3></div>
					 	<div class="panel-body cropped-5" style="cursor: pointer;" data-toggle="modal" data-target="#binarioImagen" onclick="botonCropVisible('5')">
					    	<p class="text-center">
					    		<i class="fa fa-image"></i>
					    	</p>
					    	<input required="required" readonly="readonly" placeholder="* Click aquí" style="border: 0; text-align: center; cursor: pointer;" type="text" name="blb_img5">
					  	</div>
					</div>                       
		        </div>
		        <!-- img-5 -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
        

    </div>

                                    <hr class="fw">
                                    <h3 style="color: #777">Añade un video de tu carro (link de youtube)</h3>
                                    <div class="lighter">
                                        <p style="color: #777">Se creativo, muestranos tu vehículo con un original video (Opcional)</p>
                                    </div>

                                    {!! Form::input('text', 'str_video', '', ['id'=>'str_video','class'=> 'form-control', 'placeholder'=> 'Youtube/Video URL', 'onchange' => 'validarUrl(this.value)']) !!}

                                    
