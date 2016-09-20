<?php                                             			
                                            			$flag2 = 0;
                                            		?>
	                                            	@foreach ($marcas as $marca)
	                                            	
	                                            		@if ($flag2 == 0)
														
		                                                	<li class="list-group-item"><span class="badge">{{ $marca->total }} </span>
		                                                		<a href="#" onclick="filtro_por_marca2({{ $marca->id}})">
		                                                			<img class="" src="data:image/jpeg;base64,{{ $marca->logo }}" style="width:20px" /> {{ $marca->str_marca }}
		                                                		</a>
		                                                	</li>  
	                                                	
														@endif

                                                	<?php 
														$flag2 ++;                                              	
                                                	?>
	                                                	
	    											@endforeach
	    												    											
				                                    <div class="accordion-heading togglize" id="verMasMarcas"> 
				                                    	<a onclick="document.getElementById('verMasMarcas').style.display = 'none'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseMarcas" style="font-size: 10px">Ver más + </a> 
				                                    </div>
				                                    
				                                    <div id="collapseMarcas" class="accordion-body collapse">
				                                    	
	                                            		<?php                                             			
	                                            			$flag2 = 0;
	                                            		?>
		                                            	@foreach ($marcas as $marca)
		                                            	
		                                            		@if ($flag2 > 0)
															
		                                                		<li class="list-group-item"><span class="badge">{{ $marca->total }} </span>
			                                                		<a href="#" onclick="filtro_por_marca2({{ $marca->id}})">
			                                                			<img class="" src="data:image/jpeg;base64,{{ $marca->logo }}" style="width:20px" /> {{ $marca->str_marca }}
			                                                		</a>
			                                                	</li>
		                                                	
															@endif
	
	                                                	<?php 
															$flag2 ++;                                              	
	                                                	?>
		                                                	
		    											@endforeach
		    											
		    										    <div class="accordion-heading togglize"id="verMenos">
					                                    	<a onclick="document.getElementById('verMasMarcas').style.display = 'inline'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseMarcas" style="font-size: 10px">Ver menos - </a> 
					                                    </div>
	    															                                    	
				                                    </div>