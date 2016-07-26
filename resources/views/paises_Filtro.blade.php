@foreach ($paises as $pais)                                             
    <li class="list-group-item"><span class="badge">{{ $pais->total}}</span>
        
        <a href="#" onclick="filtro_por_pais2({{ $pais->id }})">
            <img class="" src="data:image/jpeg;base64,{{ $pais->bandera }}" style="width:20px" /> {{ $pais->str_paises}}
        </a>
        
    </li>                   
@endforeach