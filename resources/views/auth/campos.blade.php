								  <div class="form-group">
								    <label class="col-sm-2 control-label"><i style="color: red">*</i> Usuario</label>								    							
								    <!-- <i id="name_validar" class="fa fa-asterisk" style="color:red;"></i>-->
								    <div class="col-sm-8">
								      
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
											
											  @if(Route::current()->getName() == 'editar')

                                                {!! Form::text('name', null, ['class'=> 'form-control','required','readonly']) !!}

									          @else
									          	{!! Form::text('name', null, ['class'=> 'form-control','required']) !!}
									          @endif  
																						
								        </div>
								
								    </div>
								
								  </div>
							  								  

								  <div class="form-group">
								  
								  	
								  	<label class="col-sm-2 control-label"><i style="color: red">*</i> Nombre</label>	
									<!-- <i id="str_nombre_validar" class="fa fa-asterisk" style="color:red;"></i>-->
								       
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil-square-o"></i></span>
								     								            
								            {!! Form::text('str_nombre', null, ['class'=> 'form-control','required']) !!}
										</div>
										      
								    </div>
								    
								  </div>
								  
								    <div class="form-group">
								  
										<!-- <i id="str_apellido_validar" class="fa fa-asterisk" style="color:red;"></i>-->
								        <label class="col-sm-2 control-label"><i style="color: red">*</i> Apellido</label>	
								    	<div class="col-sm-8">
								
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil-square-o"></i></span>
																						
											{!! Form::text('str_apellido', null, ['class'=> 'form-control','required']) !!}
											
										</div>
										      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								   <!-- <i id="lng_idgenero_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> Género</label>
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-venus-mars"></i></span>
								            	{!! Form::select('lng_idgenero', 
								                	(['' => 'Seleccione'] + $genero), 
								                    null, 
								                    ['class' => 'form-control','required']
								                    ) 
								                !!}
								        </div>        
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    <!-- <i id="dmt_fecha_nacimiento_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> Fecha de Nacimiento</label> 
								    <div class="col-sm-8">
								
										<div class="input-group">
								        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>

											  @if(Route::current()->getName() == 'editar')
											
                                                {!! Form::date('dmt_fecha_nacimiento', null, ['class'=> 'form-control','required','readonly']) !!}

									          @else
									          	{!! Form::date('dmt_fecha_nacimiento', \Carbon\Carbon::now(),['class'=> 'form-control','required']) !!}
									          @endif  

								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
									<!-- <i id="str_ididentificacion_validar" class="fa fa-asterisk" style="color:red;"></i>-->
								    <label class="col-sm-2 control-label"><i style="color: red">*</i> Cédula</label>  
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-secret"></i></span>
								          
								          @if(Route::current()->getName() == 'editar')
								          	{!! Form::text('str_ididentificacion', null, ['class'=> 'form-control','required','readonly']) !!}
								          @else
								          	{!! Form::text('str_ididentificacion', null, ['class'=> 'form-control','required']) !!}
								          @endif

								       </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								   <!-- <i id="lng_idpais_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> País</label>
								    <div class="col-sm-8">
								
										<div class="input-group">
								        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-flag"></i></span>
								        	{!! Form::select('lng_idpais', 
								            	(['' => 'Seleccione'] + $paises), 
								                null, 
								                ['class' => 'form-control','required']
								                ) 
								            !!}
								        </div>      
								    </div>
								    
								  </div>
								
								  <div class="form-group">
								  
								    <!-- <i id="str_telefono_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> Teléfono</label>  
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone-square"></i></span>
								        	
								            	
								        
								        {!! Form::text('str_telefono', null, ['id'=>'str_telefono','class'=> 'form-control','placeholder'=>'Ej.: 02129998877', 'data-parsley-minlength'=>'11' ,'onkeypress'=>'return isNumber(event)','required']) !!}
								        
								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    <!-- <i id="email_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> Correo Electrónico</label>
								    <div class="col-sm-8">
								                                
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
								            
								            
								            {!! Form::text('email', null, ['class'=> 'form-control','id'=>'email' ,'data-parsley-trigger'=>'change','placeholder'=>'Ej.: pepe@troovami.com','required','onchange'=>'validarEmail(this.value,this.name)']) !!}
								            
								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    {!! Form::label('str_twitter', 'Twitter',['class' => 'col-sm-2 control-label']) !!}
								    <div class="col-sm-8">
								                                        
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-twitter"></i></span>
								            {!! Form::text('str_twitter', null, ['class'=> 'form-control','placeholder'=>'Ej.: @troovami']) !!}
								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
									{!! Form::label('str_facebook', 'Facebook',['class' => 'col-sm-2 control-label']) !!}	    
								    <div class="col-sm-8">
								                                        
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-facebook"></i></span>
								        	{!! Form::text('str_facebook', null, ['class'=> 'form-control','placeholder'=>'Ej.: https://www.facebook.com/troovami']) !!}
								        	
								        	
								        	
								        </div>      
								    </div>
								    
								  </div> 
								  
								  <div class="form-group">
								  
								    {!! Form::label('str_instagram', 'Instagram',['class' => 'col-sm-2 control-label']) !!}
								    <div class="col-sm-8">
								                                        
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-instagram"></i></span>
								            {!! Form::text('str_instagram', null, ['class'=> 'form-control','placeholder'=>'Ej.: @troovami']) !!}
								        </div>      
								    </div>
								    
								  </div>     
								 