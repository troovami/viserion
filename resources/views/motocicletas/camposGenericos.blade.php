<h3 style="color: #777">
<i class="fa fa-pencil-square-o"></i>
Descripción
</h3>

<div class="lighter">
    <p>¿Cómo es tu Vehículo?</p>
    <p style="color: red">(*) Campos obligatorios</p>
</div>

            <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Clasificación</label>
                    {!! Form::select('lng_idsubtipo_vehiculo', 
                                        (['' => 'Seleccione'] + $clasificacion), 
                                        null, 
                                        ['class' => 'form-control', 'id' =>'lng_idsubtipo_vehiculo', 'onchange' => 'dependienteMarcasMotos(this.value,559);','required'=>'']
                                    ) 
                    !!} 

                </div>  

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Marca</label>
                    
                    <div id="dependienteMarcas">
	                    {!! Form::select('lng_idmarca', 
	                                        (['' => 'Seleccione'] + $marcasMotos), 
	                                        null, 
	                                        ['class' => 'form-control','id'=>'lng_idmarca','onchange'=>'dependienteModelosMotos(this.value,559)','required'=>'']
	                                    ) 
	                    !!}
					</div>
					
                </div>                      

                <div class="form-group col-md-4">

                     <label style="color: #777"><i style="color: red">*</i> Modelo</label>

                    <div id="dependienteModelos">

	                    {!! Form::select('lng_idmodelo', 
	                                        (['' => 'Seleccione'] + $modelosMotos), 
	                                        null, 
	                                        ['id'=>'lng_idmodelo','id'=>'lng_idmodelo','class' => 'form-control','onchange'=>'','required'=>'']
	                                    ) 
	                    !!} 

                    </div>
                    
                </div>

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Placas</label>
                    {!! Form::input('text', 'str_placa', '', ['id' => 'str_placa', 'class'=> 'form-control','maxlength'=> '10', 'onchange' => 'verificarPlaca(this.value)','required'=>'']) !!}
                
                </div>

				<div class="form-group col-md-4">
				
                    {!! Form::label('lng_idrecibomoto', '* Recibo Moto') !!}

                    {!! Form::select('lng_idrecibomoto', 
                                        (['' => 'Seleccione'] + $respuesta), 
                                        null, 
                                        ['id'=> 'lng_idcolor','class' => 'form-control','onchange'=>'','required'=>'']
                                    ) 
                    !!} 					
				
				</div>                

                <div class="form-group col-md-4">

                    <label style="color: #777"><i style="color: red">*</i> Color</label>

                    {!! Form::select('lng_idcolor', 
                                        (['' => 'Seleccione'] + $colores), 
                                        null, 
                                        ['id'=> 'lng_idcolor','class' => 'form-control','onchange'=>'','required'=>'']
                                    ) 
                    !!} 

                </div>

            <div class="form-group col-md-4">

                    <label style="color: #777"><i style="color: red">*</i> Frenos</label>
                    {!! Form::select('lng_idfrenado', 
                                        (['' => 'Seleccione'] + $frenado), 
                                        null, 
                                        ['class' => 'form-control','onchange' => '','required'=>'']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Tipo de Motor</label>

                    {!! Form::select('lng_idtipomotor', 
                                        (['' => 'Seleccione'] + $tipomotor), 
                                        null, 
                                        ['class' => 'form-control','onchange' => '','required'=>'']
                                    ) 
                    !!} 

                </div> 

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Sistema de Arranque</label>
                    {!! Form::select('lng_idarranque', 
                                        (['' => 'Seleccione'] + $arranque), 
                                        null, 
                                        ['class' => 'form-control','onchange' => '','required'=>'']
                                    ) 
                    !!} 

                </div>                                                                                                                                                                                                                                                                          

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Año</label>
                    <?php $ano = date('Y')?>
                    
    					<select id='int_ano' name='int_ano' class='form-control' onchange='' required=''>            
	                        <option value=''>Seleccione</option>
								@for ($i = $ano; $i >= 1950; $i--)
								
								   <option value='{{ $i }}'>{{ $i }}</option>
								    								    
								@endfor	                        						
																			               						
						</select>
					
                </div>

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Kilometraje</label>
                    {!! Form::input('text', 'str_recorrido', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)','onchange' => '','required'=>'']) !!}
        
                </div>

                <div class="form-group col-md-4">

                        <label style="color: #777"><i style="color: red">*</i> Cilindrada</label>
                        <div id="dependienteCilindrada">   
                            {!! Form::select('lng_idcilindrada', 
                                (['' => 'Seleccione'] + $cilindrada), 
                                    null, 
                                    ['class' => 'form-control','onchange' => '','required'=>'']
                                ) 
                            !!}                                                               
                        </div>
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('str_version', 'Versión') !!}
                    {!! Form::input('text', 'str_version', '', ['class'=> 'form-control','onchange' => '']) !!}

                </div> 

			    <div class="form-group col-md-4">
			        			
			       <label style="color: #777"><i style="color: red">*</i> Chocado</label>
			
					{!! Form::select('lng_idchocado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => '','required'=>'']
						) 
					!!}
			
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <label style="color: #777"><i style="color: red">*</i> Negociable</label>
			        
			        {!! Form::select('lng_idnegociable', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			            	['class' => 'form-control','onchange' => '','required'=>'']
			            ) 
					!!} 
			
			  </div>
			
			  <div class="form-group col-md-4">

			        <label style="color: #777"><i style="color: red">*</i> Financiamiento</label>
			
			        {!! Form::select('lng_idfinanciamiento', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			                ['class' => 'form-control','onchange' => '','required'=>'']
			            ) 
					!!} 
			
			    </div>
			
			  <div class="form-group col-md-4">
			        			
			        <label style="color: #777"><i style="color: red">*</i> Dueños</label>												
                    
    					<select id='lng_idunicodueno' name='lng_idunicodueno' class='form-control' onchange='' required=''>            
	                        <option value=''>Seleccione</option>
								
								   <option value='1'>1</option>
								   <option value='2'>2</option>
								   <option value='3'>3</option>
								   <option value='4'>4</option>
								   <option value='5'>5</option>
								   <option value='6'>6</option>
								   <option value='7'>7</option>
								   <option value='8'>8</option>
								   <option value='9'>9</option>
								   <option value='10'>10</option>								   								   
								   																               					
						</select>														       
			    </div>
			
			  <div class="form-group col-md-4">

			        <label style="color: #777"><i style="color: red">*</i> Motor Reparado</label>
			
					{!! Form::select('lng_idmotorreparado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => '','required'=>'']
						) 
			        !!} 
			
			    </div>