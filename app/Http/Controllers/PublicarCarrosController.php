<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use Troovami\Vehiculo;
use Troovami\DetalleVehiculo;
use Troovami\ImagenesVehiculos;
use Illuminate\Support\Facades\Auth;
use Troovami\Consultas;
use Troovami\Buscador;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;

class PublicarCarrosController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        Buscador::camposBuscador();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPublicar(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
    	
        $this->create($request->all());

        return redirect($this->redirectPath()); 
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    	$tipo = $data['lng_idsubtipo_vehiculo'];
    	
    	 $campos = ['lng_idsubtipo_vehiculo' => 'required|max:255',
		    		'lng_idmarca' => 'required|max:255',
		            'lng_idmodelo' => 'required|max:255',
		            'str_placa' => 'required|string|max:255|unique:tbl_vehiculos',
		            'int_cantidad_puertas' => 'required|integer|max:255',
		            'lng_idcolor' => 'required|max:255',
		            'lng_iddireccion' => 'required|max:255',
		            'lng_idestereo' => 'required|max:255',
		            'lng_idtransmision' => 'required|max:255',
		            'lng_idtapizado' => 'required|max:255',
		            'lng_idvidrios' => 'required|max:255',
		            'lng_idtraccion' => 'required|max:255',
		            'lng_idcombustible' => 'required|integer',
		            'int_ano' => 'required|max:255',
		            'str_recorrido' => 'required|max:255',
		            'int_cilindros' => 'required|max:255',
		            'lng_idcilindrada' => 'required|max:255',
		            'lng_idchocado' => 'required|max:255',
		            'lng_idnegociable' => 'required|max:255',
		            'lng_idfinanciamiento' => 'required|max:255',
		            'lng_idunicodueno' => 'required|max:255',
		            'lng_idmotorreparado' => 'required|max:255',
		            'int_pasajeros' => 'required|max:255',
		    
		            //'lng_idcaracteristica' => 'required',
		            
		            'blb_img0' => 'required',
		            'blb_img1' => 'required',
		            'blb_img2' => 'required',
		            'blb_img3' => 'required',
		            'blb_img4' => 'required',
		            'blb_img5' => 'required',
    	 			'str_video' => 'string|max:255|unique:tbl_vehiculos',
		            
		            'str_precio_venta' => 'required|max:255',
		            'lng_idpais' => 'required|max:255',
		    		'lng_idciudad' => 'required|max:255',];
    	
    	switch ($tipo){
    		
    		//Los id de los case se pueden consultar en cat_datos_maestros con el str_tipo 'automoviles'    		
    		case '8'://Automoviles
    		case '132'://Blindados
    		case '134'://Carros Especiales
    		case '135'://Carros de Colección
    		case '136'://Carros de Competencia
    		case '138'://Chocados
    		case '140'://Gruas
    		case '143'://Motorhome
    		case '145'://Recreación
    		case '146'://Taxi
    		case '148'://Tuning
    			
		    	return Validator::make($data, $campos);
		    	
    		break;
    		
    		case '130'://Ambulancias
    			    			
    			$campos['lng_idequipo_medico'] = 'required|max:255';
    			
    			return Validator::make($data, $campos);    			
    			
    		break;
    		
    		case '131'://Autobuses
    			
    			$campos['str_carroceria'] = 'required|max:255';
    			$campos['lng_idventana'] = 'required|max:255';
    			$campos['lng_idbano'] = 'required|max:255';

    			return Validator::make($data, $campos); 			
    			
    		break;
    		
    		case '133'://Camiones

    			$campos['lng_idfrenado'] = 'required|max:255';
    			$campos['int_carga'] = 'required|max:255';
    			$campos['int_lastre'] = 'required|max:255';
    			$campos['dbl_neumatico'] = 'required|max:255';
    			$campos['int_potenciamax'] = 'required|max:255';

    			return Validator::make($data, $campos);
    			
    		break;
    		
    		case '137'://Carros de Golf
    		
    			$campos['int_carga'] = 'required|max:255';
    			    			
    			return Validator::make($data, $campos);
    			 
    		break;    		
    		    		
    		case '141'://Kartings
    			
    			$campos['lng_idarranque'] = 'required|max:255';
    			    			
    			return Validator::make($data, $campos);
    			
    		break; 
    		
    		default:
    			
    			return Validator::make($data, [
    					 
    				'lng_idsubtipo_vehiculo' => 'required|max:255',
    			]);
    			
    		break;
    	}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  array  $data
     * @return Vehiculo
     */
    public function create(array $data)
    {         
        //return Vehiculo::create([
        $vehiculo = Vehiculo::create([

            'lng_idpersona' =>  Auth::user()->id,
            'lng_idtipo_vehiculo' => 153,//id cat_datos_maestros            
        	'status_user' => 706,		
            'lng_idsubtipo_vehiculo' => $data['lng_idsubtipo_vehiculo'],
            'lng_idmodelo' => $data['lng_idmodelo'],
            'str_placa' => trim($data['str_placa']),
            'int_cantidad_puertas' => $data['int_cantidad_puertas'],
            'lng_idcolor' => $data['lng_idcolor'],
            'lng_iddireccion' => $data['lng_iddireccion'],
            'lng_idestereo' => $data['lng_idestereo'],
            'lng_idtransmision' => $data['lng_idtransmision'],
            'lng_idtapizado' => $data['lng_idtapizado'],
            'lng_idvidrios' => $data['lng_idvidrios'],
            'lng_idtraccion' => $data['lng_idtraccion'],
            'lng_idcombustible' => $data['lng_idcombustible'],
            'int_ano' => $data['int_ano'],
            'str_recorrido' => $data['str_recorrido'],
            'lng_idcilindrada' => trim($data['lng_idcilindrada']),
            'int_cilindros' => $data['int_cilindros'],
            'lng_idchocado' => $data['lng_idchocado'],
            'lng_idnegociable' => $data['lng_idnegociable'],
            'lng_idfinanciamiento' => $data['lng_idfinanciamiento'],
            'lng_idunicodueno' => $data['lng_idunicodueno'],           
            'lng_idmotorreparado' => $data['lng_idmotorreparado'],
            'str_video' => trim($data['str_video']),
            'str_comentario' => trim($data['str_comentario']),
        	'lng_idpais' => $data['lng_idpais'], 
        	'lng_idciudad' => $data['lng_idciudad'],
            'str_precio_venta' => trim($data['str_precio_venta']),
            'str_moneda' => trim($data['str_moneda']),
            'lng_idequipo_medico' => $data['lng_idequipo_medico'],
            'int_carga' => $data['int_carga'],
            'lng_idarranque' => $data['lng_idarranque'],
            'int_lastre' => $data['int_lastre'], 
            'str_version' => trim($data['str_version']),
            'int_pisos' => $data['int_pisos'],
            'int_pasajeros' => $data['int_pasajeros'],
            'str_carroceria' => trim($data['str_carroceria']), 
            'lng_idbano' => $data['lng_idbano'],
            'dbl_neumatico' => $data['dbl_neumatico'],
            'int_potenciamax' => $data['int_potenciamax'],                                 
            'lng_idfrenado' => $data['lng_idfrenado'], 

        ]);
		
        //Último id:
        $lastInsertedId = $vehiculo->id;

        //Asigno los valores de un array a otro para reniniciar los indices desde 0
                
        if(!empty($data['lng_idcaracteristica'])){
        	
        	$detalles = array_values($data['lng_idcaracteristica']);
        	
        	$total_detalles = count($detalles);
        	
        	for ($i = 0; $i <= $total_detalles - 1; $i++)
        	{
        		$detalleVehiculo = DetalleVehiculo::create([
        				'lng_idvehiculo' => $lastInsertedId,
        				'lng_idcaracteristica' => $detalles[$i],
        		]);
        	}        	
        }

        $total_imagenes = 6;
                
        for ($i = 0; $i <= $total_imagenes - 1; $i++)
        {   
        	$imagenesVehiculos = ImagenesVehiculos::create([
        		'lng_idvehiculo' => $lastInsertedId,
        		//'blb_img' => base64_encode(file_get_contents($data['blb_img'.$i])),
        		'blb_img' => $data['blb_img'.$i],        			
                'int_peso' => $data['principal'.$i],
	        ]);
        }
  
        $file = $data['fileImage'];
        
        //obtenemos el nombre del archivo
        //$nombre = $lastInsertedId;/*file->getClientOriginalName();*/
                                
        $nombre_original = str_replace(" ","*", strstr($file->getClientOriginalName(),'.', true)."_".$lastInsertedId.strtolower(substr($file->getClientOriginalName(),-4))  );
		
        $extension = substr(strtolower($nombre_original),-4);
		$parte1=substr($nombre_original,5,-4);
		$parte2=strstr($parte1, '_');
		$parte3=substr($parte2,1);
		$nombrecompuesto = $parte3.$extension;

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put("mini_".$nombrecompuesto,  \File::get($file));
                            
        $imgMini = "mini_".$nombrecompuesto;       
                 

			$image = \Input::file('fileImage');
            $filename  = 'mini_'. $lastInsertedId.'.' .$image->getClientOriginalExtension();
            $path = public_path('publicaciones/' . $filename);
            \Image::make($image->getRealPath())->resize(140, 93)->save($path);
            //$product->image = 'publicaciones/'.$filename;
            //$product->save();
        
        
                       
		$miniatura = DB::update('update tbl_vehiculos set str_mini = "'.$imgMini.'" where id = '.$lastInsertedId);		
		
		//echo "-->".$file->getRealPath();die();
				
        return $imagenesVehiculos;
        
    }

    //Este método llama a la vista del formulario de carros:
    public function vehiculo()
    {
        $marcasCarros = Consultas::querysValor('marcasTipos','153');
        $modelosCarros = Consultas::querys('modelosCarros');           	
        $paises = Consultas::querys('paises');
        $cilindrada = Consultas::querysValor('cilindrada','automoviles');
        $seguridad = Consultas::querysValor('maestro2','seguridad_vehiculos');
        $sonido = Consultas::querysValor('maestro2','sonido_vehiculos');
        $exterior = Consultas::querysValor('maestro2','exterior_vehiculos');
        $confort = Consultas::querysValor('maestro2','confort_vehiculos');
        $accesorios_internos = Consultas::querysValor('maestro2','accesoriosInternos_vehiculos');        
        $clasificacion = Consultas::querysValor('maestro','automoviles');   
        $colores = Consultas::querysValor('maestro','color');
        $respuesta = Consultas::querysValor('maestro','respuesta');
        $direccion = Consultas::querysValor('maestro','direccion_vehiculos');
        $estereo = Consultas::querysValor('maestro','estereo_vehiculos');
        $transmision = Consultas::querysValor('maestro','transmision_vehiculos');
        $tapizado = Consultas::querysValor('maestro','tapizado_vehiculos');
        $vidrios = Consultas::querysValor('maestro','vidrios_vehiculos');
        $traccion = Consultas::querysValor('maestro','traccion_vehiculos');
        $combustible = Consultas::querysValor('maestro','combustible_vehiculos');
        $frenado = Consultas::querysValor('maestro','frenado_vehiculos');
        $arranque = Consultas::querysValor('maestro','arranque_vehiculos');
                   
        return \View::make('carros.formulario', compact('clasificacion','colores','respuesta','seguridad','sonido','exterior',
                'confort','accesorios_internos','direccion','estereo','transmision','tapizado','vidrios','traccion','combustible','paises',
        		'frenado','arranque','cilindrada','marcasCarros','modelosCarros'));
    }   

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        //return route('home');
    	Session::flash('message','Su publicación se ha guardado exitosamente!');
    	//return Redirect::to('/Mi-Cuenta');
    	return route('cuenta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
}
