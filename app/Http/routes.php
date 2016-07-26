<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**********************Accesos Públicos:*****************************************/
	//Route::any('/Ubicacion', 'HomeController@ubicacion');
	
	
	Route::any('/Ubicacion', [
			'uses' => 'HomeController@ubicacion',
			'as' =>'ubicacion'
	]);
	
	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' =>'home'
	]);
		
	Route::get('/No-existe', [
		'uses' => 'ErrorController@index',
		'as' =>'error'
	]);

	Route::get('Quiénes-Somos', [
			'uses' => 'NosotrosController@index',
			'as' =>'quienes_somos'
	]);
	
	Route::get('Recuperar-Clave', [
					'uses' => 'UsuariosController@getRecuperar',
					'as' =>'recuperar'
	]);

	Route::post('Recuperar-Clave', 'UsuariosController@postRecuperar');

	Route::get('Soporte', [
			'uses' => 'SoporteController@index',
			'as' =>'soporte'
	]);
	
	Route::get('Contacto', [
			'uses' => 'ContactoController@index',
			'as' =>'contacto'
	]);
	
	Route::put('Enviando', [
			'uses' => 'ContactoController@enviar',
			'as' =>'enviar'
	]);	
	
	Route::get('Acceso-Restringido', [
					'uses' => 'DenegadoController@index',
					'as' =>'denegado'
	]);

	Route::get('Vehiculo/{valor}', [
			'uses' => 'DetallesController@detalles',
			'as' =>'detalles'
	]);
	
	Route::get('Imagen', [
			'uses' => 'ImagenController@index',
			'as' =>'imagen'
	]);
	
	Route::group(['prefix' => 'Servicios'], function () {
		
		Route::get('Repuestos', [
						'uses' => 'RepuestosController@index',
						'as' =>'repuestos'
		]);
	
		Route::get('Accesorios', [
				'uses' => 'AccesoriosController@index',
				'as' =>'accesorios'
		]);
	
		Route::get('Servicios', [
				'uses' => 'ServiciosController@index',
				'as' =>'servicios'
		]);
		
		Route::get('Talleres', [
				'uses' => 'TalleresController@index',
				'as' =>'talleres'
		]);
		
		Route::get('Concesionarios', [
				'uses' => 'ConcesionariosController@index',
				'as' =>'concesionarios'
		]);
		
	});
	
	Route::group(['prefix' => 'Vehiculo'], function () {

		include 'rutas_buscador.php';		
		include 'rutas_paginador.php';

	});

	include 'rutas_buscador.php';//y del filtro
	include 'rutas_paginador.php';

/**********************************************************************************/

/**********************Accesos con autenticación:**********************************/

