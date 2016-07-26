                                            	@foreach ($colors as $color)
                                                	<li class="list-group-item"><span class="badge">{{ $color->total }}</span>
                                                		<a href="#" onclick="filtros('color',<?=$color->lng_idcolor;?>);">
                                                			{{ $color->str_descripcion }}
                                                		</a>
                                                	</li>
                                                
    											@endforeach