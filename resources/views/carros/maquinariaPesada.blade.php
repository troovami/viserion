                 <div class="form-group col-md-4">
                    
                    {!! Form::label('str_tambor', 'Ancho del Tambor') !!}
                    {!! Form::input('text', 'str_tambor', '', ['class'=> 'form-control','maxlength' => '10' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>
            
            
            <div class="form-group col-md-4">
                    
                    {!! Form::label('int_peso', 'Peso (Kg)') !!}
                    {!! Form::input('text', 'int_peso', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_potenciabruta', 'Potencia Bruta') !!}
                    {!! Form::input('text', 'int_potenciabruta', '', ['class'=> 'form-control','maxlength' => '10','onkeypress'=>'return isNumber(event)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('lng_idlibreaceite', 'Libre de Aceite') !!}
					{!! Form::select('lng_idlibreaceite', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control']
						) 
					!!}
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_alto', 'Alto (mts)') !!}
                    {!! Form::input('text', 'int_alto', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_ancho', 'Ancho (mts)') !!}
                    {!! Form::input('text', 'int_ancho', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>
                              
                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_largo', 'Largo (mts)') !!}
                    {!! Form::input('text', 'int_largo', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>
                
                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_carga', 'Capacidad de Carga (Kg)') !!}
                    {!! Form::input('text', 'int_carga', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>
                
                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_tolva', 'Tolva de Material (mts)') !!}
                    {!! Form::input('text', 'int_tolva', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_produccion', 'Producción (mts/hs)') !!}
                    {!! Form::input('text', 'int_produccion', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>
                
            	<div class="form-group col-md-4">
                    
                    {!! Form::label('lng_idenfriamiento', 'Sistema de Enfriamiento') !!}
                    {!! Form::select('lng_idenfriamiento', 
                                        (['' => 'Seleccione'] + $enfriamiento), 
                                        null, 
                                        ['class' => 'form-control', 'onchange' => 'validar(this.value,this.name);formularioDinamico()']
                                    ) 
                    !!} 

                </div>
                
                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_horasuso', 'Horas de Uso') !!}
                    {!! Form::input('text', 'int_horasuso', '', ['class'=> 'form-control','maxlength' => '10' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>
                
                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_velocidades', 'N° de Velocidades') !!}
                    {!! Form::selectRange('int_velocidades', 1, 20, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                </div>
                
                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_potencia', 'Potencia') !!}
                    {!! Form::input('text', 'int_potencia', '', ['class'=> 'form-control','maxlength' => '10' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    {!! Form::label('int_levantamiento', 'Levantamiento (mts)') !!}
                    {!! Form::input('text', 'int_levantamiento', '', ['class'=> 'form-control','maxlength' => '10' ,'onkeypress'=>'return isNumber(event)']) !!}
        
                </div>                                                                                                                                                         