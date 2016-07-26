                                            	@foreach ($marcas as $marca)
                                                	<li class="list-group-item"><span class="badge">{{ $marca->total }} </span>
                                                		<a href="#" onclick="filtro_por_marca2({{ $marca->id}})">
                                                			<img class="" src="data:image/jpeg;base64,{{ $marca->logo }}" style="width:20px" /> {{ $marca->str_marca }}
                                                		</a>
                                                	</li>                                                	
    											@endforeach