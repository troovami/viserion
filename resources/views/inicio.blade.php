@extends('app')

@section('content')

    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
        	<div class="container">
            	
            	
            	<div class="row">
                    <!-- Search Filters -->
                    <div class="col-md-3 search-filters" id="Search-Filters">
                    	<div class="" style="margin-top: -40px">
                    	<!-- <div class="tbsticky filters-sidebar" style="margin-top: -30px">	-->	
                    	
							<div id="barra-progreso" class="">
           
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Buscando...</span>
                                    </div>
                                </div>

                            </div>                    	
                    	                    	
                            <h3><i class="fa fa-filter"></i> Filtros</h3>
                            <div class="accordion" id="toggleArea">
                            
                            	<span id="tipoFiltrado" class="label label-primary" title="Tipo" style="cursor:pointer"></span>
								<span id="paisFiltrado" class="label label-primary" title="Pais" style="cursor:pointer" ></span>								
								<span id="ciudadFiltrado" class="label label-primary" title="Ciudad" style="cursor:pointer" ></span>																								
								<span id="marcaFiltrado" class="label label-primary" title="Marca" style="cursor:pointer" ></span>								
								<span id="modeloFiltrado" class="label label-primary" title="Modelo" style="cursor:pointer" ></span>								
								<span id="colorFiltrado" class="label label-primary" title="Color" style="cursor:pointer" ></span>								
								<span id="anodesdeFiltrado" class="label label-primary" title="Año Desde" style="cursor:pointer" ></span>								
								<span id="anohastaFiltrado" class="label label-primary" title="Año Hasta" style="cursor:pointer" ></span>								
								<span id="preciodesdeFiltrado" class="label label-primary" title="Precio Mínimo" style="cursor:pointer" ></span>								
								<span id="preciohastaFiltrado" class="label label-primary" title="Precio Máximo" style="cursor:pointer" ></span>
                                  
                               <!-- Filter by Type -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTipos">Tipos de Vehículos <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTipos" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                                                                        
                                      		<ul class="filter-options-list list-group">
	                                      		<div id="divFiltroTipos">
	                                            	@foreach ($tipos as $tipo)
	                                                	<li class="list-group-item"><span class="badge">{{ $tipo->total }}</span>
	                                                		<a href="#" onclick="filtro_por_tipo2({{ $tipo->id }});"><i class="{{ $tipo->str_caracteristica2 }}" style="color: #777"></i> {{ $tipo->str_descripcion }}</a>
	                                                	</li>
	    											@endforeach	
	    										</div>	    											
                                            </ul>
                                                                                         	                                                                                 
                                        </div>
                                    </div>
                                </div> 
                                                                  
                                <!-- Filter by Country -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFour">Paises <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseFour" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                            
                                                <div id="dependientePaisesFiltro">
    												@foreach ($paisesBuscador as $pais)												
    													<li class="list-group-item"><span class="badge">{{ $pais->total}}</span>
    												   		
    														<a href="#" onclick="filtro_por_pais2({{ $pais->id }})">
    															<img class="" src="autostars/images/paises-america/<?=$pais->lng_idpais?>.png" style="width:20px" /> {{ $pais->str_paises}}
    														</a>
    														
    												   	</li>				    
    												@endforeach
                                                </div>

                                            </ul>
                                             	                         
                                        </div>
                                    </div>
                                </div>                                
                             <!-- -->
                                                                
                                <!-- Filter by City -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSix">Ciudades <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseSix" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                                                                 
                                            <ul class="filter-options-list list-group">
                                            	<div id="divFiltroCiudades">
                                            	
                                            		<?php                                             			
                                            			$flag = 0;
                                            		?>
	                                            	@foreach ($ciudades as $ciudad)
	                                            	
	                                            		@if ($flag < 6)
														
	                                                		<li class="list-group-item"><span class="badge">{{ $ciudad->total }}</span>
	                                                			<a href="#" onclick="filtro_por_ciudad2({{ $ciudad->id }});"><img class="" src="autostars/images/paises-america/<?=$ciudad->lng_idpais?>.png" style="width:20px" /> {{ $ciudad->str_ciudad }}</a>
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
		                                                			<a href="#" onclick="filtro_por_ciudad2({{ $ciudad->id }});"><img class="" src="autostars/images/paises-america/<?=$ciudad->lng_idpais?>.png" style="width:20px" /> {{ $ciudad->str_ciudad }}</a>
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
	    											
    											</div>
                                            </ul>
                                             	
                                        </div>
                                    </div>
                                </div>                                                            
                                
                                <!-- Filter by Make -->
                                <div class="accordion-group panel">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">Marcas<i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">                                                                                                                         
                                            
                                      		<ul class="filter-options-list list-group">
                                            	<div id="dependienteMarcasFiltro">
                                            	
                                            		<?php                                             			
                                            			$flag2 = 0;
                                            		?>
	                                            	@foreach ($marcas as $marca)
	                                            	
	                                            		@if ($flag2 < 6)
														
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
		                                            	
		                                            		@if ($flag2 > 6)
															
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

                                                </div>
                                            </ul>
                                             	                                                                                                                                                                  
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Filter by Model -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird">Modelos <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseThird" class="accordion-body collapse">
                                        <div class="accordion-inner">                                         
                                            
                                      		<ul class="filter-options-list list-group">
                                      			<div id="dependienteModelosFiltro">

													<?php                                             			
                                            			$flag3 = 0;
                                            		?>
	                                            	@foreach ($modelosTotal as $modelo)
	                                            	
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
		                                            	@foreach ($modelosTotal as $modelo)
		                                            	
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

    											</div>
                                            </ul>
                                             	
                                        </div>
                                    </div>
                                </div>                                                                                               

                                <!-- Filter by Color -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTen">Colores <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
											
												<div id="dependienteColoresFiltro">

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
												
                                            </ul>
                                                                                                                            
                                        </div>
                                    </div>
                                </div>
                                                                
                                <!-- Filter by Year -->
                                <div class="accordion-group panel">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">Años<i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseOne" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
                                                    <label>Año Desde</label>
                                                    
                                              <div id="dependienteAnosFiltroMin">
							                   							                    
							    					<select id='min_anoFiltro' name='min_anoFiltro' class='form-control' value='0' onchange='filtros("min_ano",this.value)'>            
								                        <option value=''>Seleccione</option>
                                                            @foreach ($anospublicados as $ano)
                                                            
                                                               <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano}}</option>
                                                                                                    
                                                            @endforeach 										               						
													</select>
													
												</div>	
													   
                                                </div>
                                                <div class="form-group last-child">
                                                    <label>Año Hasta</label>
                                                    <div id="dependienteAnosFiltroMax">
                                                    
	                                                    <select id='max_anoFiltro' name='max_anoFiltro' class='form-control' value='0' onchange='filtros("max_ano",this.value)'> 
	                                                        <option selected>Seleccione</option>
	                                                            @foreach ($anospublicados as $ano)
	                                                            
	                                                               <option value='{{ $ano->int_ano }}'>{{ $ano->int_ano}}</option>
	                                                                                                    
	                                                            @endforeach 
	                                                    </select>
                                                    
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Price -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEight">Precios <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
                                                    <label>Precio Mínimo</label>
                
        										    <div class="input-group">
												      <div id="monedaMinimo1" name="monedaMinimo1" class="input-group-addon"><div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div></div>
												     {!! Form::input('text', 'min_precioFiltro', '', ['id' => 'min_precioFiltro', 'class'=> 'form-control','style'=>'width:150px','maxlength' => '10','onkeypress'=>'return isNumber(event)','onkeyup' => 'filtros("min_precio",this.value)']) !!}
												    </div>
                
                								<!-- 
                                                </div>
                                                <div class="form-group last-child">
                                                 -->
                                                
                                                    <label>Precio Máximo</label>
                                                    
												    <div class="input-group">
												      <div id="monedaMaximo1" name="monedaMaximo1" class="input-group-addon"><div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div></div>
												     {!! Form::input('text', 'max_precioFiltro', '', ['id' => 'max_precioFiltro', 'class'=> 'form-control','style'=>'width:150px','maxlength' => '10','onkeypress'=>'return isNumber(event)','onkeyup' => 'filtros("max_precio",this.value)']) !!}
												    </div>	                                                    
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Toggle -->
                                <a href="http://www.tecnotropolisla.com" title="www.tecnotropolisla.com" target="_blank">
                                    <img src="{{ asset('autostars/images/publicidad-troovami/publicidad2.jpg') }}" alt="Logo">   
                                </a>
                                <br><br>
                            @include('twitter')
                                    
                                <a href="http://www.tecnotropolisla.com" title="www.tecnotropolisla.com" target="_blank">
                                    <img src="{{ asset('autostars/images/publicidad-troovami/publicidad2.jpg') }}" alt="Logo">   
                                </a>
                                <br><br>
                            @include('facebook')

                            <br><br>

                             <div class="sidebar-widget widget seller-contact-widget">

                                <div class="vehicle-enquiry-in">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="">
                                        
                                            <p class="text-align-center"> 
                                            
                                                <a href="http://www.tecnotropolisla.com" title="www.tecnotropolisla.com" target="_blank">
                                                	<img src="{{ asset('autostars/images/publicidad-troovami/publicidad1.jpg') }}" alt="Logo">  
                                                </a>
                                            
                                             </p>
                                         
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                                                         
                             <div class="sidebar-widget widget seller-contact-widget">                                
                                <div class="vehicle-enquiry-in">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="">
                                        
                                            <br><br><p class="text-align-center"> 
                                            
                                            <a href="http://www.skd.com.ve" title="www.skd.com.ve" target="_blank">
                                            	<img src="{{ asset('autostars/images/publicidad-troovami/publicidad3.png') }}" alt="Logo">   
                                            </a>
                                            
                                            </p><br><br>
                                         
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div> 

                             <div class="sidebar-widget widget seller-contact-widget">                                
                                <div class="vehicle-enquiry-in">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="">
                                        
                                            <p class="text-align-center"> 
                                            
                                                <a href="http://www.tecnotropolisla.com" title="www.tecnotropolisla.com" target="_blank">
                                                    <img src="{{ asset('autostars/images/publicidad-troovami/001.jpg') }}" alt="Logo">   
                                                </a>
                                                
                                            </p>
                                         
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>                           
                             
                        </div>
                        
                       
                    </div>
                    
                    <!-- Listing Results -->
                    <div class="col-md-9 results-container">
                        <div class="results-container-in">
                        	<div class="waiting" style="display:none;">
                            	<div class="spinner">
                                  	<div class="rect1"></div>
                                  	<div class="rect2"></div>
                                  	<div class="rect3"></div>
                                  	<div class="rect4"></div>
                                  	<div class="rect5"></div>
                                </div>
                            </div>


                        <div class="results-container-in" style="margin-top: -40px">
                        
                            {!! Form::input('hidden', 'pag', 1 , ['id'=> 'pag','disabled'=>'true']) !!}
                            
                            @foreach ($total_paginas as $paginas) @endforeach
                       
                            @for ($i = 1; $i < $paginas + 1; $i++) @endfor

							@foreach ($registros as $total) @endforeach


                   <div class="toggle-view view-format-choice ">
                        
                        <div class="row">
						  <div class="col-md-3" style="text-align: left;">							
							<!-- <button class="btn btn-danger" id="anterior" name="anterior" type="button" onclick="anterior()" title="Página anterior"><i class="fa fa-chevron-left"></i> </button>-->						  
						  </div>
						  
						  <div class="col-md-6" style="text-align: center;">
						  
	                        <div class="btn-group">
	                           
	                           <!-- 
	                            <a href="#" class="btn btn-default" id="results-list-view"><i class="fa fa-th-list"></i></a>                           
	                           
	                            <a href="#" class="btn btn-default active" id="results-grid-view"><i class="fa fa-th"></i></a>    
	                            
	                            -->
	                                                    
	                            <div id="numPagina" class="btn btn-default ">Página: 1 de {{ $i-1 }} / Vehículos: {{ $total }}</div>
	                        </div>						  
						  
						  </div>
						  
						  <div class="col-md-3" style="text-align: right;">
							<button class="btn btn-primary" id="anterior" name="anterior" type="button" onclick="anterior()" title="Página anterior"><i class="fa fa-chevron-left"></i> </button>
							<button class="btn btn-primary" id="siguiente" name="siguiente" type="button" onclick="siguiente()" title="Página siguiente"> <i class="fa fa-chevron-right"></i></button>						  
						  </div>
						
						</div>

                         <nav class="pull-right ">
                                             
                                    <!--                                                                              
                                    <ul class="pagination">
                                        <li class=""><a style="background-color: #d9534f; color: #fff;" onclick="anterior()" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left"></i> Anterior</span></a></li>
                                        
                                        @foreach ($total_paginas as $paginas) @endforeach
                    
                                            @for ($i = 1; $i < $paginas + 1; $i++)
                                           
                                           
                                                <li id="numeroPag{{$i}}" class="">
                                                    <a onclick="paginar({{$i}})">
                                                        {!! $i !!} 
                                                        <span class="sr-only"></span>
                                                    </a>
                                                </li>
                    						
                    						
                                            @endfor
                                                                               
                                        <li class=""><a style="background-color: #d9534f; color: #fff" onclick="siguiente()" aria-label="Next"><span aria-hidden="true">Siguiente <i class="fa fa-chevron-right"></i></span></a></li>
                                    </ul>
                                    -->                                    
                                </nav>

                    </div>                  
                                    
                        	<div id="results-holder" class="results-grid-view" style="margin-top: 6px">                        	
                            	@include('paginador')

                            </div>
                                                           
                         <nav class="pull-right ">
                                                                                                           
                                   <!--                                                                              
                                    <ul class="pagination">
                                        <li class=""><a style="background-color: #d9534f; color: #fff" onclick="anterior()" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left"></i> Anterior</span></a></li>
                                        
                                        @foreach ($total_paginas as $paginas) @endforeach
                    
                                            @for ($i = 1; $i < $paginas + 1; $i++)
                                           
                                           
                                                <li id="numeroPag{{$i}}" class="">
                                                    <a onclick="paginar({{$i}})">
                                                        {!! $i !!} 
                                                        <span class="sr-only"></span>
                                                    </a>
                                                </li>
                    						
                    						
                                            @endfor
                                                                               
                                        <li class=""><a style="background-color: #d9534f; color: #fff" onclick="siguiente()" aria-label="Next"><span aria-hidden="true">Siguiente <i class="fa fa-chevron-right"></i></span></a></li>
                                    </ul>
                                    
                                   --> 
                                    
                           </nav> 
                                                      
                        <div class="row">
						  <div class="col-md-3" style="text-align: left;">
							<!-- <button class="btn btn-danger" id="anterior" name="anterior" type="button" onclick="anterior()" title="Página anterior"><i class="fa fa-chevron-left"></i> </button>-->						  
						  </div>
						  
						  <div class="col-md-6" style="text-align: center;"></div>
						  
						  <div class="col-md-3" style="text-align: right;">
						  	<button class="btn btn-primary" id="anterior" name="anterior" type="button" onclick="anterior()" title="Página anterior"><i class="fa fa-chevron-left"></i> </button>
							<button class="btn btn-primary" id="siguiente" name="siguiente" type="button" onclick="siguiente()" title="Página siguiente"> <i class="fa fa-chevron-right"></i></button>						  
						  </div>
						
						</div>                           
                           
                           
                                                      
                            <br>
                            
                            <hr>

				            <!-- Recently Listed Vehicles -->
                            <section class="listing-block recent-vehicles">
                                <div class="listing-header">
                                    <h3>Últimos Carros</h3>
                                </div>
                                
                                <div class="listing-container">
                                    <div class="carousel-wrapper">
                                        <div class="row">
                                            <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                                
                                                @foreach ($ultimosVehiculos as $ultimos)
	                                                <li class="item">
	                                                    <div class="vehicle-block format-standard">
	                                                      
	                                                        <a href="{{ route('detalles',$ultimos->id) }}" class="media-box"><img class="" src="{{ $ultimos->imagen }}" /></a>
	                                                        
	                                                        <span class="label label-default vehicle-age"></span>
					                                        <span class="vehicle-age">
					                                        <p class="label label-primary">{!! $ultimos->int_ano !!}</p>
					                                        <p class="text-center" style="margin-top: -12px;margin-left: -20px;"><img class="" src="autostars/images/paises-america/<?=$ultimos->lng_idpais?>.png" style="width:35px" /></p>                                       
					                                        </span>	                                                        
	                                                        <h5 class="vehicle-title"><a href="#">{!! $ultimos->marca." ".$ultimos->modelo!!}</a></h5>
	                                                        <span class="vehicle-cost">{!! $ultimos->ciudad !!}</span>
															 															             
																	@if ($ultimos->lng_idpais == '13' ) 
		                            
											                            	@if (Auth::guest())
					                                               
							                                                    <div class="price" style="font-size:12px">
							                                                    
																					<a href="#" class="" data-toggle="modal" data-target="#loginModal">
															                            Click ver precio
															                        </a>
																					                                                    
							                                                    </div>
							                                                                                                   
							                                               @endif
							                                               
							                                               @if (Auth::user())
							                                               		
						                                               	   		@include('precio')
							                                                	
							                                               @endif 
						                                               	
										                            @else
										                            	
																		@include('precio')
										                            								                            
										                            @endif             
															
														</div>	              
	                                                </li>
												@endforeach
												
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </section>

							<hr>
								
								<a href="http://www.corporacionjpb.com" title="www.corporacionjpb.com" target="_blank">
									<img src="{{ asset('autostars/images/publicidad-troovami/jpb-publicidad.JPG') }}" alt="Logo">
								</a>
								<br>

							<hr>
					
				            <!-- Recently Listed Vehicles -->
                            <section class="listing-block recent-vehicles">
                                <div class="listing-header">
                                    <h3>Últimas Motocicletas</h3>
                                </div>
                                
                                <div class="listing-container">
                                    <div class="carousel-wrapper">
                                        <div class="row">
                                            <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                                
                                                @foreach ($ultimosVehiculos2 as $ultimos)
	                                                <li class="item">
	                                                    <div class="vehicle-block format-standard">
	                                                      
	                                                        <a href="{{ route('detalles',$ultimos->id) }}" class="media-box"><img class="" src="{{ $ultimos->imagen }}" /></a>
	                                                        
	                                                        <span class="label label-default vehicle-age"></span>
					                                        <span class="vehicle-age">
					                                        <p class="label label-primary">{!! $ultimos->int_ano !!}</p>
					                                        <p class="text-center" style="margin-top: -12px;margin-left: -20px;"><img class="" src="autostars/images/paises-america/<?=$ultimos->lng_idpais?>.png" style="width:35px" /></p>                                       
					                                        </span>	                                                        
	                                                        <h5 class="vehicle-title"><a href="#">{!! $ultimos->marca." ".$ultimos->modelo!!}</a></h5>
	                                                        <span class="vehicle-cost">{!! $ultimos->ciudad !!}</span>
	                                                        
																	@if ($ultimos->lng_idpais == '13' ) 
		                            
											                            	@if (Auth::guest())
					                                               
							                                                    <div class="price" style="font-size:12px">
							                                                    
																					<a href="#" class="" data-toggle="modal" data-target="#loginModal">
															                            Click ver precio
															                        </a>
																					                                                    
							                                                    </div>
							                                                                                                   
							                                               @endif
							                                               
							                                               @if (Auth::user())
							                                               		
						                                               	   		@include('precio')
							                                                	
							                                               @endif 
						                                               	
										                            @else
										                            	
																		@include('precio')
										                            								                            
										                            @endif                                                        
	                                                        
	                                                    </div>
	                                                </li>
												@endforeach
												
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </section>							
								
								<a href="http://www.bluproducts.com" title="www.bluproducts.com" target="_blank">
									<img src="{{ asset('autostars/images/publicidad-troovami/bluaboutbanner.jpg') }}" alt="Logo">
								</a>
								<br>

                        </div>
                    </div>
               	</div>
            </div>
        </div>
   	</div>
    <!-- End Body Content -->

@endsection