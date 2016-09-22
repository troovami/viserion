													<?php                                             			
                                            			$flag3 = 0;
                                            		?>
	                                            	@foreach ($modelos as $modelo)
	                                            	
	                                            		@if ($flag3 < 6)
														
		                                                	<li class="list-group-item"><span class="badge">{{ $modelo->total }}</span>
		                                                		<a href="#" onclick="filtro_por_modelo2({{ $modelo->lng_idmodelo }});">
		                                                			<img class="" src="data:image/jpeg;base64,{{ $modelo->blb_img }}" style="width:20px" />
		                                                			
						                                        	@if( strlen(".$modelo->str_modelo.") < 20 ) 
						                                        	
						                                        		{{ $modelo->str_modelo }}
						                                        		
						                                        	@else 
						                                        		{!! substr($modelo->str_modelo,0,20)."..." !!}
						                                        		
						                                        	@endif 
		                                                				                                                			
		                                                		</a>
		                                                	</li>  
	                                                	
														@endif

                                                	<?php 
														$flag3 ++;                                              	
                                                	?>
	                                                	
	    											@endforeach
	    												    											
				                                    <div class="accordion-heading togglize" id="verMasModelos"> 
				                                    	<a onclick="document.getElementById('verMasModelos').style.display = 'none'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseModelos" style="font-size: 10px">Ver más + </a> 
				                                    </div>
				                                    
				                                    <div id="collapseModelos" class="accordion-body collapse">
				                                    	
	                                            		<?php                                             			
	                                            			$flag3 = 0;
	                                            		?>
		                                            	@foreach ($modelos as $modelo)
		                                            	
		                                            		@if ($flag3 > 6)
															
			                                                	<li class="list-group-item"><span class="badge">{{ $modelo->total }}</span>
			                                                		<a href="#" onclick="filtro_por_modelo2({{ $modelo->lng_idmodelo }});">
			                                                			<img class="" src="data:image/jpeg;base64,{{ $modelo->blb_img }}" style="width:20px" />
			                                                			
							                                        	@if( strlen(".$modelo->str_modelo.") < 20 ) 
							                                        	
							                                        		{{ $modelo->str_modelo }}
							                                        		
							                                        	@else 
							                                        		{!! substr($modelo->str_modelo,0,20)."..." !!}
							                                        		
							                                        	@endif 
			                                                				                                                			
			                                                		</a>
			                                                	</li>
		                                                	
															@endif
	
	                                                	<?php 
															$flag3 ++;                                              	
	                                                	?>
		                                                	
		    											@endforeach
		    											
		    										    <div class="accordion-heading togglize"id="verMenos">
					                                    	<a onclick="document.getElementById('verMasModelos').style.display = 'inline'" class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseModelos" style="font-size: 10px">Ver menos - </a> 
					                                    </div>
	    															                                    	
				                                    </div>
