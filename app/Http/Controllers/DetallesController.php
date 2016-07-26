<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Troovami\Consultas;
use Troovami\Buscador;
use Troovami\Imagenes;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Troovami\Vehiculo;
use Troovami\DetalleVehiculo;

class DetallesController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        Buscador::camposBuscador();
    }

    public function detalles($valor)
    {
        //busco el id del vehículo para saber si existe:
        $vehiculos = Consultas::querysValor('vehiculos',$valor);

        //Mi variable bandera para establecer si pasa o no a determinada vista:
        $flag = false;

        foreach ($vehiculos as $value) {
            if (!empty($value->id)) {
                 //echo $value->id;
                 $flag = true;
            }   
        }
         
        if ($flag == false) {
            //echo "no existe";
            return \View::make('errors.404');
        }

        //Descripción del vehículo:
        $vehiculos = Consultas::querysValor('vehiculoDetalle',$valor);
	    
        //Imágenes del vehículo:
        $imagenes = Consultas::querysValor('imagenes',$valor);

        //Características del vehículo:
        $caracteristicas = Consultas::querysValor('caracteristicas',$valor);
        
        $vehiculos[0]->fecha_inscripcion = substr($vehiculos[0]->fecha_inscripcion, 0,10);    
        $var = explode('-',$vehiculos[0]->fecha_inscripcion);
        $vehiculos[0]->fecha_inscripcion = "$var[2]-$var[1]-$var[0]";

        $vehiculos[0]->created_at = substr($vehiculos[0]->created_at, 0,10);    
        $var = explode('-',$vehiculos[0]->created_at);
        $vehiculos[0]->created_at = "$var[2]-$var[1]-$var[0]";
                
        $lng_idtipo_vehiculo = $vehiculos[0]->lng_idtipo_vehiculo;
        $lng_idmodelo = $vehiculos[0]->lng_idmodelo;
        $lng_idmarca = $vehiculos[0]->lng_idmarca;
        $lng_idvehiculo = $vehiculos[0]->lng_idvehiculo;
        
        $vehiculosSimilares = Consultas::querysValor4('vehiculosSimilares',$lng_idmodelo,$lng_idmarca,$lng_idtipo_vehiculo,$lng_idvehiculo);//Carros

        return \View::make('detallesVehiculo', compact('vehiculos','imagenes','caracteristicas','vehiculosSimilares'));

    }
    
    public function editarPublicacion($valor)
    {
    	
    	$id = \Auth::user()->id;
    	//busco el id del vehículo para saber si existe:
    	$vehiculos = Consultas::querysValor('vehiculosEditar',$valor);
    
    	//Mi variable bandera para establecer si pasa o no a determinada vista:
    	$flag = false;
    
    	foreach ($vehiculos as $value) {
    		if (!empty($value->id)) {
    			//echo $value->id;
    			$flag = true;
    		}
    	}
    	 
    	if ($flag == false) {
    		//echo "no existe";
    		return \View::make('errors.404');
    	}
    
    	//Descripción del vehículo:
    	$vehiculos = Consultas::querysValor('vehiculoDetalle',$valor);
    	 
    	//Imágenes del vehículo:
    	$imagenes = Consultas::querysValor('imagenes2',$valor);
    
    	//Características del vehículo:
    	$caracteristicas = Consultas::querysValor('caracteristicas',$valor);
    
    	$vehiculos[0]->fecha_inscripcion = substr($vehiculos[0]->fecha_inscripcion, 0,10);
    	$var = explode('-',$vehiculos[0]->fecha_inscripcion);
    	$vehiculos[0]->fecha_inscripcion = "$var[2]-$var[1]-$var[0]";
    
    	$vehiculos[0]->created_at = substr($vehiculos[0]->created_at, 0,10);
    	$var = explode('-',$vehiculos[0]->created_at);
    	$vehiculos[0]->created_at = "$var[2]-$var[1]-$var[0]";
    
    	$lng_idtipo_vehiculo = $vehiculos[0]->lng_idtipo_vehiculo;
    	$lng_idmodelo = $vehiculos[0]->lng_idmodelo;
    	$lng_idmarca = $vehiculos[0]->lng_idmarca;
    	$lng_idvehiculo = $vehiculos[0]->lng_idvehiculo;
    
    	$vehiculosSimilares = Consultas::querysValor4('vehiculosSimilares',$lng_idmodelo,$lng_idmarca,$lng_idtipo_vehiculo,$lng_idvehiculo);//Carros
    	$respuesta = Consultas::querysValor('maestro','respuesta');
    	
    	//Carros:
    	$seguridad = Consultas::querysValor('maestro2','seguridad_vehiculos');
    	$sonido = Consultas::querysValor('maestro2','sonido_vehiculos');
    	$exterior = Consultas::querysValor('maestro2','exterior_vehiculos');
    	$confort = Consultas::querysValor('maestro2','confort_vehiculos');
    	$accesorios_internos = Consultas::querysValor('maestro2','accesoriosInternos_vehiculos');    
    	
    	//Motocicletas:
    	$seguridad_motocicletas = Consultas::querysValor('maestro3','seguridad_vehiculos');
    	$sonido_motocicletas = Consultas::querysValor('maestro3','sonido_vehiculos');
    	    	    
    	return \View::make('modificarVehiculo', compact('vehiculos','imagenes','caracteristicas','vehiculosSimilares','respuesta','seguridad','sonido','exterior','confort','accesorios_internos','seguridad_motocicletas','sonido_motocicletas'));
    	//return \View::make('modificarVehiculo');
    } 
    
    public function actualizarImagenes(Request $request){
    	
    	//echo $request->blb_img0;
    	//echo "<br>";
    	//echo $request->id;
    	
    	$id = $request->id;
    	$idPublicacion = $request->idPublicacion;
    	$imagenes = Imagenes::find($id);
    	$imagenes->fill($request->all());
    	$imagenes->save();
    	
    	Session::flash('message','La imágen fue actualizada exitosamente!');
    	return Redirect::to('/Mi-Cuenta/Modificar/'.$idPublicacion);    	
    }
    
    public function actualizarVideo(Request $request){
    	 
    	$idPublicacion = $request->idPublicacion;
    	$video = Vehiculo::find($idPublicacion);
    	$video->fill($request->all());
    	$video->save();
    	 
    	Session::flash('message','El video fue actualizado exitosamente!');
    	return Redirect::to('/Mi-Cuenta/Modificar/'.$idPublicacion);    	   
    }
    
    public function actualizarComentario(Request $request){
    
    	$idPublicacion = $request->idPublicacion;
    	$comentario = Vehiculo::find($idPublicacion);
    	$comentario->fill($request->all());
    	$comentario->save();
    
    	Session::flash('message','El comentario fue actualizado exitosamente!');
    	return Redirect::to('/Mi-Cuenta/Modificar/'.$idPublicacion);
    } 
        
    public function actualizarEspecificaciones(Request $request){
    
    	$idPublicacion = $request->idPublicacion;
    	$especificaciones = Vehiculo::find($idPublicacion);
    	$especificaciones->fill($request->all());
    	$especificaciones->save();
    
    	Session::flash('message','Las especificaciones fueron actualizadas exitosamente!');
    	return Redirect::to('/Mi-Cuenta/Modificar/'.$idPublicacion);
    }    
    
    public function actualizarCaracteristicas(Request $request){
    
    	$idvehiculo = $request->idPublicacion;

    	Consultas::eliminarCaracteristicas($idvehiculo);    	

    	//Asigno los valores de un array a otro para reniniciar los indices desde 0
    	$detalles = array_values($request->lng_idcaracteristica);
    	
    	$total_detalles = count($detalles);
    	
    	for ($i = 0; $i <= $total_detalles - 1; $i++)
    	{
    		$detalleVehiculo = DetalleVehiculo::create([
    				'lng_idvehiculo' => $idvehiculo,
    				'lng_idcaracteristica' => $detalles[$i],
    		]);
    	}    	    	
    
    	Session::flash('message','Las Caracteristicas fueron actualizadas exitosamente!');
    	return Redirect::to('/Mi-Cuenta/Modificar/'.$idvehiculo);
    }
    
    public function acciones($accion, $texto, $id){
    
    	$lng_idpersona = \Auth::user()->id;
    	Consultas::cambiarEstatus($accion, $id, $lng_idpersona);
    	
    	if($texto == "Activa"){
    	
    		echo '<i title="'.$texto.'" style="color: green; cursor:pointer" class="fa fa-play" aria-hidden="true"></i>';
    	
    	}else{
    	
    		echo '<i title="'.$texto.'" style="color: orange; cursor:pointer" class="fa fa-pause" aria-hidden="true"></i>';
    	
    	}
    	
    }    
    
}