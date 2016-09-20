<?php                                             			
                                            			$flag = 0;
                                            		?>
	                                            	@foreach ($ciudades as $ciudad)
	                                            	
	                                            		@if ($flag < 6)
														
	                                                		<li class="list-group-item"><span class="badge">{{ $ciudad->total }}</span>
	                                                			<a href="#" onclick="filtro_por_ciudad2({{ $ciudad->id }});"><img class="" src="data:image/jpeg;base64,{{ $ciudad->bandera }}" style="width:20px" /> {{ $ciudad->str_ciudad }}</a>
	                                                		</li>
	                                                	
														@endif

                                                	<?php 
														$flag ++;                                              	
                                                	?>
	                                                	
	    											@endforeach
	    												    											
				                                    <div class="accordion-heading togglize" id="verMas"> 
				                                    	<a onclick="document.getElementById('verMas').style.display = 'none'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseCiudades" style="font-size: 10px">Ver más + </a> 
				                                    </div>
				                                    
				                                    <div id="collapseCiudades" class="accordion-body collapse">
				                                    	
	                                            		<?php                                             			
	                                            			$flag = 0;
	                                            		?>
		                                            	@foreach ($ciudades as $ciudad)
		                                            	
		                                            		@if ($flag > 6)
															
		                                                		<li class="list-group-item"><span class="badge">{{ $ciudad->total }}</span>
		                                                			<a href="#" onclick="filtro_por_ciudad2({{ $ciudad->id }});"><img class="" src="data:image/jpeg;base64,{{ $ciudad->bandera }}" style="width:20px" /> {{ $ciudad->str_ciudad }}</a>
		                                                		</li>
		                                                	
															@endif
	
	                                                	<?php 
															$flag ++;                                              	
	                                                	?>
		                                                	
		    											@endforeach
		    											
		    										    <div class="accordion-heading togglize"id="verMenos">
					                                    	<a onclick="document.getElementById('verMas').style.display = 'inline'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseCiudades" style="font-size: 10px">Ver menos - </a> 
					                                    </div>
	    															                                    	
				                                    </div>	