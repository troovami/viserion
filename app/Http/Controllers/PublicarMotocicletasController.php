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

class PublicarMotocicletasController extends Controller
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
		            'lng_idrecibomoto' => 'required|max:255',
		            'lng_idcolor' => 'required|max:255',
		           		        		             
		            'lng_idarranque' => 'required|max:255',

                    'lng_idtipomotor' => 'required|max:255',
		            
		            'int_ano' => 'required|max:255',
		            'str_recorrido' => 'required|max:255',
		           
		            'lng_idcilindrada' => 'required|max:255',
		            'lng_idchocado' => 'required|max:255',
		            'lng_idnegociable' => 'required|max:255',
		            'lng_idfinanciamiento' => 'required|max:255',
		            'lng_idunicodueno' => 'required|max:255',
		            'lng_idmotorreparado' => 'required|max:255',
		    
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
    	
    	return Validator::make($data, $campos);
    	
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
        	'lng_idtipo_vehiculo' => 559,//id cat_datos_maestros
        	'status_user' => 706,
        	'lng_idsubtipo_vehiculo' => $data['lng_idsubtipo_vehiculo'],
        	'str_placa' => trim($data['str_placa']),        		
        	'lng_idmodelo' => $data['lng_idmodelo'],
        	'lng_idcilindrada' => trim($data['lng_idcilindrada']),
        	'int_ano' => $data['int_ano'],
        	'lng_idarranque' => $data['lng_idarranque'],
        	'lng_idfrenado' => $data['lng_idfrenado'],
	        'str_comentario' => trim($data['str_comentario']),
	        'lng_idnegociable' => $data['lng_idnegociable'],
	        'lng_idmotorreparado' => $data['lng_idmotorreparado'],
	        'lng_idcolor' => $data['lng_idcolor'],
	        'lng_idunicodueno' => $data['lng_idunicodueno'],
	        'str_recorrido' => $data['str_recorrido'],
	        'str_version' => trim($data['str_version']),        		
	        'lng_idtipomotor' => $data['lng_idtipomotor'],        		
	        'lng_idfinanciamiento' => $data['lng_idfinanciamiento'],
	        'lng_idchocado' => $data['lng_idchocado'],        		
        	'lng_idrecibomoto' => $data['lng_idrecibomoto'],        	
        	'str_precio_venta' => trim($data['str_precio_venta']),
        	'str_moneda' => trim($data['str_moneda']),
        	'lng_idpais' => $data['lng_idpais'],
        	'lng_idciudad' => $data['lng_idciudad'],
        	'str_video' => trim($data['str_video']),        		
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
  
        /*
        $file = $data['fileImage'];
        
        //obtenemos el nombre del archivo
        $nombre = $lastInsertedId;//$file->getClientOriginalName();
        
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));        
        */
        return $imagenesVehiculos;
        
    }

    //Este método llama a la vista del formulario de carros:
    public function vehiculo()
    {
        $marcasMotos = Consultas::querysValor('marcasTipos','559');
        $modelosMotos = Consultas::querys('modelosMotos');
        $paises = Consultas::querys('paises');
        $cilindrada = Consultas::querysValor('cilindrada','automoviles');
        $seguridad = Consultas::querysValor('maestro3','seguridad_vehiculos');
        $sonido = Consultas::querysValor('maestro3','sonido_vehiculos');        
        $accesorios_internos = Consultas::querysValor('maestro2','accesoriosInternos_vehiculos');
        $clasificacion = Consultas::querysValor('maestro','motocicletas');
        $colores = Consultas::querysValor('maestro','color');
        $respuesta = Consultas::querysValor('maestro','respuesta');
        $transmision = Consultas::querysValor('maestro','transmision_vehiculos');
        $tipomotor = Consultas::querysValor('maestro','motor');
        $frenado = Consultas::querysValor('maestro','frenado_motocicletas');
        $arranque = Consultas::querysValor('maestro','arranque_motocicletas');
                   
        return \View::make('motocicletas.formulario', compact('marcasMotos','clasificacion','colores','respuesta','seguridad','sonido',
                'accesorios_internos','transmision','tipomotor','paises','frenado','arranque','cilindrada','marcasMotos','modelosMotos'));
    }   

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route('home');
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