Route::group(['middleware' => 'auth'], function () {
 
	Route::get('Publicar', [
		'uses' => 'PublicarController@index',
		'as' =>'publicar'
	]);
	
	Route::get('Mi-Cuenta', [
			'uses' => 'UsuariosController@index',
			'as' =>'cuenta'
	]);

	Route::group(['prefix' => 'Mi-Cuenta'], function () {

		Route::get('Perfil', [
				'uses' => 'UsuariosController@editarUsuario',
				'as' =>'editar'
		]);
		
		Route::get('Imagen', [
				'uses' => 'UsuariosController@editarUsuario2',
				'as' =>'editar2'
		]);
		
		Route::get('Clave', [
				'uses' => 'UsuariosController@editarUsuario3',
				'as' =>'editar3'
		]);		

			Route::get('Modificar/{id}', [
				'uses' => 'DetallesController@editarPublicacion',
				'as' =>'editarPublicacion'
		]);	
		
	});

	Route::put('Actualizar', [
			'uses' => 'UsuariosController@actualizarUsuario',
			'as' =>'actualizar'
	]);
	
	Route::put('ActualizarImagenes', [
			'uses' => 'DetallesController@actualizarImagenes',
			'as' =>'actualizarImagenes'
	]);
	
	Route::put('ActualizarVideo', [
			'uses' => 'DetallesController@actualizarVideo',
			'as' =>'actualizarVideo'
	]);	
	
	Route::put('ActualizarComentario', [
			'uses' => 'DetallesController@actualizarComentario',
			'as' =>'actualizarComentario'
	]);	
		
	Route::put('ActualizarEspecificaciones', [
			'uses' => 'DetallesController@actualizarEspecificaciones',
			'as' =>'actualizarEspecificaciones'
	]);	
	
	Route::put('ActualizarCaracteristicas', [
			'uses' => 'DetallesController@actualizarCaracteristicas',
			'as' =>'actualizarCaracteristicas'
	]);	
	
	Route::get('Acciones/{accion}/texto/{texto}/id/{id}', [
			'uses' => 'DetallesController@acciones',
			'as' =>'acciones'
	]);	
	
	Route::group(['prefix' => 'Publicar'], function () {
			
		//Placas:
			Route::get('Placas/{valor}', [
					'uses' => 'MaestroController@placas',
					'as' =>'placas'
			]);		
		
		//Carros:
			Route::get('Carros', [
					'uses' => 'PublicarCarrosController@vehiculo',
					'as' =>'publicarCarro'
			]);
		
			Route::post('Carros', [
				'uses' => 'PublicarCarrosController@postPublicar',
				'as' =>'publicarCarro'
			]);

		//Motocicletas:
			Route::get('Motocicletas', [
					'uses' => 'PublicarMotocicletasController@vehiculo',
					'as' =>'publicarMotocicleta'
			]);
		
			Route::post('Motocicletas', [
				'uses' => 'PublicarMotocicletasController@postPublicar',
				'as' =>'publicarMotocicleta'
			]);

		//Aeronaves:
			Route::get('Aeronaves', [
					'uses' => 'PublicarAeronavesController@vehiculo',
					'as' =>'publicarAeronave'
			]);
		
			Route::post('Aeronaves', [
				'uses' => 'PublicarAeronavesController@postPublicar',
				'as' =>'publicarAeronave'
			]);

		//Embarcaciones:
			Route::get('Embarcaciones', [
					'uses' => 'PublicarEmbarcacionesController@vehiculo',
					'as' =>'publicarEmbarcacion'
			]);
		
			Route::post('Embarcaciones', [
				'uses' => 'PublicarEmbarcacionesController@postPublicar',
				'as' =>'publicarEmbarcacion'
			]);

		//Maquinaria Agricola:
			Route::get('Maquinaria-Agricola', [
					'uses' => 'PublicarMaquinariaAgricolaController@vehiculo',
					'as' =>'publicarMaquinariaAgricola'
			]);
		
			Route::post('Maquinaria-Agricola', [
				'uses' => 'PublicarMaquinariaAgricolaController@postPublicar',
				'as' =>'publicarMaquinariaAgricola'
			]);

		//Maquinaria Pesada:
			Route::get('Maquinaria-Pesada', [
					'uses' => 'PublicarMaquinariaPesadaController@vehiculo',
					'as' =>'publicarMaquinariaPesada'
			]);
		
			Route::post('Maquinaria-Pesada', [
				'uses' => 'PublicarMaquinariaPesadaController@postPublicar',
				'as' =>'publicarMaquinariaPesada'
			]);

		//Trailers:
			Route::get('Trailers', [
					'uses' => 'PublicarTrailerController@vehiculo',
					'as' =>'publicarTrailer'
			]);
		
			Route::post('Trailers', [
				'uses' => 'PublicarTrailerController@postPublicar',
				'as' =>'publicarTrailer'
			]);		
	
		//Estas rutas las llamo desde el archivo ajaxCars.js:
			
			//Función "dependienteModelosMotos(valor)" :)
			Route::get('ModelosMotos/{valor}/Tipo/{tipo}/Subtipo/{subtipo}','MaestroController@dependienteModelosMotos');
			
			//Función "dependienteModelos(valor)" :)
			Route::get('Modelos/{valor}/Tipo/{tipo}','MaestroController@dependienteModelos');

			//Función "dependienteMarcas(valor)" :)
			Route::get('Marcas/{valor}/Tipo/{tipo}','MaestroController@dependienteMarcas');
			
			//Función "dependienteMarcasMotos(valor)" :)
			Route::get('MarcasMotos/{valor}/Tipo/{tipo}','MaestroController@dependienteMarcasMotos');			

			//Función "dependienteCilindrada(valor)" :)
			Route::get('Cilindrada/{valor}','MaestroController@dependienteCilindrada');				
		
			//Función "buscarCiudadPorPais(lng_idpais)" :)
			Route::get('Pais/{pais}','MaestroController@dependiente3');
			
			//Función "buscarCiudadPorLetra(letra)" :)
			Route::get('Ciudades/{letra}/Pais/{pais}','MaestroController@dependiente2');
			
			include 'rutas_buscador.php';
			include 'rutas_paginador.php';

		});
 });

/***********************************************************************************/

// Authentication routes...
Route::get('Iniciar-Sesion', [
				'uses' => 'Auth\AuthController@getLogin',
				'as' =>'login'
]);
Route::post('Iniciar-Sesion', [
				'uses' => 'Auth\AuthController@postLogin',
				'as' =>'login'
]);
Route::get('Salir', [
				'uses' => 'Auth\AuthController@getLogout',
				'as' =>'logout'
]);

// Registration routes...
Route::get('Crear-Cuenta', [
				'uses' => 'Auth\AuthController@getRegister',
				'as' =>'register'
]);

Route::post('Crear-Cuenta', 'Auth\AuthController@postRegister');





