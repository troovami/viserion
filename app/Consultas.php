<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use DB;

class Consultas extends Model
{	
	//Estatus Activas:
	const STATUS_ADMIN = 708;
	const STATUS_USER = 706;
	
	protected function querysValor($consulta,$valor){

		switch ($consulta) {
				
			case 'cuenta_usuario':
				$cuenta_usuario = DB::table('tbl_personas as per')
				->join('cat_paises as p', 'p.id', '=', 'per.lng_idpais')
				->join('cat_datos_maestros as dm', 'dm.id', '=', 'per.lng_idgenero')				 
				->where('per.id', '=', $valor)
				->Where(function ($query) {
					$query->where('p.bol_eliminado', '=', 0);
				})
				->select('per.*','per.created_at as fecha_inscripcion','per.dmt_fecha_nacimiento as fecha_nacimiento','dm.str_descripcion as genero','p.str_paises as pais','p.blb_img as blb_bandera','p.str_codarea')
				->get();
				return $cuenta_usuario;
			break;			
							
            case 'vehiculos':
                 $vehiculos = DB::table('tbl_vehiculos as v')
		        ->where('v.id', '=', $valor)
            	->Where(function ($query) {
            		$query->where('v.bol_eliminado', '=', 0);
            	})
            	->Where(function ($query) {
            		//$id = \Auth::user()->id;
            		$query->where('v.status_admin', '=', Consultas::STATUS_ADMIN);
            	})
            	->Where(function ($query) {
            		//$id = \Auth::user()->id;
            		$query->where('v.status_user', '=', Consultas::STATUS_USER);
            	}) 	        
		        ->select('v.*')
		        ->get();
                return $vehiculos;
            break;
                                  
            case 'vehiculosEditar':
            	$vehiculos = DB::table('tbl_vehiculos as v')
            	->where('v.id', '=', $valor)         	
            	->Where(function ($query) {
            		$id = \Auth::user()->id;
            		$query->where('v.lng_idpersona', '=', $id);
            	})
            	->Where(function ($query) {
            		$query->where('v.bol_eliminado', '=', 0);
            	})
            	->Where(function ($query) {
            		//$id = \Auth::user()->id;
            		$query->where('v.status_admin', '=', Consultas::STATUS_ADMIN);
            	})
            	->Where(function ($query) {
            		//$id = \Auth::user()->id;
            		$query->where('v.status_user', '=', Consultas::STATUS_USER);
            	})            	
            	->select('v.*')
            	->get();
            	return $vehiculos;
            break;            

            case 'vehiculoDetalle':
			    $vehiculoDetalle = DB::table('tbl_vehiculos as v')
			    ->leftjoin('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
			    ->leftjoin('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
			    ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
		        ->leftjoin('cat_datos_maestros as dm4', 'dm4.id', '=', 'v.lng_idestereo')
		        ->leftjoin('cat_datos_maestros as dm5', 'dm5.id', '=', 'v.lng_idtapizado')
		        ->leftjoin('cat_datos_maestros as dm6', 'dm6.id', '=', 'v.lng_idvidrios')
		        ->leftjoin('cat_datos_maestros as dm7', 'dm7.id', '=', 'v.lng_idtraccion')
		        ->leftjoin('cat_datos_maestros as dm8', 'dm8.id', '=', 'v.lng_idcombustible')
		        ->join('cat_datos_maestros as dm9', 'dm9.id', '=', 'v.lng_idnegociable')
		        ->join('cat_datos_maestros as dm10', 'dm10.id', '=', 'v.lng_idfinanciamiento')
		        ->join('cat_datos_maestros as dm11', 'dm11.id', '=', 'v.lng_idchocado')		        
		        //->join('cat_datos_maestros as dm12', 'dm12.id', '=', 'v.lng_idunicodueno')		        
		        ->join('cat_datos_maestros as dm13', 'dm13.id', '=', 'v.lng_idmotorreparado')
		        ->join('cat_datos_maestros as dm14', 'dm14.id', '=', 'v.lng_idcilindrada')		        
		        ->join('cat_datos_maestros as dm15', 'dm15.id', '=', 'v.lng_idsubtipo_vehiculo')		        
			    ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')			    
			    ->join('cat_ciudades as ciu', 'ciu.id', '=', 'v.lng_idciudad')			    
			    ->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
			    ->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
			    ->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
		        ->join('tbl_personas as per', 'per.id', '=', 'v.lng_idpersona')
		        ->join('cat_paises as p2', 'p2.id', '=', 'per.lng_idpais')
			    ->where('v.id', '=', $valor)
			    ->Where(function ($query) {
			    	$query->where('ima.int_peso', '=', 1);
			    })
			    ->Where(function ($query) {
			    	$query->where('v.bol_eliminado', '=', 0);
			    })			    
			    ->select('v.*','v.id as lng_idvehiculo','per.name as usuario','p2.str_paises as pais_persona','p.str_abreviatura','p2.blb_img as bandera_persona','per.str_nombre as nombre_persona','per.str_apellido as apellido_persona','per.email',
		            'per.str_ididentificacion','per.str_telefono','per.str_twitter','per.str_facebook','per.str_instagram', 'ma.blb_img as logo', 'ma.id as lng_idmarca',
		            'per.blb_img as ima_persona','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 
		            'dm2.str_descripcion as direccion','dm3.str_descripcion as color', 'dm4.str_descripcion as estereo',
		            'dm5.str_descripcion as tapizado', 'dm6.str_descripcion as vidrios', 'dm7.str_descripcion as traccion',
		            'dm8.str_descripcion as combustible', 'dm9.str_descripcion as negociable', 
		            'dm10.str_descripcion as financiamiento', 'dm11.str_descripcion as chocado', 
		            
			    	'v.lng_idunicodueno as unicodueno',
			    		//'dm12.str_descripcion as unicodueno',
			    		
			    	'dm13.str_descripcion as reparado', 'dm14.str_descripcion as cilindrada', 'dm15.str_descripcion as subtipo',
		            'p.str_paises as pais', 'ciu.str_ciudad as ciudad', 'ma.str_marca as marca', 'per.created_at as fecha_inscripcion',
		            'mo.str_modelo as modelo')
			    ->get();
			    return $vehiculoDetalle;
            break;

			case 'imagenes':
				    $imagenes = DB::table('tbl_imagenes_vehiculos as ima')
				    ->where('ima.lng_idvehiculo', '=', $valor)
				    ->Where(function ($query) {
				    	$query->where('ima.bol_eliminado', '=', 0);
				    })
                    ->Where(function ($query) {
                        $query->where('ima.int_peso', '=', 2);
                    })                      			    
				    ->select('ima.int_peso','ima.blb_img as imagen')
				    ->get();
				return $imagenes;
			break;
			
			case 'imagenes2':
				$imagenes = DB::table('tbl_imagenes_vehiculos as ima')
				->where('ima.lng_idvehiculo', '=', $valor)
				->Where(function ($query) {
					$query->where('ima.bol_eliminado', '=', 0);
				})

				->select('id','ima.int_peso','ima.blb_img as imagen')
				->get();
				return $imagenes;
			break;			

			case 'caracteristicas':
			        $caracteristicas = DB::table('tbl_detalles_vehiculos as dv')
			        ->join('cat_datos_maestros as dm', 'dm.id', '=', 'dv.lng_idcaracteristica')
			        ->where('dv.lng_idvehiculo', '=', $valor)
			        ->Where(function ($query) {
			        	$query->where('dv.bol_eliminado', '=', 0);
			        })			        
			        ->select('dm.str_descripcion','dm.str_tipo')
			        ->get();
				return $caracteristicas;
			break;

			case 'maestro':
				$maestro = DB::table('cat_datos_maestros')
				->where('str_tipo', $valor)
				->Where(function ($query) {
					$query->where('bol_eliminado', '=', 0);
				})				
				->lists('str_descripcion','id');
				return $maestro;
			break;

			case 'maestro2':
				$maestro2 = DB::table('cat_datos_maestros')
				->where('str_tipo', $valor)
				->Where(function ($query) {
					$query->where('str_caracteristica', '=', 'automoviles');
				})
				->Where(function ($query) {
					$query->where('bol_eliminado', '=', 0);
				})
				->lists('str_descripcion','id');
				return $maestro2;
			break;
			
			case 'maestro3':
				$maestro2 = DB::table('cat_datos_maestros')
				->where('str_tipo', $valor)
				->Where(function ($query) {
					$query->where('str_caracteristica', '=', 'motocicletas');
				})
				->Where(function ($query) {
					$query->where('bol_eliminado', '=', 0);
				})
				->lists('str_descripcion','id');
				return $maestro2;
			break;
			
			case 'publicaciones_usuario':
				$publicaciones_usuario = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.id, lng_idpersona, m.str_marca ,mo.str_modelo, int_ano, str_precio_venta, 
										v.str_moneda, p.str_abreviatura,
										p.str_paises, dm.str_descripcion as status_admin, dm2.str_descripcion as status_user, dmt_fecha_publicacion, v.created_at,
										dmt_fecha_publicacion_fin, ima.blb_img as imagen
										FROM tbl_vehiculos as v
										join cat_datos_maestros dm on dm.id = v.status_admin
										join cat_datos_maestros dm2 on dm2.id = v.status_user
										join tbl_modelos as mo on mo.id = v.lng_idmodelo
										join cat_marcas as m on m.id = mo.lng_idmarca
										join cat_paises as p on p.id = v.lng_idpais
										join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id and ima.int_peso = 1
										where v.lng_idpersona = ".$valor."
										order by v.id desc");
			
				return $publicaciones_usuario;
			break;

			case 'totalPublicaciones_usuario':
				$totalPublicaciones_usuario = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT count(v.id) as total
								from tbl_vehiculos as v
								where v.lng_idpersona = ".$valor);
			
				return $totalPublicaciones_usuario;
			break;

			case 'paisesTiposPublicados':
				$paises = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT p.id, p.str_paises, p.blb_img AS bandera, p.str_abreviatura,COUNT(*) AS total
							from tbl_vehiculos as v
							join cat_paises p on p.id = v.lng_idpais
							where v.lng_idtipo_vehiculo = ".$valor." 
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by p.str_paises
							order by p.str_paises");
			
				return $paises;
			break;

			case 'marcasTiposPublicados':
			
				$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  m.id, m.str_marca, m.blb_img as logo, count(str_marca) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor." 
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							and  m.bol_eliminado = 0
							group by str_marca
							order by str_marca");
			
				return $marcas;
			break;
				
			case 'marcasTiposPublicadas':

				$marcas = DB::select("select m.id, m.str_marca 
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_marca
							order by str_marca");
				
				return $marcas;
			break;
			
			case 'marcasPaisPublicadas':
			
				$marcas = DB::select("select m.id, m.str_marca, m.blb_img as logo, count(str_marca) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_marca
							order by str_marca");
			
				return $marcas;
			break;
			
			case 'marcasCiudadPublicadas':
			
				$marcas = DB::select("select m.id, m.str_marca, m.blb_img as logo, count(str_marca) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_marca
							order by str_marca");
			
				return $marcas;
			break;

			case 'modelosCiudadPublicadas':
			
				$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from tbl_modelos as mo
							join cat_marcas as m on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_modelo
							order by str_modelo");
			
				return $modelos;
			break;

			case 'coloresCiudadPublicadas':
			
				$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  
							v.lng_idcolor, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v 
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_descripcion
							order by str_descripcion");
			
				return $colores;
			break;
			
			case 'coloresMarcasPublicadas':
					
				$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where ma.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
					
				return $colores;
			break;
			
			case 'coloresModeloPublicadas':
					
				$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, mo.str_modelo, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by mo.str_modelo , dm.str_descripcion
							order by mo.str_modelo, dm.str_descripcion");
					
				return $colores;
			break;			
			
			case 'modelosPaisPublicadas':
					
				$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, m.str_marca, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from tbl_modelos  as mo
							join cat_marcas as m on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_modelo
							order by str_modelo");
					
				return $marcas;
			break;
										
			case 'marcasTipos':
				$marcas = DB::table('cat_marcas as m')
				->join('tbl_tipos_marcas as tm', 'tm.lng_idmarca', '=', 'm.id')
				->join('cat_datos_maestros as dm', 'dm.id', '=', 'tm.lng_idtipo')
				->where('dm.id', '=', $valor)
				->Where(function ($query) {
					$query->where('m.bol_eliminado', '=', 0);
				})				
				->orderBy('m.str_marca')
				->select('m.str_marca','m.id')
				->lists('str_marca','id');
				return $marcas;
			break;

			case 'marcasTipoPublicadas':
				$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  ma.id, ma.str_marca, ma.blb_img as logo, count(str_marca) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join tbl_tipos_marcas tm on tm.lng_idmarca = ma.id and tm.lng_idtipo = ".$valor."
							where v.lng_idtipo_vehiculo = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by ma.str_marca
							order by ma.str_marca");
			
				return $marcas;
				 
			break;
			
			case 'marcasPaisPublicados':
				$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  ma.id, ma.str_marca, ma.blb_img as logo, count(str_marca) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join tbl_tipos_marcas tm on tm.lng_idmarca = ma.id 
							where v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by ma.str_marca
							order by ma.str_marca");
					
				return $marcas;
					
			break;			
							
			case 'modelosTipoPublicados':
				$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
            				where v.lng_idtipo_vehiculo = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca, mo.str_modelo
							order by ma.str_marca, mo.str_modelo");
			
				return $modelos;
				 
			break;

			case 'modelosPaisPublicados':
				$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
            				where v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca, mo.str_modelo
							order by ma.str_marca, mo.str_modelo");
			
				return $modelos;
				 
			break;

			case 'modelosCiudadPublicados':
				$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
            				where v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca, mo.str_modelo
							order by ma.str_marca, mo.str_modelo");
			
				return $modelos;
				 
			break;					
			
            case 'modelosFiltro':
            	$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
            				where ma.id = ".$valor." 
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca, mo.str_modelo
							order by ma.str_marca, mo.str_modelo");
            
            	return $modelos;
            	
            break;
                  
            case 'ciudades':
            
            	$ciudades = DB::select("select id, str_ciudad from cat_ciudades where lng_idpais = ".$valor." and bol_eliminado = 0 ");
            
            	return $ciudades;
            break;
             
            case 'ciudadesTiposPublicados':
            	$ciudades = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT c.id, c.str_ciudad, p.id as idpais, p.blb_img AS bandera, COUNT( c.id ) AS total
						FROM cat_ciudades c
						JOIN tbl_vehiculos v ON v.lng_idciudad = c.id
						JOIN cat_paises p ON p.id = c.lng_idpais
            			where v.lng_idtipo_vehiculo = ".$valor." 
            			and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             					
						GROUP BY c.str_ciudad, c.id
						ORDER BY c.str_ciudad, c.id");
            
            	return $ciudades;
            break;
            	
            case 'ciudadesPaisPublicados':
            
            	$ciudades = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT c.id, c.str_ciudad, p.id as idpais, p.blb_img AS bandera, COUNT( c.id ) AS total 
						from cat_ciudades c
						join tbl_vehiculos as v on v.lng_idciudad = c.id
            			join cat_paises p on p.id = c.lng_idpais
						where c.lng_idpais = ".$valor."
						and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 								
						group by c.id, c.str_ciudad
						order by c.str_ciudad");
            
            	return $ciudades;
            break;                           	         
                                             
            case 'cilindrada':
            	$cilindrada = DB::table('cat_datos_maestros')
            	->where('str_caracteristica', '=', $valor)
            	->Where(function ($query) {
            		$query->where('str_tipo', '=', 'desplazamiento_vehiculos');
            	})
            	->Where(function ($query) {
            		$query->where('bol_eliminado', '=', 0);
            	})            	
            	->select('str_descripcion','id')
            	->lists('str_descripcion','id');
            	return $cilindrada;
            break;
            
            case 'cilindradaTipos':
            	$cilindrada = DB::table('cat_datos_maestros')
            	->where('str_caracteristica2', $valor)
            	->Where(function ($query) {
            		$query->where('str_tipo', '=', 'desplazamiento_vehiculos');
            	})
            	->Where(function ($query) {
            		$query->where('bol_eliminado', '=', 0);
            	})            	
            	->select('str_descripcion','id')
            	->lists('str_descripcion','id');
            	return $cilindrada;
            break;
            
            case 'coloresTipoPublicados':
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
							from tbl_vehiculos as v
							join cat_datos_maestros dm on dm.id = v.lng_idcolor
            				where v.lng_idtipo_vehiculo = ".$valor." 
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by v.lng_idcolor
							order by count(v.lng_idcolor) desc");
            	 
            	return $colores;
            break;
            
            case 'AnosTipoPublicados':
          	            	
		            	$ano = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT int_ano, count(v.int_ano) as total
				            	FROM tbl_vehiculos as v
		            			where v.lng_idtipo_vehiculo = ".$valor."
				            	and v.bol_eliminado = 0
				            	and v.status_admin = ".Consultas::STATUS_ADMIN."
		            			and v.status_user = ".Consultas::STATUS_USER."
            					group by v.int_ano
            					order by v.int_ano desc");

            	return $ano;
            break;            
            
            case 'coloresPaisPublicadas':
            		
            	$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT
							v.lng_idcolor, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_descripcion
							order by str_descripcion");
            		
            	return $marcas;
            break;
                                    
            case 'placas':
            	$placas = DB::select("SELECT id, str_placa
            			FROM tbl_vehiculos as v
            			WHERE str_placa = '".$valor."' 
            			and status_admin <> 711
            					and bol_eliminado = 0
            					");
            		
            	return $placas;
            		
            break;            
                        
        }
	}

    protected function querysValor2($consulta,$valor,$valor2){

        switch ($consulta) {

        	case 'marcasTipoPaisPublicados':
        	
        		$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  m.id, m.str_marca, m.blb_img as logo, count(str_marca) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_marca
							order by str_marca");
        	
        		return $marcas;
        	break;
        	
        	case 'marcasTipoCiudadPublicados':
        		 
        		$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  m.id, m.str_marca, m.blb_img as logo, count(str_marca) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_marca
							order by str_marca");
        		 
        		return $marcas;
        	break;

        	case 'modelosTipoCiudadPublicados':
        		 
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  
							v.lng_idmodelo, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from tbl_modelos as mo
							join cat_marcas as m on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_modelo
							order by str_modelo");
        		 
        		return $modelos;
        	break;

        	case 'coloresTipoCiudadPublicados':
        		 
        		$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  
							v.lng_idcolor, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v 
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_descripcion
							order by str_descripcion");
        		 
        		return $colores;
        	break;
        	
        	case 'marcasPaisCiudadPublicados':
        		 
        		$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  m.id, m.str_marca, m.blb_img as logo, count(str_marca) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idpais= ".$valor2." and v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_marca
							order by str_marca");
        		 
        		return $marcas;
        	break;

        	case 'modelosPaisCiudadPublicados':
        		 
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  v.lng_idmodelo, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from tbl_modelos as mo
							join cat_marcas as m on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idpais= ".$valor2." and v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_modelo
							order by str_modelo");
        		 
        		return $modelos;
        	break;

        	case 'coloresPaisCiudadPublicados':
        		 
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  
							v.lng_idcolor, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v 
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idpais = ".$valor2." and v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_descripcion
							order by str_descripcion");
        		 
        		return $modelos;
        	break;        	   	
        	
        	case 'modelosTipoPaisPublicados':
        		 
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, m.str_marca, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by str_modelo
							order by str_modelo");
        		 
        		return $modelos;
        	break;        	
        	        	
        	case 'coloresTipoPaisPublicados':
        		 
        		$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo,v.lng_idcolor, dm.str_descripcion,
							count(lng_idcolor) as total
							from tbl_vehiculos as v
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 									
							group by v.lng_idcolor
							order by v.lng_idcolor");
        		 
        		return $colores;
        	break;     
        	
        	case 'coloresPaisMarcaPublicados':
        		 
        		$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where ma.id = ".$valor." and v.lng_idpais = ".$valor2."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
        		 
        		return $colores;
        	break;        	
        		
        	case 'ciudadesTipoPaisPublicados':
        	
        		$ciudades = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT c.id, c.str_ciudad, p.id as idpais, p.blb_img AS bandera, 
        				COUNT( c.id ) AS total        				
						from cat_ciudades c
						join tbl_vehiculos as v on v.lng_idciudad = c.id
        				join cat_paises p on p.id = c.lng_idpais
						where c.lng_idpais = ".$valor." and v.lng_idtipo_vehiculo = ".$valor2."
						and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 								
						group by c.id, c.str_ciudad
						order by c.str_ciudad");
        	
        		return $ciudades;
        	break;  	     	
        		
            case 'ciudades':

                $ciudades = DB::select("select id, str_ciudad 
                	from cat_ciudades 
                	where lng_idpais = ".$valor2." 
                	AND str_ciudad LIKE '%".$valor."%' and bol_eliminado = 0");

                return $ciudades;

            case 'ciudadesBuscadorLetra':

                $ciudades = DB::select("select c.id, c.str_ciudad 
                	from cat_ciudades as c
                	join tbl_vehiculos v on v.lng_idciudad = c.id 
                	where c.lng_idpais = ".$valor2." 
                	AND c.str_ciudad LIKE '%".$valor."%' and c.bol_eliminado = 0
					group by c.id, c.str_ciudad
					order by c.str_ciudad");

                return $ciudades;

            break;
                     
            case 'marcasSubtipos':
           
            	$marcas = DB::select("select m.str_marca, m.id
						from cat_marcas as m
						join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
						join cat_datos_maestros as dm on dm.id = tm.lng_idtipo
						join tbl_subtipos_marcas as stm on stm.lng_idtipo_marca = tm.id
						where stm.lng_idsubtipo = ".$valor."
						and dm.id = ".$valor2."
						and m.bol_eliminado = 0
						order by m.str_marca");
            
            	return $marcas;
            	
            break;

            case 'modelos':

            	$modelos = DB::select("select mo.str_modelo, mo.id
						from tbl_modelos as mo
						where mo.lng_idmarca = ".$valor."
						and mo.lng_idtipo_equipo = ".$valor2."
						and mo.bol_eliminado = 0
						order by mo.str_modelo");


                return $modelos;

            break;
            
            case 'modelosFiltro2':
            	$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
            				where ma.id = ".$valor." and v.lng_idtipo_vehiculo = ".$valor2."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca, mo.str_modelo
							order by ma.str_marca, mo.str_modelo");
            
            	return $modelos;
            
            break; 

            case 'modelosPaisMarcaPublicados':
            	$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
            				where ma.id = ".$valor." and v.lng_idpais = ".$valor2."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca, mo.str_modelo
							order by ma.str_marca, mo.str_modelo");
            
            	return $modelos;
            
            break;

            case 'modelosCiudadMarcaPublicados':
            	$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
            				where ma.id = ".$valor." and v.lng_idciudad = ".$valor2."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca, mo.str_modelo
							order by ma.str_marca, mo.str_modelo");
            
            	return $modelos;
            
            break;
                                   
            case 'coloresTipoMarcaPublicados':
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where ma.id = ".$valor." and v.lng_idtipo_vehiculo = ".$valor2."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             						
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
            
            	return $colores;
            
            break;
            
            case 'coloresTipoModeloPublicados':
	            $colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
	            	from tbl_vehiculos as v
	            	join cat_datos_maestros dm on dm.id = v.lng_idcolor
	            	where v.lng_idmodelo = ".$valor." 
	            	and v.lng_idtipo_vehiculo = ".$valor2."
            		and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	            			
	            	group by v.lng_idcolor
	            	order by count(v.lng_idcolor) desc");
            	
            	return $colores;
            
            break;
            
            case 'coloresPaisModeloPublicados':
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
	            	from tbl_vehiculos as v
	            	join cat_datos_maestros dm on dm.id = v.lng_idcolor
	            	where v.lng_idmodelo = ".$valor." 
	            	and v.lng_idpais = ".$valor2."
            		and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 		            			
	            	group by v.lng_idcolor
	            	order by count(v.lng_idcolor) desc");
            	                       
            	return $colores;
            
            break;            
            
            case 'coloresCiudadMarcaPublicados':
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where ma.id = ".$valor." and v.lng_idciudad = ".$valor2."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	            						
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
            
            	return $colores;
            
            break;
            
            case 'coloresCiudadModelosPublicados':
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
			            	from tbl_vehiculos as v
			            	join cat_datos_maestros dm on dm.id = v.lng_idcolor
			            	where v.lng_idmodelo = ".$valor." 
			            	and v.lng_idciudad = ".$valor2."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 				            			
			            	group by v.lng_idcolor
			            	order by count(v.lng_idcolor) desc");

            	return $colores;
            
            break;
            
            case 'coloresMarcaModelosPublicados':
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
	            	from tbl_vehiculos as v
	            	join cat_datos_maestros dm on dm.id = v.lng_idcolor
            		join tbl_modelos mo on mo.id = v.lng_idmodelo
					join cat_marcas ma on ma.id = mo.lng_idmarca            			            			
	            	where v.lng_idmodelo = ".$valor." 
	            	and ma.id = ".$valor2."
            		and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 		            			
	            	group by v.lng_idcolor
	            	order by count(v.lng_idcolor) desc");
            
            	return $colores;
            
            break;            

        }
    }   

	protected function querys($consulta){

        switch ($consulta) {
        	        	
        	case 'anosPublicados':
        		$anos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT int_ano
					FROM tbl_vehiculos as v					
					where v.bol_eliminado = 0
	                and v.status_admin = ".Consultas::STATUS_ADMIN."
	                and v.status_user = ".Consultas::STATUS_USER."          				
					group by v.int_ano
					order by v.int_ano desc");
        		 
        		return $anos;
        	break;
        		
        	case 'coloresPublicados':
        		$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
							from tbl_vehiculos as v
							join cat_datos_maestros dm on dm.id = v.lng_idcolor
							where v.bol_eliminado = 0            				
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	        				
							group by v.lng_idcolor
							order by count(v.lng_idcolor) desc");
        		 
        		return $colores;
        	break;        	
        	                                                           
        	case 'tiposPublicados':
        	$tipos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT dm.id, dm.str_descripcion, 
						dm.str_caracteristica2, count(dm.id) as total
						from tbl_vehiculos as v
						join cat_datos_maestros as dm on v.lng_idtipo_vehiculo = dm .id
						where dm.str_tipo = 'tipos'
						and dm.int_peso > 0
						and dm.bol_eliminado = 0
        			and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	        			
						group by dm.str_descripcion, dm.id
						order by dm.int_peso, dm.id");
        	
        		return $tipos;
        	break;
        		
            case 'menu':
                $menu = DB::table('cat_datos_maestros')
		    	->where('str_tipo', 'tipos')
		    	->Where(function ($query) {
		    		$query->where('int_peso', '>', 0);
		    	})
		    	->Where(function ($query) {
		    		$query->where('bol_eliminado', '=', 0);
		    	})		    	
                ->orderBy('int_peso')
		    	->select('str_descripcion as titulo','str_caracteristica as detalle','str_caracteristica2 as icono','str_caracteristica3 as ruta')
		    	->get();
                return $menu;
            break;

            case 'enfriamiento':
                $enfriamiento = DB::table('cat_datos_maestros')
                ->where('str_tipo', 'enfriamiento_vehiculos')
                ->Where(function ($query) {
                	$query->where('bol_eliminado', '=', 0);
                })                
                ->lists('str_descripcion','id');
                return $enfriamiento;
            break;

            case 'modelos':
                $modelos = DB::table('tbl_modelos')
                ->Where(function ($query) {
                	$query->where('bol_eliminado', '=', 0);
                })
                ->orderBy('str_modelo')            
                ->lists('str_modelo','id');
                return $modelos;
            break;
            
            case 'modelos2':
	            $modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, m.str_marca, mo.str_modelo, m.blb_img, count(str_modelo) as total
								from tbl_modelos  as mo
								join cat_marcas as m on mo.lng_idmarca = m.id
								join tbl_vehiculos as v on v.lng_idmodelo = mo.id
								where v.bol_eliminado = 0
	            		and v.status_admin = ".Consultas::STATUS_ADMIN."
	                	and v.status_user = ".Consultas::STATUS_USER."
								group by str_modelo
								order by str_modelo");
            	return $modelos;
            break;
            

            case 'modelosCarros':
            	$modelos = DB::table('tbl_modelos')
            	->Where(function ($query) {
            		$query->where('lng_idtipo_equipo', '=', 153);
            	})            	
            	->Where(function ($query) {
            		$query->where('bol_eliminado', '=', 0);
            	})
            	->orderBy('str_modelo')
            	->lists('str_modelo','id');
            	return $modelos;
            break;
            	
            	case 'modelosMotos':
            		$modelos = DB::table('tbl_modelos')
            		->Where(function ($query) {
            			$query->where('lng_idtipo_equipo', '=', 559);
            		})            		
            		->Where(function ($query) {
            			$query->where('bol_eliminado', '=', 0);
            		})
            		->orderBy('str_modelo')
            		->lists('str_modelo','id');
            		return $modelos;
            	break;            	

            case 'paises':
                $paises = DB::table('cat_paises as p')
                ->join('cat_ciudades as c', 'c.lng_idpais', '=', 'p.id')
                ->Where(function ($query) {
                	$query->where('p.bol_eliminado', '=', 0);
                })                
                ->orderBy('p.str_paises')
                ->select('p.str_paises','p.id')
                ->lists('p.str_paises','p.id');
                return $paises;
            break;
                        
            case 'paisesLista':
                $paises = DB::table('cat_paises as p')
               
                ->Where(function ($query) {
                	$query->where('p.bol_eliminado', '=', 0);
                })                
                ->orderBy('p.str_paises')
                ->select( 'p.id', 'p.str_paises','p.blb_img as imagen')
                ->get();
                return $paises;
            break;        

            case 'paisesPublicados':
                $paises = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT p.id, p.str_paises, p.blb_img AS bandera, p.str_abreviatura,COUNT(*) AS total 
                		from cat_paises as p 
                		join tbl_vehiculos as v on p.id = v.lng_idpais 
                		where v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	                 		
                		group by p.str_paises,p.id
                		order by p.str_paises,p.id ");
                
                return $paises;
            break;
                       
            case 'ciudadesPublicados':
            	$ciudades = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT c.id, c.str_ciudad, p.id as idpais, p.blb_img AS bandera, COUNT( c.id ) AS total
						FROM cat_ciudades c
						JOIN tbl_vehiculos v ON v.lng_idciudad = c.id
						JOIN cat_paises p ON p.id = c.lng_idpais
            			where v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
						GROUP BY c.str_ciudad, c.id
						ORDER BY c.str_ciudad, c.id");
            
            	return $ciudades;
            break;
            
            case 'marcasPublicados':
            	$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT m.id, m.str_marca, m.blb_img as logo, COUNT( m.id ) AS total
						FROM cat_marcas as m
						JOIN tbl_modelos as mo ON mo.lng_idmarca = m.id
						JOIN tbl_vehiculos as v ON v.lng_idmodelo = mo.id
						where v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
						GROUP BY m.str_marca, m.id
						ORDER BY m.str_marca, m.id");
            
            	return $marcas;
            break;
                                  
            case 'marcasPublicadosHoy':
            	$marcas = DB::select("SELECT * FROM `marcashoy` WHERE 1");
            
            	return $marcas;
            break;            

            case 'modelosPublicados':
            	$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, ma.str_marca, mo.str_modelo, ma.blb_img, count(str_modelo) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							where v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
							group by ma.str_marca, mo.str_modelo, v.lng_idmodelo
							order by ma.str_marca, mo.str_modelo, v.lng_idmodelo");
            
            	return $modelos;
            break;                   
                        
        }
    }
    
    protected function querysValores3($consulta,$valor,$valor2,$valor3){
    	
    	switch ($consulta) {
	    	case 'modelos':
	    		 
	    		$modelos = DB::select("select mo.str_modelo, mo.id
							from tbl_modelos as mo
							where mo.lng_idmarca = ".$valor."
							and mo.lng_idtipo_equipo = ".$valor2."
							and mo.lng_idclasificacion = ".$valor3."
							and mo.bol_eliminado = 0
							order by mo.str_modelo");
	    		 	    		 
	    		return $modelos;
	    		 
	    	break;
	    	
    	}
    }       
    
    protected function querysValor3($consulta,$limit,$offset,$and){

        switch ($consulta) {      
        		
            case 'total_vehiculos':
                
                $total_vehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT count(*) as total 
                		from tbl_vehiculos as v 
                		where v.bol_eliminado = 0 
                		and status_admin = ".Consultas::STATUS_ADMIN."
                		and status_user = ".Consultas::STATUS_USER." ");
                
                return $total_vehiculos;

            break;

            case 'todosLosVehiculos':
                                
            	$todosLosVehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.id,v.lng_idpais,v.lng_idmodelo,
            			v.lng_idciudad, v.bol_eliminado, v.lng_idtipo_vehiculo,v.int_ano,v.str_moneda,v.str_precio_venta,
            			v.str_video, v.str_comentario,  p.blb_img as bandera, p.str_paises as pais, p.str_abreviatura,
            			ciu.str_ciudad as ciudad, ma.str_marca as marca, mo.str_modelo as modelo
                    from tbl_vehiculos as v                               			
            		join cat_paises as p on p.id = v.lng_idpais            			
                    join tbl_modelos as mo on mo.id =  v.lng_idmodelo
            		join cat_marcas as ma on ma.id =  mo.lng_idmarca
            		      	
                    join cat_ciudades as ciu on ciu.id =  v.lng_idciudad
            		where v.bol_eliminado = 0
                	and status_admin = ".Consultas::STATUS_ADMIN."
                	and status_user = ".Consultas::STATUS_USER."             			
            		order by v.id desc limit ".$limit." offset ".$offset." ");
            	
                return $todosLosVehiculos;
                //join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id  and ima.int_peso = 1

            break;

            case 'buscarVehiculos':
                                
            	$buscarVehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.id,v.lng_idpais,v.lng_idmodelo,
            			v.lng_idciudad, v.bol_eliminado, v.lng_idtipo_vehiculo,v.int_ano,v.str_moneda,v.str_precio_venta,
            			v.str_video, v.str_comentario, p.str_paises as pais, p.str_abreviatura,
            			ciu.str_ciudad as ciudad, ma.str_marca as marca, mo.str_modelo as modelo
                    from tbl_vehiculos as v                               			
            		join cat_paises as p on p.id = v.lng_idpais            			
                    join tbl_modelos as mo on mo.id =  v.lng_idmodelo
            		join cat_marcas as ma on ma.id =  mo.lng_idmarca
            		         	
                    join cat_ciudades as ciu on ciu.id =  v.lng_idciudad
            		where v.bol_eliminado = 0 ".$and."            	
            		and status_admin = ".Consultas::STATUS_ADMIN."
                	and status_user = ".Consultas::STATUS_USER."                    
            		order by v.id desc limit ".$limit." offset ".$offset." ");                
                
                return $buscarVehiculos;

                //join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id  and ima.int_peso = 1 
                
            break;

            case 'total_buscarVehiculos':
                            	
            	$total_buscarVehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT count(*) as total
                    from tbl_vehiculos as v             			          			
            		where v.bol_eliminado = 0 ".$and."
                    and status_admin = ".Consultas::STATUS_ADMIN."
                	and status_user = ".Consultas::STATUS_USER."
            		order by v.id desc ");            	
            	            	
                return $total_buscarVehiculos;

            break;                              
            
            case 'ultimosVehiculos'://Carros
            
            	$ultimosVehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.id,v.lng_idpais,v.lng_idmodelo,
            			v.lng_idciudad, v.bol_eliminado, v.lng_idtipo_vehiculo,v.int_ano,v.str_moneda,v.str_precio_venta,
            			ima.blb_img as imagen, p.str_paises as pais, p.str_abreviatura, ciu.str_ciudad as ciudad,
            			ma.str_marca as marca, mo.str_modelo as modelo
                    from tbl_vehiculos as v            				              				            			
            		join cat_paises as p on p.id = v.lng_idpais
                    join tbl_modelos as mo on mo.id =  v.lng_idmodelo
            		join cat_marcas as ma on ma.id =  mo.lng_idmarca
					join imagenppal as ima on ima.lng_idvehiculo = v.id           
                    join cat_ciudades as ciu on ciu.id =  v.lng_idciudad
            		where v.bol_eliminado = 0
            		and v.lng_idtipo_vehiculo = 153
            		and status_admin = ".Consultas::STATUS_ADMIN."
                	and status_user = ".Consultas::STATUS_USER."             			
                    order by v.id desc limit 9 offset 0");
            
            	return $ultimosVehiculos;
            //join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id and ima.int_peso = 1 
            	
            break;
            	
            case 'ultimosVehiculos2'://Motocicletas
            	
            		$ultimosVehiculos2 = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.id,v.lng_idpais,v.lng_idmodelo,
            			v.lng_idciudad, v.bol_eliminado, v.lng_idtipo_vehiculo,v.int_ano,v.str_moneda,v.str_precio_venta,
            			ima.blb_img as imagen, p.blb_img as bandera, p.str_paises as pais, p.str_abreviatura, ciu.str_ciudad as ciudad,
            			ma.str_marca as marca, mo.str_modelo as modelo
                    from tbl_vehiculos as v            				              				            			
            		join cat_paises as p on p.id = v.lng_idpais
                    join tbl_modelos as mo on mo.id =  v.lng_idmodelo
            		join cat_marcas as ma on ma.id =  mo.lng_idmarca
					join imagenppal as ima on ima.lng_idvehiculo = v.id           
                    join cat_ciudades as ciu on ciu.id =  v.lng_idciudad
            		where v.bol_eliminado = 0
            		and v.lng_idtipo_vehiculo = 559
            		and status_admin = ".Consultas::STATUS_ADMIN."
                	and status_user = ".Consultas::STATUS_USER."            				
                    order by v.id desc limit 9 offset 0");
            	
            		return $ultimosVehiculos2;
            	//join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id and ima.int_peso = 1  
            break; 
                        
            case 'marcasTipoPaisCiudadPublicados':
            	            	
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            	
        		$marcas = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  m.id, m.str_marca, m.blb_img as logo, count(str_marca) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais= ".$valor3." and v.lng_idciudad = ".$valor."
							and  v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	         				
							group by str_marca
							order by str_marca");
        		 
        		return $marcas;
            	
            break; 

            case 'modelosTipoPaisCiudadPublicados':
            	            	
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            	
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  v.lng_idmodelo, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from tbl_modelos as mo
							join cat_marcas as m on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais= ".$valor3." and v.lng_idciudad = ".$valor."
							and  v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	         				
							group by str_modelo
							order by str_modelo");
        		 
        		return $modelos;
            	
            break;

            case 'coloresTipoPaisCiudadPublicados':
            	            	
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            	
        		$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  
							v.lng_idcolor, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v 
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais= ".$valor3." and v.lng_idciudad = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	         				
							group by str_descripcion
							order by str_descripcion");
        		 
        		return $colores;
            	
            break;

            case 'modelosTipoPaisMarcaPublicados':
            	            	
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            	
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, m.str_marca, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais = ".$valor3." and m.id = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	         				
							group by str_modelo
							order by str_modelo");
        		 
        		return $modelos;
            	
            break;
            
            case 'coloresTipoPaisMarcaPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            	 
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idpais = ".$valor3." and ma.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
            	 
            	return $colores;
            	 
            break;
            
            case 'coloresTipoCiudadMarcaPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idciudad = ".$valor3." and ma.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
            
            	return $colores;
            
            break;
            
            case 'coloresPaisCiudadMarcaPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where v.lng_idpais = ".$valor2." and v.lng_idciudad = ".$valor3." and ma.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
            
            	return $colores;
            
            break;
            
            case 'coloresPaisCiudadModelosPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, mo.str_modelo, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where v.lng_idpais = ".$valor2." and v.lng_idciudad = ".$valor3." and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
							group by mo.str_modelo , dm.str_descripcion
							order by mo.str_modelo, dm.str_descripcion");
            
            	return $modelos;
            
            break;
            
            case 'coloresPaisMarcaModelosPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where v.lng_idpais = ".$valor2." and ma.id = ".$valor3." and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
            
            	return $colores;
            
            break;
            
            case 'coloresCiudadMarcaModelosPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
            				where v.lng_idciudad = ".$valor2." and ma.id = ".$valor3." and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER." 	             			
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
            
            	return $colores;
            
            break;            
            
            case 'coloresTipoPaisModelosPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
		            	from tbl_vehiculos as v
		            	join cat_datos_maestros dm on dm.id = v.lng_idcolor
		            	join tbl_modelos mo on mo.id = v.lng_idmodelo
		            	join cat_marcas ma on ma.id = mo.lng_idmarca
		            	where v.lng_idpais = ".$valor2." and v.lng_idtipo_vehiculo = ".$valor3." and mo.id = ".$valor."
            			and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."             			
		            	group by v.lng_idcolor
		            	order by count(v.lng_idcolor) desc");
            	
            	return $modelos;
            
            break;
            
            case 'coloresTipoCiudadModelosPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
		            	from tbl_vehiculos as v
		            	join cat_datos_maestros dm on dm.id = v.lng_idcolor
		            	join tbl_modelos mo on mo.id = v.lng_idmodelo
		            	join cat_marcas ma on ma.id = mo.lng_idmarca
		            	where v.lng_idciudad = ".$valor2." and v.lng_idtipo_vehiculo = ".$valor3." and mo.id = ".$valor."
            			and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."              			
		            	group by v.lng_idcolor
		            	order by count(v.lng_idcolor) desc");
            	 
            	return $colores;
            
            break;
            
            case 'coloresTipoMarcaModelosPublicados':
            
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            
            	$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, dm.str_descripcion, dm.str_caracteristica, count(v.lng_idcolor) as total
		            	from tbl_vehiculos as v
		            	join cat_datos_maestros dm on dm.id = v.lng_idcolor
		            	join tbl_modelos mo on mo.id = v.lng_idmodelo
		            	join cat_marcas ma on ma.id = mo.lng_idmarca
		            	where ma.id = ".$valor2." and v.lng_idtipo_vehiculo = ".$valor3." and mo.id = ".$valor."
            			and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."              			
		            	group by v.lng_idcolor
		            	order by count(v.lng_idcolor) desc");
            
            	return $colores;
            
            break;            

            case 'modelosTipoCiudadMarcaPublicados':
            	            	
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            	
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, m.str_marca, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$valor2." and v.lng_idciudad = ".$valor3." and m.id = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."          				
							group by str_modelo
							order by str_modelo");
        		 
        		return $modelos;
            	
            break;            

            case 'modelosPaisCiudadMarcaPublicados':
            	            	
            	$valor = $limit;
            	$valor2 = $offset;
            	$valor3 = $and;
            	
        		$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idmodelo, m.str_marca, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from cat_marcas as m
							join tbl_tipos_marcas as tm on tm.lng_idmarca = m.id
							join tbl_modelos as mo on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idpais = ".$valor2." and v.lng_idciudad = ".$valor3." and m.id = ".$valor."
							and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."          				
							group by str_modelo
							order by str_modelo");
        		 
        		return $modelos;
            	
            break;

        }
    }
    
    protected function querysValor4($consulta,$valor,$valor2,$valor3,$id){
    	
    	switch ($consulta){
    		case 'vehiculosSimilares'://cualquiera
    			    				
    			$vehiculosSimilares = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.id,v.lng_idpais,v.lng_idmodelo,
            			v.lng_idciudad, v.bol_eliminado, v.lng_idtipo_vehiculo,v.int_ano,v.str_moneda,v.str_precio_venta,
            			ima.blb_img as imagen, p.blb_img as bandera, p.str_paises as pais, p.str_abreviatura, ciu.str_ciudad as ciudad,
            			ma.str_marca as marca, mo.str_modelo as modelo
                    from tbl_vehiculos as v
            		join cat_paises as p on p.id = v.lng_idpais
                    join tbl_modelos as mo on mo.id =  v.lng_idmodelo
            		join cat_marcas as ma on ma.id =  mo.lng_idmarca
					join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id and ima.int_peso = 1
                    join cat_ciudades as ciu on ciu.id =  v.lng_idciudad
            		where v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."     					
            				and v.lng_idtipo_vehiculo = ".$valor3." and ((v.lng_idmodelo = ".$valor.") or (ma.id = ".$valor2.")) and v.id <> $id
                    order by v.id desc limit 9 offset 0");
    		
    			return $vehiculosSimilares;
    		
    		break;

    		case 'modelosTipoPaisCiudadMarcaPublicados':
    			    				
    			$modelos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT  v.lng_idmodelo, mo.str_modelo, m.blb_img, count(str_modelo) as total
							from tbl_modelos as mo
							join cat_marcas as m on mo.lng_idmarca = m.id
							join tbl_vehiculos as v on v.lng_idmodelo = mo.id
							where v.lng_idtipo_vehiculo = ".$id." and v.lng_idpais= ".$valor2." and v.lng_idciudad = ".$valor3."
							and m.id = ".$valor."
							and  v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."  									
							group by str_modelo
							order by str_modelo");
    		
    			return $modelos;
    		
    		break;
    		
    		case 'coloresTipoPaisCiudadMarcaPublicados':
    			 
    			$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, ma.str_marca, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$id." and v.lng_idpais= ".$valor2." and v.lng_idciudad = ".$valor3."
							and ma.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."  									
							group by ma.str_marca , dm.str_descripcion
							order by ma.str_marca, dm.str_descripcion");
    		
    			return $colores;
    		
    		break;    		
    		
    		case 'coloresTipoPaisCiudadModeloPublicados':
    		
    			$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, mo.str_modelo, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$id." and v.lng_idpais= ".$valor2." and v.lng_idciudad = ".$valor3."
							and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."  									
							group by mo.str_modelo , dm.str_descripcion
							order by mo.str_modelo, dm.str_descripcion");
    		
    			return $colores;
    		
    		break;
    		
    		case 'coloresTipoCiudadMarcaModeloPublicados':
    		
    			$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, mo.str_modelo, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$id." and ma.id= ".$valor2." and v.lng_idciudad = ".$valor3."
							and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."  									
							group by mo.str_modelo , dm.str_descripcion
							order by mo.str_modelo, dm.str_descripcion");
    		
    			return $colores;
    		
    		break;
    		
    		case 'coloresPaisCiudadMarcaModeloPublicados':
    		
    			$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, mo.str_modelo, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idpais = ".$id." and ma.id= ".$valor2." and v.lng_idciudad = ".$valor3."
							and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."  									
							group by mo.str_modelo , dm.str_descripcion
							order by mo.str_modelo, dm.str_descripcion");
    		
    			return $colores;
    		
    		break;
    		
    		case 'coloresTipoPaisMarcaModeloPublicados':
    		
    			$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, mo.str_modelo, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$id." and ma.id= ".$valor2." and v.lng_idpais = ".$valor3."
							and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."  									
							group by mo.str_modelo , dm.str_descripcion
							order by mo.str_modelo, dm.str_descripcion");
    		
    			return $colores;
    		
    		break;
    		   	
    	}    	
    	
    }
    
    protected function querysValor5($consulta,$valor,$valor2,$valor3,$valor4,$id){
    	 
    	switch ($consulta){
    		case 'coloresTipoPaisCiudadMarcaModeloPublicados':
    		
    			$colores = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.lng_idcolor, mo.str_modelo, dm.str_descripcion, count(str_descripcion) as total
							from tbl_vehiculos as v
							join tbl_modelos as mo on mo.id = v.lng_idmodelo
							join cat_marcas as ma on ma.id = mo.lng_idmarca
							join cat_datos_maestros as dm on dm.id = v.lng_idcolor
							where v.lng_idtipo_vehiculo = ".$id." and ma.id= ".$valor2." and v.lng_idpais = ".$valor3." and v.lng_idciudad = ".$valor4."
							and mo.id = ".$valor."
            				and v.bol_eliminado = 0
            		and v.status_admin = ".Consultas::STATUS_ADMIN."
                	and v.status_user = ".Consultas::STATUS_USER."  									
							group by mo.str_modelo , dm.str_descripcion
							order by mo.str_modelo, dm.str_descripcion");
    		
    			return $colores;
    		
    		break; 
    	}
    
    }
        
    protected function cambiarEstatus($accion, $id, $lng_idpersona){
    	        	
    	//$publicacion = DB::update('update tbl_vehiculos set status_user = ".$accion." where lng_idpersona = ?', ['John']);
    	$publicacion = DB::update('update tbl_vehiculos set status_user = '.$accion.' where lng_idpersona = '.$lng_idpersona.' and id = '.$id);
    	
    	return $publicacion;

    }
    
    //borrar: esta funcion
    protected function actualizarImagen($accion, $id, $lng_idpersona){
    
    	//$publicacion = DB::update('update tbl_vehiculos set status_user = ".$accion." where lng_idpersona = ?', ['John']);
    	$publicacion = DB::update('update tbl_vehiculos set status_user = '.$accion.' where lng_idpersona = '.$lng_idpersona.' and id = '.$id);
    	 
    	return $publicacion;
    
    }    
    
    protected function eliminarCaracteristicas($idPublicacion){
    
    	//$publicacion = DB::update('update tbl_vehiculos set status_user = ".$accion." where lng_idpersona = ?', ['John']);
    	$caracteristicas = DB::delete('DELETE FROM tbl_detalles_vehiculos WHERE lng_idvehiculo ='.$idPublicacion);
    
    	return $caracteristicas;
    
    }    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        
}