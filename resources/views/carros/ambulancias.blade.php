<div class="form-group col-md-4">
                                                            
 <!-- <i id="lng_idequipo_medico_validar" class="fa fa-asterisk" style="color:red;"></i> -->
 	{!! Form::label('lng_idequipo_medico', '* Equipo Médico') !!}<br>
                                                            
	{!! Form::select('lng_idequipo_medico', 
		(['' => 'Seleccione'] + $respuesta), 
		null, 
		['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
		) 
	!!}                                                               

</div>