<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Troovami\Consultas;
use Troovami\Buscador;
use Troovami\Http\Controllers\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
	/**
     *
     * @return void
     */
    public function __construct()
    {
        $this->tamano_pagina = 20;
        Buscador::camposBuscador();
    }
    
    public function ubicacion(Request $request){
    	    	    	    
    	if( $request->locacion == 'todos'){
    		
    		$request->session()->forget('locacion');//borra la session
    		$request->session()->forget('id_locacion');//borra la session
    		
    	}else{
    		
    		$request->session()->put('locacion', $request->locacion);//crea la session
    		$request->session()->put('id_locacion', $request->id_locacion);//crea la session
    		
    	}

    	//return $this->index();
    	
    	return Redirect::to('/');
    	    	
    }
            
    public function index()
    {

        if(!empty( session('locacion'))){

            $inicio = 0;
            $pagina = 1;

            $and = 'and v.lng_idpais = '.session('id_locacion');

            $total_vehiculos = Consultas::querysValor3('total_buscarVehiculos','','',$and);

             foreach ($total_vehiculos as $total) {
                $resultados = $total->total;
            }           
            
            $paginas = ceil($resultados / $this->tamano_pagina);
            $vehiculos = Consultas::querysValor3('buscarVehiculos',$this->tamano_pagina,$inicio,$and);
            $ultimosVehiculos = Consultas::querysValor3('ultimosVehiculos',$this->tamano_pagina,0,'');//Carros        
            $ultimosVehiculos2 = Consultas::querysValor3('ultimosVehiculos2',$this->tamano_pagina,0,'');//Motocicletas    
            $total_paginas = array('paginas' => $paginas );
            $registros = array('resultados' => $resultados );        

        }else{

            $total_vehiculos = Consultas::querysValor3('total_vehiculos','','','');

             foreach ($total_vehiculos as $total) {
                $resultados = $total->total;
            }   

            $paginas = ceil($resultados / $this->tamano_pagina);

            if(\Auth::user()){
            	
            	$lng_idpersona = \Auth::user()->id;
            	
            	$vehiculos = Consultas::querysValor3('todosLosVehiculos_Favoritos',$this->tamano_pagina,0,$lng_idpersona);
            	
            }else{
            	
            	$vehiculos = Consultas::querysValor3('todosLosVehiculos',$this->tamano_pagina,0,'');
            	
            }
            
            $ultimosVehiculos = Consultas::querysValor3('ultimosVehiculos',$this->tamano_pagina,0,'');//Carros        
            $ultimosVehiculos2 = Consultas::querysValor3('ultimosVehiculos2',$this->tamano_pagina,0,'');//Motocicletas                
            $total_paginas = array('paginas' => $paginas ); 
            $registros = array('resultados' => $resultados ); 

        }
        //$marcasPublicadosHoy = Consultas::querys('marcasPublicadosHoy');
        return \View::make('inicio', compact('vehiculos','ultimosVehiculos','ultimosVehiculos2','total_paginas','registros','marcasPublicadosHoy'));
        
    }

    public function paginar($pagina,$pais,$ciudad,$tipo,$marca,$modelo,$color,$min_ano,$max_ano,$min_precio,$max_precio,$str_moneda)
    {        
        $and = '';        
        
        if ($pais != 0) {
        	
        	$and .= 'and v.lng_idpais = '.$pais;
        }
                
        if ($ciudad != 0) {
        	 
        	$and .= ' and lng_idciudad = '.$ciudad;
        }
        
        if ($tipo != 0) {
        
        	$and .= ' and lng_idtipo_vehiculo = '.$tipo;
        }
                     
        if ($marca != 0){
        	
        	$and .= ' and mo.lng_idmarca = '.$marca;
        }
        
        if ($modelo != 0){
        	 
        	$and .= ' and lng_idmodelo = '.$modelo;
        }        
        
        if ($color != 0){
        
        	$and .= ' and lng_idcolor = '.$color;
        }        
        
        if ($min_ano != 0){
        
        	$and .= ' and v.int_ano >= '.$min_ano;
        }   
        
        if ($max_ano != 0){
        
        	$and .= ' and v.int_ano <= '.$max_ano;
        }   
        
        if ($min_precio != 0){
        
        	$and .= ' and v.str_precio_venta >= '.$min_precio;
        }    
        
        if ($max_precio != 0){
        
        	$and .= ' and v.str_precio_venta <= '.$max_precio;
        }
           
        //Dólares
        //Bolívares        
        if($str_moneda == "str_moneda"){
        	
        	//$and .=  ' and v.str_moneda = ""';
        }else{
        	
        	$and .=  ' and v.str_moneda = "'.$str_moneda.'"';
        }
        
        //echo $and;

       //return $and;

        if (!$pagina) {
           $inicio = 0;
           $pagina = 1;
        }else {
           $inicio = ($pagina - 1) * $this->tamano_pagina;
        }

        $total_vehiculos = Consultas::querysValor3('total_buscarVehiculos','','',$and);

         foreach ($total_vehiculos as $total) {
            $resultados = $total->total;
        }           
        
        $paginas = ceil($resultados / $this->tamano_pagina);
        
        
        
		$vehiculos = Consultas::querysValor3('buscarVehiculos',$this->tamano_pagina,$inicio,$and);
        
        
       
        
        
        
        
        $total_paginas = array('paginas' => $paginas );
        $registros = array('resultados' => $resultados );
        $tantos = array('inicio' => $inicio );

        return \View::make('paginador',compact('vehiculos','total_paginas','registros','tantos'));
    }    
    
}