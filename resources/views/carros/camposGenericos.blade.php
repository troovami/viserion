<h3 style="color: #777">
<i class="fa fa-pencil-square-o"></i>
Descripción
</h3>

<div class="lighter">
    <p style="color: #777"> ¿Cómo es tu Vehículo?</p>
    <p style="color: red">(*) Campos obligatorios</p>
    
    
    
    
</div>

            <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Clasificación</label>	
                    {!! Form::select('lng_idsubtipo_vehiculo', 
                                        (['' => 'Seleccione'] + $clasificacion), 
                                        null, 
                                        ['class' => 'form-control', 'id' =>'lng_idsubtipo_vehiculo', 'onchange' => 'dependienteMarcas(this.value,153);formularioDinamico()','required'=>'']
                                    ) 
                    !!} 

                </div>  

                <div class="form-group col-md-4">
                                        
                     <label style="color: #777"><i style="color: red">*</i> Marca</label>
                    
                    <div id="dependienteMarcas">
	                    {!! Form::select('lng_idmarca', 
	                                        (['' => 'Seleccione'] + $marcasCarros ), 
	                                        null, 
	                                        ['class' => 'form-control','id'=>'lng_idmarca','onchange'=>'dependienteModelos(this.value,153)','required'=>'']
	                                    ) 
	                    !!}
					</div>
					
                </div>                      

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Modelo</label>

                    <div id="dependienteModelos">

	                    {!! Form::select('lng_idmodelo', 
	                                        (['' => 'Seleccione'] + $modelosCarros), 
	                                        null, 
	                                        ['id'=>'lng_idmodelo','id'=>'lng_idmodelo','class' => 'form-control','onchange'=>'','required'=>'']
	                                    ) 
	                    !!} 

                    </div>
                    
                </div>

                <div class="form-group col-md-4">

                   <label style="color: #777"><i style="color: red">*</i> Placas</label>                   
                   
                   	<div id="verificarPlaca">
                    	{!! Form::input('text', 'str_placa', '', ['id' => 'str_placa', 'class'=> 'form-control','maxlength'=> '10', 'onchange' => 'verificarPlaca(this.value)', 'required']) !!}                                               		
                	</div>
                
                </div>

                <div class="form-group col-md-4">

                     <label id="int_cantidad_puertas" style="color: #777"><i style="color: red">*</i> Cantidad de Puertas</label>
                                                                 
                    {!! Form::select('int_cantidad_puertas', 
                                        (['' => 'Seleccione'] + range(2,5)), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!}                         
                    
                </div>
                
				<div class="form-group col-md-4">


				<label style="color: #777"><i style="color: red">*</i> Capacidad de Personas</label>
										                                       
                    {!! Form::select('int_pasajeros', 
                                        (['' => 'Seleccione'] + range(2,120)), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!}                                                                 
				
				</div>                

                <div class="form-group col-md-4">
                   
                     <label style="color: #777"><i style="color: red">*</i> Color</label>

                    {!! Form::select('lng_idcolor', 
                                        (['' => 'Seleccione'] + $colores), 
                                        null, 
                                        ['id'=> 'lng_idcolor','class' => 'form-control','required']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                   
                   <label style="color: #777"><i style="color: red">*</i> Dirección</label>
                    {!! Form::select('lng_iddireccion', 
                                        (['' => 'Seleccione'] + $direccion), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">

                    <label style="color: #777"><i style="color: red">*</i> Estereo</label>
                    {!! Form::select('lng_idestereo', 
                                        (['' => 'Seleccione'] + $estereo), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 

                </div>

            <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Transmisión</label>
                    {!! Form::select('lng_idtransmision', 
                                        (['' => 'Seleccione'] + $transmision), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Tapizado</label>
                    {!! Form::select('lng_idtapizado', 
                                        (['' => 'Seleccione'] + $tapizado), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 

                </div> 

                <div class="form-group col-md-4">

                    <label style="color: #777"><i style="color: red">*</i> Vidrios</label>
                    {!! Form::select('lng_idvidrios', 
                                        (['' => 'Seleccione'] + $vidrios), 
                                        null, 
                                        ['class' => 'form-control', 'required']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">

                    <label style="color: #777"><i style="color: red">*</i> Tracción</label>
                    {!! Form::select('lng_idtraccion', 
                                        (['' => 'Seleccione'] + $traccion), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <label style="color: #777"><i style="color: red">*</i> Combustible</label>
                    {!! Form::select('lng_idcombustible', 
                                        (['' => 'Seleccione'] + $combustible), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 

                </div>                                                                                                                                                                                                                                                                            

                <div class="form-group col-md-4">
                    
                   <label style="color: #777"><i style="color: red">*</i> Año</label>
                    <?php $ano = date('Y')?>                   	
						
                    {!! Form::select('int_ano', 
                                        (['' => 'Seleccione'] + range($ano,1950)), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 
										
                </div>

                <div class="form-group col-md-4">

                    <label style="color: #777"><i style="color: red">*</i> Kilometraje</label>
                    {!! Form::input('text', 'str_recorrido', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)','required']) !!}
        
                </div>
               
                <div class="form-group col-md-4">

                    <label style="color: #777"> N° de Cilindros</label>
                    {!! Form::selectRange('int_cilindros', 1, 16, null, ['class' => 'form-control']) !!} 

                </div>

                <div class="form-group col-md-4">

                        <label style="color: #777"><i style="color: red">*</i> Cilindrada</label>
                        <div id="dependienteCilindrada">   
                            {!! Form::select('lng_idcilindrada', 
                                (['' => 'Seleccione'] + $cilindrada), 
                                    null, 
                                    ['class' => 'form-control','required']
                                ) 
                            !!}                                                               
                        </div>
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('str_version', 'Versión',(['style' => 'color: #777'])) !!}
                    {!! Form::input('text', 'str_version', '', ['class'=> 'form-control']) !!}

                </div> 

			    <div class="form-group col-md-4">
			
			       <label style="color: #777"><i style="color: red">*</i> Chocado</label>
			
					{!! Form::select('lng_idchocado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','required']
						) 
					!!}
			
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <label style="color: #777"><i style="color: red">*</i> Negociable</label>

			        
			        {!! Form::select('lng_idnegociable', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			            	['class' => 'form-control','required']
			            ) 
					!!} 
			
			  </div>
			
			  <div class="form-group col-md-4">

			         <label style="color: #777"><i style="color: red">*</i> Financiamiento</label>
			
			        {!! Form::select('lng_idfinanciamiento', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			                ['class' => 'form-control','required']
			            ) 
					!!} 
			
			    </div>
			
			  <div class="form-group col-md-4">
			        			
			        <label style="color: #777"><i style="color: red">*</i> Dueños</label>
			
                    {!! Form::select('lng_idunicodueno', 
                                        (['' => 'Seleccione'] + range(1,10)), 
                                        null, 
                                        ['class' => 'form-control','required']
                                    ) 
                    !!} 			
						        
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <label style="color: #777"><i style="color: red">*</i> Motor Reparado</label>
			
					{!! Form::select('lng_idmotorreparado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','required']
						) 
			        !!} 
			
			    </div>