                <div class="form-group col-md-4">
                    
                      <!-- <i id="int_carga_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('int_carga', '* Capacidad de Carga (Kg)') !!}
                    {!! Form::input('text', 'int_carga', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
        
                </div>
