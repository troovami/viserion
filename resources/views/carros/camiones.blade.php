            <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idfrenado_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idfrenado', '* Sistema de Frenado') !!}
                    {!! Form::select('lng_idfrenado', 
                                        (['' => 'Seleccione'] + $frenado), 
                                        null, 
                                        ['class' => 'form-control', 'onchange' => 'validar(this.value,this.name);']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="int_lastre_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('int_lastre', '* Capacidad de Lastre (Kg)') !!}
                    {!! Form::input('text', 'int_lastre', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="dbl_neumatico_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('dbl_neumatico', '* Medida del Neumatico') !!}
                    {!! Form::input('text', 'dbl_neumatico', '', ['class'=> 'form-control','maxlength' => '15' ,'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="int_potenciamax_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('int_potenciamax', '* Potencia Máxima') !!}
                    {!! Form::input('text', 'int_potenciamax', '', ['class'=> 'form-control','maxlength' => '15' ,'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
        
                </div>