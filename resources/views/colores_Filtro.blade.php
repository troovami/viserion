					    							<?php                                             			
                                            			$flag4 = 0;
                                            		?>
	                                            	@foreach ($colors as $color)
	                                            	
	                                            		@if ($flag4 < 6)
														
		                                                	<li class="list-group-item"><span class="badge">{{ $color->total }}</span>
		                                                		<a href="#" onclick="filtros('color',<?=$color->lng_idcolor;?>);">
		                                                			{{ $color->str_descripcion }}
		                                                		</a>
		                                                	</li>
	                                                	
														@endif

                                                	<?php 
														$flag4 ++;                                              	
                                                	?>
	                                                	
	    											@endforeach
	    												    											
				                                    <div class="accordion-heading togglize" id="verMasColores"> 
				                                    	<a onclick="document.getElementById('verMasColores').style.display = 'none'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseColores" style="font-size: 10px">Ver más + </a> 
				                                    </div>
				                                    
				                                    <div id="collapseColores" class="accordion-body collapse">
				                                    	
	                                            		<?php                                             			
	                                            			$flag4 = 0;
	                                            		?>
		                                            	@foreach ($colors as $color)
		                                            	
		                                            		@if ($flag4 > 6)
															
			                                                	<li class="list-group-item"><span class="badge">{{ $color->total }}</span>
			                                                		<a href="#" onclick="filtros('color',<?=$color->lng_idcolor;?>);">
			                                                			{{ $color->str_descripcion }}
			                                                		</a>
			                                                	</li>
		                                                	
															@endif
	
	                                                	<?php 
															$flag4 ++;                                              	
	                                                	?>
		                                                	
		    											@endforeach
		    											
		    										    <div class="accordion-heading togglize"id="verMenos">
					                                    	<a onclick="document.getElementById('verMasColores').style.display = 'inline'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseColores" style="font-size: 10px">Ver menos - </a> 
					                                    </div>
	    											
	    											
	    											
	    											
												</div>
												    											