                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-newspaper-o"></i>
                                        Publicar
                                    </h3>

                                    <div class="lighter">
                                        <p style="color: #777">
                                            Casi finalizamos...
                                        </p>
                                    </div>

                                    <div class="form-group ">

                                        <!-- <i id="lng_idpais_validar" class="fa fa-asterisk" style="color:red;"></i>-->

                                        <label  style="color: #777"><i style="color: red">*</i> País</label>                                        
                                        
                                        {!! Form::select('lng_idpais', 
                                                            (['' => 'Seleccione'] + $paises), 
                                                            null, 
                                                            ['class' => 'form-control','id'=>'lng_idpais','onchange' => 'soloEnVenezuela(this.name);buscarCiudadPorPais(this.value)','required']
                                                        ) 
                                        !!} 

                                    </div>

                                    <div class="form-group">
                                    
                                    	<!-- <i id="lng_idciudad_validar" class="fa fa-asterisk" style="color:red;"></i>-->
                                    	<label  style="color: #777"><i style="color: red">*</i> Ciudad</label>    
                                    	
                                        {!! Form::input('hidden', 'lng_idciudad', '',['id' =>'lng_idciudad']) !!}
                                        
                                        			{!! Form::input('text', 'buscador', '', 
														['class'=> 'form-control', 'id' => 'buscador', 'maxlength' => '20',
															'onkeyup'=>'buscarCiudadPorLetra(this.value)','onclick'=>'verCiudades()','required'=>'']) 
													!!}	
                                        
										<div id="dependiente2"></div>
										
                                    </div>
                                    
                                    <div class="form-group ">
                                        
                                        <!-- <i id="str_precio_venta_validar" class="fa fa-asterisk" style="color:red;"></i>-->
                                        <label id="str_precio_venta" style="color: #777"><i style="color: red">*</i> Precio</label>
                                        {!! Form::input('text', 'str_precio_venta', '', ['class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)','required']) !!}

                                    </div>

                                    <div class="form-group ">

                                        <div id="monedas_validar">
                                            <!-- <i id="str_moneda_validar" class="fa fa-asterisk" style="color:red;"></i>-->
	                                        {!! Form::label('str_moneda', 'Moneda (Sólo para Venezuela)',(['style'=> 'color:#777'])) !!}
	
	                                        {!!
	
	                                         	Form::select('str_moneda', array('' => 'Seleccione', 'Bolívares' => 'Bolívares', 'Dólares' => 'Dólares'), 'S',['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
	                                        
	                                        !!} 
										</div>
										
                                    </div>
                                                                        
                                    <div class="form-group">
                                    	
                                    	<h3 style="color: #777">Comentarios sobre tu vehículo</h3>
	                                    <div class="lighter">
	                                        <p style="color: #777">Cuentanos tu experiencia con este vehículo (Mínimo 20 carateres y máximo 500 caracteres)</p>
	                                    </div>
                                    
                                       
 <textarea id="str_comentario" name="str_comentario" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" data-parsley-minlength-message = "Vamos! Tu comentario solo tiene 20 o menos palabras"  data-parsley-maxlength-message="Tu comentario tiene mas de 500 palabras" data-parsley-validation-threshold="10" rows="5"></textarea>                                    
                                    </div>

                                                                            