<span class="vehicle-cost">

	@if ($similares->str_moneda == 'Dólares' ) 
	                            
		$
	
	@elseif ($similares->str_moneda == 'Bolívares' )
									                            	
		BsF
									                            								                            
	@endif
									                            
		
									                            									                           
	@if ($similares->str_moneda == '' )
									                            
		{!! $similares->str_abreviatura !!}
									                            	                            
	@endif
	
	{!! number_format($similares->str_precio_venta, null, ',', '.') !!}
	                                                        
</span>	