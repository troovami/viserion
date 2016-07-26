<span class="vehicle-cost">

	@if ($ultimos->str_moneda == 'Dólares' ) 
	                            
		$
	
	@elseif ($ultimos->str_moneda == 'Bolívares' )
									                            	
		BsF
									                            								                            
	@endif
									                            
	
									                            									                           
	@if ($ultimos->str_moneda == '' )
									                            
		{!! $ultimos->str_abreviatura !!}
									                            	                            
	@endif
	
	{!! number_format($ultimos->str_precio_venta, null, ',', '.') !!}
	                                                        
</span>	