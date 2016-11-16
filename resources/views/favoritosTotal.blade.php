													  
    									@if (isset($totalFavoritos_usuario))
									
		                                    @foreach ($totalFavoritos_usuario as $totales_fav)
											    {{ $totales_fav->total }} 
											@endforeach
											
										@else
											0										
										@endif
														  