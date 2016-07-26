	                                                    <select id='max_anoFiltro' name='max_anoFiltro' class='form-control' value='0' onchange='filtros("max_ano",this.value)'> 
	                                                        <option selected>Seleccione</option>
	                                                            @foreach ($anospublicados as $ano)
	                                                            
	                                                               <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano}}</option>
	                                                                                                    
	                                                            @endforeach 
	                                                    </select>