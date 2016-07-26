	@foreach ($modelos as $modelo)
		<li class="list-group-item"><span class="badge">{{ $modelo->total }}</span>
			
			<a href="#" onclick="filtro_por_modelo2({{ $modelo->lng_idmodelo }});">
				<img class="" src="data:image/jpeg;base64,{{ $modelo->blb_img }}" style="width:20px" /> 
				
                                        	@if( strlen(".$modelo->str_modelo.") < 20 ) 
                                        	
                                        		{{ $modelo->str_modelo }}
                                        		
                                        	@else 
                                        		{!! substr($modelo->str_modelo,0,20)."..." !!}
                                        		
                                        	@endif 
			</a>
		</li>
	@endforeach