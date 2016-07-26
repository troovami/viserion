							    					<select id='min_anoFiltro' name='min_anoFiltro' class='form-control' value='0' onchange='filtros("min_ano",this.value)'>            
								                        <option value=''>Seleccione</option>
                                                            @foreach ($anospublicados as $ano)
                                                            
                                                               <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano}}</option>
                                                                                                    
                                                            @endforeach 										               						
													</select>