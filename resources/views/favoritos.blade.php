													                                    <table class="table table-striped dashboard-tables saved-cars-table">
													                                    
													                                    <!-- <table class="table table-bordered dashboard-tables saved-cars-table" style="width: 100%">-->
													                                        <thead>
													                                            <tr style="text-align: center">
													                                            	<td><strong>#</strong></td>
													                                                <td><strong>Vehículo</strong></td>
													                                                <td><strong>Descripción</strong></td>
													                                                <td><strong>Precio</strong></td>
													                                      												                                                
													       
													                                                <td><strong><i class="fa fa-share-alt" aria-hidden="true"></i></strong></td>
													                                                <td><strong>Eliminar</strong></td>                                              
													                                            </tr>
													                                        </thead>
																
													                                        <tbody>
																								
																								@if (isset($favoritos_usuario))
																								    											
																									<?php 
																										$a = 0;
																									?>
													                                             @foreach ($favoritos_usuario as $favoritos) 
													                                                <tr style="text-align: center">
													                                                                                                
													                                                    <td>																											
																										    <span class="badge" style="background-color: #777"> 
																												<?=$a+1?>
																										    </span>																										
																										</td>                                                
													                                                
													                                                    <td>
													                                                        <!-- Result -->
													                                                        <a href="{{ route('detalles',$favoritos->id) }}" target="_blank" class="car-image">
													                                                            <img src="{{ $favoritos->imagen }}" alt="">
													                                                        </a>
													
																										</td>
																										
																										<td>
													                                                       
													                                                            <h5><a href="{{ route('detalles',$favoritos->id) }}" target="_blank" title="Ver {{$favoritos->str_marca}} {{$favoritos->str_modelo}}"> 
													
													                                                                @if( strlen(".$favoritos->str_marca $favoritos->str_modelo.") < 20 ) 
													                                                                
													                                                                    {!! $favoritos->str_marca." ".$favoritos->str_modelo !!} 
													                                                                    
													                                                                @else 
													                                                                    {!! $favoritos->str_marca." ".substr($favoritos->str_modelo,0,4)."..." !!}
													                                                                    
													                                                                @endif
													                                                            </a></h5>
													                                                       
													                                                    </td>
													                                                    <td><span class="price">
													
													
													                                                            @if ($favoritos->str_moneda == 'Dólares' ) 
													                            
													                                                                $
													                                                            
													                                                            @elseif ($favoritos->str_moneda == 'Bolívares' )
													                                                                
													                                                                <!-- VEF --> BsF
													                                                                                                                            
													                                                            @elseif ($favoritos->str_moneda == '' )
													                                                            
													                                                                {!! $favoritos->str_abreviatura !!}
													                                                                                            
													                                                            @endif
													
													                                                            {!! number_format($favoritos->str_precio_venta, null, ',', '.') !!} </span></td>
						
													      												<td>
													      												
													      														<a href="https://twitter.com/share" class="twitter-share-button" data-text="En venta {{ $favoritos->str_marca }} {{ $favoritos->str_modelo }} {{ $favoritos->int_ano }}" data-url="http://www.troovami.com/Vehiculo/{{$favoritos->id}}" data-via="troovami" data-hashtags="">Tweet</a>
																												<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>    
													      														         			<br>  									
													      												&nbsp;<div class="fb-share-button" data-href="http://troovami.com/{{Request::path()}}" data-layout="button"></div>
													      												</td>
													      												      
													      												<td>
													      												
													      													<button onclick="eliminar_fav({{ $favoritos->id }})">
													      														<i class="fa fa-trash" style="color: red" aria-hidden="true"></i>
													      													</button>
													      													
													      												</td>      												
													      												
													      												<?php 
													      													$a++;
													      												?>
													                                                </tr>
													                                            @endforeach
																							@endif
													                                        </tbody>
													
													                                    </table>