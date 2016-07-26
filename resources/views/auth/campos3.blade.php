								  <div class="form-group">
								  
								    <!-- <i id="password_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> Clave</label>   
								    <div class="col-sm-8">
										             
								        <div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
								            {!! Form::password('password', ['class'=> 'form-control','required']) !!}
								        </div>      
								    </div>
								    
								  </div>  
								        
								  <div class="form-group">
								  
								    <!-- <i id="password_confirmation_validar" class="fa fa-asterisk" style="color:red;"></i>-->
									<label class="col-sm-2 control-label"><i style="color: red">*</i> Confirmar</label>
								    <div class="col-sm-8">
								                                
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
								            	{!! Form::password('password_confirmation', ['class'=> 'form-control','required']) !!}
								        </div>       
								    </div>
								    
								  </div>