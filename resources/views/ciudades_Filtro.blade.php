
@foreach ($ciudades as $ciudad)
	<li class="list-group-item"><span class="badge">{{ $ciudad->total }}</span>
		<a href="#" onclick="filtro_por_ciudad2(<?=$ciudad->id;?>);">
			<img class="" src="data:image/jpeg;base64,{{ $ciudad->bandera }}" style="width:20px" /> {{ $ciudad->str_ciudad }}
		</a>
	</li>

@endforeach