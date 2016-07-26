<?php

	//Ver archivo: ajaxCars.js:
	
	//Rutas de Función: filtro_por_tipo(tipo)
	Route::get('PaisesTipoBuscador/{valor}','MaestroController@dependientePaisesTipoBuscador');
	Route::get('PaisesTipoFiltro/{valor}','MaestroController@dependientePaisesTipoFiltro');
	
	Route::get('CiudadesTipoBuscador/{tipo}','MaestroController@dependienteCiudadTipoBuscador');	
	Route::get('CiudadesTipoFiltro/{tipo}','MaestroController@dependienteCiudadTipoFiltro');
	
	Route::get('MarcasTipoBuscador/{valor}','MaestroController@dependienteMarcasTipoBuscador');
	Route::get('MarcasTipoFiltro/{valor}','MaestroController@dependienteMarcasTipoFiltro');
		
	Route::get('ModelosTipoBuscador/{valor}','MaestroController@dependienteModelosTipoBuscador');	
	Route::get('ModelosTipoFiltro/{valor}','MaestroController@dependienteModelosTipoFiltro');
		
	Route::get('ColoresTipoBuscador/{valor}','MaestroController@dependienteColoresTipoBuscador');	
	Route::get('ColoresTipoFiltro/{valor}','MaestroController@dependienteColoresTipoFiltro');
		
	Route::get('AnosTipoBuscadorMax/{valor}','MaestroController@dependienteAnoTipoBuscador_Max');
	Route::get('AnosTipoBuscadorMin/{valor}','MaestroController@dependienteAnoTipoBuscador_Min');	
	Route::get('AnosTipoFiltroMax/{valor}','MaestroController@dependienteAnoTipoFiltro_Max');
	Route::get('AnosTipoFiltroMin/{valor}','MaestroController@dependienteAnoTipoFiltro_Min');
			
	/*******************/
	
	//Rutas de Función: filtro_por_pais(pais)
	Route::get('CiudadesTipoPaisBuscador/{pais}/tipo/{tipo}','MaestroController@dependienteCiudadPaisBuscador');
	Route::get('CiudadesPaisBuscador/{pais}','MaestroController@dependienteCiudadPaisBuscador2');
	
	Route::get('CiudadesTipoPaisFiltro/{pais}/tipo/{tipo}','MaestroController@dependienteCiudadPaisFiltro');	
	Route::get('CiudadesPaisFiltro/{pais}','MaestroController@dependienteCiudadPaisFiltro2');
		
	Route::get('MarcasTipoPaisBuscador/{pais}/tipo/{tipo}','MaestroController@dependienteMarcasPaisBuscador');
	Route::get('MarcasPaisBuscador/{valor}','MaestroController@dependienteMarcasPaisBuscador2');
		
	Route::get('MarcasTipoPaisFiltro/{pais}/tipo/{tipo}','MaestroController@dependienteMarcasPaisFiltro');
	Route::get('MarcasPaisFiltro/{valor}','MaestroController@dependienteMarcasPaisFiltro2');
		
	Route::get('ModelosTipoPaisBuscador/{pais}/tipo/{tipo}','MaestroController@dependienteModelosPaisBuscador');
	Route::get('ModelosPaisBuscador/{valor}','MaestroController@dependienteModelosPaisBuscador2');
		
	Route::get('ModelosTipoPaisFiltro/{pais}/tipo/{tipo}','MaestroController@dependienteModelosPaisFiltro');
	Route::get('ModelosPaisFiltro/{valor}','MaestroController@dependienteModelosPaisFiltro2');
		
	Route::get('ColoresTipoPaisBuscador/{pais}/tipo/{tipo}','MaestroController@dependienteColoresPaisBuscador');
	Route::get('ColoresPaisBuscador/{valor}','MaestroController@dependienteColoresPaisBuscador2');
	
	Route::get('ColoresTipoPaisFiltro/{pais}/tipo/{tipo}','MaestroController@dependienteColoresPaisFiltro');
	Route::get('ColoresPaisFiltro/{valor}','MaestroController@dependienteColoresPaisFiltro2');

	/*******************/
	
	//Rutas de Función: filtro_por_ciudad(ciudad)
	Route::get('MarcasTipoCiudadBuscador/{valor}/tipo/{tipo}','MaestroController@dependienteMarcasCiudadBuscador');
	Route::get('MarcasPaisCiudadBuscador/{valor}/pais/{pais}','MaestroController@dependienteMarcasCiudadBuscador2');
	Route::get('MarcasTipoPaisCiudadBuscador/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteMarcasCiudadBuscador3');	
	Route::get('MarcasCiudadBuscador/{valor}','MaestroController@dependienteMarcasCiudadBuscador4');	
		
	Route::get('MarcasTipoCiudadFiltro/{valor}/tipo/{tipo}','MaestroController@dependienteMarcasCiudadFiltro');
	Route::get('MarcasPaisCiudadFiltro/{valor}/pais/{pais}','MaestroController@dependienteMarcasCiudadFiltro2');
	Route::get('MarcasTipoPaisCiudadFiltro/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteMarcasCiudadFiltro3');
	Route::get('MarcasCiudadFiltro/{valor}','MaestroController@dependienteMarcasCiudadFiltro4');

	Route::get('ModelosTipoCiudadBuscador/{valor}/tipo/{tipo}','MaestroController@dependienteModelosCiudadBuscador');
	Route::get('ModelosPaisCiudadBuscador/{valor}/pais/{pais}','MaestroController@dependienteModelosCiudadBuscador2');
	Route::get('ModelosTipoPaisCiudadBuscador/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteModelosCiudadBuscador3');	
	Route::get('ModelosCiudadBuscador/{valor}','MaestroController@dependienteModelosCiudadBuscador4');	
	
	Route::get('ModelosTipoCiudadFiltro/{valor}/tipo/{tipo}','MaestroController@dependienteModelosCiudadFiltro');
	Route::get('ModelosPaisCiudadFiltro/{valor}/pais/{pais}','MaestroController@dependienteModelosCiudadFiltro2');
	Route::get('ModelosTipoPaisCiudadFiltro/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteModelosCiudadFiltro3');
	Route::get('ModelosCiudadFiltro/{valor}','MaestroController@dependienteModelosCiudadFiltro4');
	
	Route::get('ColoresTipoCiudadBuscador/{valor}/tipo/{tipo}','MaestroController@dependienteColoresCiudadBuscador');
	Route::get('ColoresPaisCiudadBuscador/{valor}/pais/{pais}','MaestroController@dependienteColoresCiudadBuscador2');
	Route::get('ColoresTipoPaisCiudadBuscador/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteColoresCiudadBuscador3');	
	Route::get('ColoresCiudadBuscador/{valor}','MaestroController@dependienteColoresCiudadBuscador4');	
	
	Route::get('ColoresTipoCiudadFiltro/{valor}/tipo/{tipo}','MaestroController@dependienteColoresCiudadFiltro');
	Route::get('ColoresPaisCiudadFiltro/{valor}/pais/{pais}','MaestroController@dependienteColoresCiudadFiltro2');
	Route::get('ColoresTipoPaisCiudadFiltro/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteColoresCiudadFiltro3');	
	Route::get('ColoresCiudadFiltro/{valor}','MaestroController@dependienteColoresCiudadFiltro4');	
	
	/*******************/

	//Rutas de Función: filtro_por_marcas(marca)
	Route::get('ModelosTipoMarcaBuscador/{valor}/tipo/{tipo}','MaestroController@dependienteModelosMarcasBuscador');
	Route::get('ModelosPaisMarcaBuscador/{valor}/pais/{pais}','MaestroController@dependienteModelosMarcasBuscador2');
	Route::get('ModelosCiudadMarcaBuscador/{valor}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasBuscador3');
	Route::get('ModelosTipoPaisMarcaBuscador/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteModelosMarcasBuscador4');
	Route::get('ModelosTipoCiudadMarcaBuscador/{valor}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasBuscador5');
	Route::get('ModelosPaisCiudadMarcaBuscador/{valor}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasBuscador6');
	Route::get('ModelosTipoPaisCiudadMarcaBuscador/{valor}/tipo/{tipo}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasBuscador7');
	Route::get('ModelosMarcaBuscador/{valor}','MaestroController@dependienteModelosMarcasBuscador8');	

	Route::get('ModelosTipoMarcaFiltro/{valor}/tipo/{tipo}','MaestroController@dependienteModelosMarcasFiltro');
	Route::get('ModelosPaisMarcaFiltro/{valor}/pais/{pais}','MaestroController@dependienteModelosMarcasFiltro2');
	Route::get('ModelosCiudadMarcaFiltro/{valor}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasFiltro3');
	Route::get('ModelosTipoPaisMarcaFiltro/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteModelosMarcasFiltro4');
	Route::get('ModelosTipoCiudadMarcaFiltro/{valor}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasFiltro5');
	Route::get('ModelosPaisCiudadMarcaFiltro/{valor}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasFiltro6');
	Route::get('ModelosTipoPaisCiudadMarcaFiltro/{valor}/tipo/{tipo}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteModelosMarcasFiltro7');
	Route::get('ModelosMarcaFiltro/{valor}','MaestroController@dependienteModelosMarcasFiltro8');
	
	Route::get('ColoresTipoMarcaBuscador/{valor}/tipo/{tipo}','MaestroController@dependienteColoresMarcasBuscador');
	Route::get('ColoresPaisMarcaBuscador/{valor}/pais/{pais}','MaestroController@dependienteColoresMarcasBuscador2');
	Route::get('ColoresCiudadMarcaBuscador/{valor}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasBuscador3');
	Route::get('ColoresTipoPaisMarcaBuscador/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteColoresMarcasBuscador4');
	Route::get('ColoresTipoCiudadMarcaBuscador/{valor}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasBuscador5');
	Route::get('ColoresPaisCiudadMarcaBuscador/{valor}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasBuscador6');
	Route::get('ColoresTipoPaisCiudadMarcaBuscador/{valor}/tipo/{tipo}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasBuscador7');
	Route::get('ColoresMarcaBuscador/{valor}','MaestroController@dependienteColoresMarcasBuscador8');	
	
	Route::get('ColoresTipoMarcaFiltro/{valor}/tipo/{tipo}','MaestroController@dependienteColoresMarcasFiltro');
	Route::get('ColoresPaisMarcaFiltro/{valor}/pais/{pais}','MaestroController@dependienteColoresMarcasFiltro2');
	Route::get('ColoresCiudadMarcaFiltro/{valor}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasFiltro3');
	Route::get('ColoresTipoPaisMarcaFiltro/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteColoresMarcasFiltro4');
	Route::get('ColoresTipoCiudadMarcaFiltro/{valor}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasFiltro5');
	Route::get('ColoresPaisCiudadMarcaFiltro/{valor}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasFiltro6');
	Route::get('ColoresTipoPaisCiudadMarcaFiltro/{valor}/tipo/{tipo}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresMarcasFiltro7');
	Route::get('ColoresMarcaFiltro/{valor}','MaestroController@dependienteColoresMarcasFiltro8');	

	/*******************/
	
	//Rutas de Función: filtro_por_modelo(modelo)
	Route::get('ColoresTipoModeloBuscador/{valor}/tipo/{tipo}','MaestroController@dependienteColoresModelosBuscador');
	Route::get('ColoresPaisModeloBuscador/{valor}/pais/{pais}','MaestroController@dependienteColoresModelosBuscador2');
	Route::get('ColoresCiudadModeloBuscador/{valor}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador3');
	Route::get('ColoresMarcaModeloBuscador/{valor}/marca/{marca}','MaestroController@dependienteColoresModelosBuscador4');	
	Route::get('ColoresTipoPaisModeloBuscador/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteColoresModelosBuscador5');	
	Route::get('ColoresTipoCiudadModeloBuscador/{valor}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador6');
	Route::get('ColoresTipoMarcaModeloBuscador/{valor}/tipo/{tipo}/marca/{marca}','MaestroController@dependienteColoresModelosBuscador7');	
	Route::get('ColoresPaisCiudadModeloBuscador/{valor}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador8');	
	Route::get('ColoresPaisMarcaModeloBuscador/{valor}/pais/{pais}/marca/{marca}','MaestroController@dependienteColoresModelosBuscador9');
	Route::get('ColoresCiudadMarcaModeloBuscador/{valor}/marca/{marca}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador10');
	Route::get('ColoresTipoPaisCiudadModeloBuscador/{valor}/tipo/{tipo}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador11');
	Route::get('ColoresTipoCiudadMarcaModeloBuscador/{valor}/tipo/{tipo}/marca/{marca}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador12');
	Route::get('ColoresPaisCiudadMarcaModeloBuscador/{valor}/pais/{pais}/marca/{marca}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador13');
	Route::get('ColoresTipoPaisMarcaModeloBuscador/{valor}/pais/{pais}/marca/{marca}/tipo/{tipo}','MaestroController@dependienteColoresModelosBuscador14');
	Route::get('ColoresTipoPaisCiudadMarcaModeloBuscador/{valor}/pais/{pais}/marca/{marca}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosBuscador15');
	Route::get('ColoresModeloBuscador/{valor}','MaestroController@dependienteColoresModelosBuscador16');
	
	Route::get('ColoresTipoModeloFiltro/{valor}/tipo/{tipo}','MaestroController@dependienteColoresModelosFiltro');
	Route::get('ColoresPaisModeloFiltro/{valor}/pais/{pais}','MaestroController@dependienteColoresModelosFiltro2');
	Route::get('ColoresCiudadModeloFiltro/{valor}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro3');
	Route::get('ColoresMarcaModeloFiltro/{valor}/marca/{marca}','MaestroController@dependienteColoresModelosFiltro4');
	Route::get('ColoresTipoPaisModeloFiltro/{valor}/tipo/{tipo}/pais/{pais}','MaestroController@dependienteColoresModelosFiltro5');
	Route::get('ColoresTipoCiudadModeloFiltro/{valor}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro6');
	Route::get('ColoresTipoMarcaModeloFiltro/{valor}/tipo/{tipo}/marca/{marca}','MaestroController@dependienteColoresModelosFiltro7');
	Route::get('ColoresPaisCiudadModeloFiltro/{valor}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro8');
	Route::get('ColoresPaisMarcaModeloFiltro/{valor}/pais/{pais}/marca/{marca}','MaestroController@dependienteColoresModelosFiltro9');
	Route::get('ColoresCiudadMarcaModeloFiltro/{valor}/marca/{marca}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro10');
	Route::get('ColoresTipoPaisCiudadModeloFiltro/{valor}/tipo/{tipo}/pais/{pais}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro11');
	Route::get('ColoresTipoCiudadMarcaModeloFiltro/{valor}/tipo/{tipo}/marca/{marca}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro12');
	Route::get('ColoresPaisCiudadMarcaModeloFiltro/{valor}/pais/{pais}/marca/{marca}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro13');
	Route::get('ColoresTipoPaisMarcaModeloFiltro/{valor}/pais/{pais}/marca/{marca}/tipo/{tipo}','MaestroController@dependienteColoresModelosFiltro14');
	Route::get('ColoresTipoPaisCiudadMarcaModeloFiltro/{valor}/pais/{pais}/marca/{marca}/tipo/{tipo}/ciudad/{ciudad}','MaestroController@dependienteColoresModelosFiltro15');
	Route::get('ColoresModeloFiltro/{valor}','MaestroController@dependienteColoresModelosFiltro16');	
	

	Route::get('BuscadorCiudades/{letra}/Pais/{pais}','MaestroController@BuscadorCiudades');		
?>