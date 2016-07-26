<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;
use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use Troovami\Consultas;
use Troovami\Selects;

class MaestroController extends Controller
{
    public function dependientePaisesTipoBuscador($valor)
    {
    	$paises = Consultas::querys('paisesPublicados');    	
    	if($valor != 0){
            $paises = Consultas::querysValor('paisesTiposPublicados',$valor);
    	}    	
    	return Selects::selectPaises($paises);
    }

    public function dependientePaisesTipoFiltro($valor)
    {
    	$paises = Consultas::querys('paisesPublicados');    	
    	if($valor != 0){
            $paises = Consultas::querysValor('paisesTiposPublicados',$valor);                    
        }           
        return \View::make('paises_Filtro',compact('paises'));        
    }

    public function dependienteCiudadTipoBuscador($tipo)
    {
    	$ciudades = Consultas::querys('ciudadesPublicados');
    	if($tipo != "0"){
    		$ciudades = Consultas::querysValor('ciudadesTiposPublicados',$tipo);
    	}
    	return Selects::selectCiudad($ciudades);
    }
    
    public function dependienteCiudadTipoFiltro($tipo)
    {
    	$ciudades = Consultas::querys('ciudadesPublicados');
    	if($tipo != "0"){
    		$ciudades = Consultas::querysValor('ciudadesTiposPublicados',$tipo);
    	}
    	//var_dump($ciudades);
    	return \View::make('ciudades_Filtro',compact('ciudades'));
    }    
    
	public function dependienteMarcasTipoBuscador($valor)
	{
		$marcas = Consultas::querys('marcasPublicados');			
		if( $valor != "0"){
    		$marcas = Consultas::querysValor('marcasTiposPublicadas',$valor);
        }     
        //var_dump($marcas);     	
		return Selects::selectMarca($marcas);
	}
		
	public function dependienteMarcasTipoFiltro($valor)
	{
		$marcas = Consultas::querys('marcasPublicados');
		if( $valor != 0){
			$marcas = Consultas::querysValor('marcasTipoPublicadas',$valor);
		}
		//var_dump($marcas);
		return \View::make('marcas_Filtro',compact('marcas'));
	}
	
	public function dependienteModelosTipoBuscador($valor)
	{
		$modelos = Consultas::querys('modelosPublicados');
		if($valor != 0){
			$modelos = Consultas::querysValor('modelosTipoPublicados',$valor);
		}
		//var_dump($modelos);
		return Selects::selectModelo($modelos);
	}	
	
	public function dependienteModelosTipoFiltro($tipo)
	{
		$modelos = Consultas::querys('modelosPublicados');
		if($tipo != 0){	
			$modelos = Consultas::querysValor('modelosTipoPublicados',$tipo);
		}
		//var_dump($modelos);
		return \View::make('modelos_Filtro',compact('modelos'));
	}	
	
	public function dependienteColoresTipoBuscador($valor)
	{
		$colors = Consultas::querys('coloresPublicados');
		if($valor != 0){
			$colors = Consultas::querysValor('coloresTipoPublicados',$valor);
		}
		//var_dump($colors);
		return Selects::selectColor($colors);
	}
	
	public function dependienteColoresTipoFiltro($valor)
	{
		$colors = Consultas::querys('coloresPublicados');
		if($valor != 0){
			$colors = Consultas::querysValor('coloresTipoPublicados',$valor);
		}
		//var_dump($colores);
		return \View::make('colores_Filtro',compact('colors'));
	}
	
	public function dependienteAnoTipoBuscador_Min($valor)
	{
		$anospublicados = Consultas::querys('anosPublicados');
		if($valor != 0){
			$anospublicados = Consultas::querysValor('AnosTipoPublicados',$valor);
		}
		//var_dump($anospublicados);
		return Selects::selectMin_Ano($anospublicados);
	}
	
	public function dependienteAnoTipoBuscador_Max($valor)
	{
		$anospublicados = Consultas::querys('anosPublicados');
		if($valor != 0){
			$anospublicados = Consultas::querysValor('AnosTipoPublicados',$valor);
		}
		//var_dump($anospublicados);
		return Selects::selectMax_Ano($anospublicados);
	}	
	
	public function dependienteAnoTipoFiltro_Min($valor)
	{
		$anospublicados = Consultas::querys('anosPublicados');
		if($valor != 0){
			$anospublicados = Consultas::querysValor('AnosTipoPublicados',$valor);
		}
		//var_dump($anospublicados);
		return \View::make('ano_min_Filtro',compact('anospublicados'));
	}
	
	public function dependienteAnoTipoFiltro_Max($valor)
	{
		$anospublicados = Consultas::querys('anosPublicados');
		if($valor != 0){
			$anospublicados = Consultas::querysValor('AnosTipoPublicados',$valor);
		}
		//var_dump($anospublicados);
		return \View::make('ano_max_Filtro',compact('anospublicados'));
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function dependienteCiudadPaisBuscador($pais,$tipo)
	{
		$ciudades = Consultas::querysValor('ciudadesTiposPublicados',$tipo);//Filtra las ciudades por tipo
		if($pais != "0"){
			$ciudades = Consultas::querysValor2('ciudadesTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($ciudades);
		return Selects::selectCiudad($ciudades);
	}	
	
	public function dependienteCiudadPaisBuscador2($pais)
	{
		$ciudades = Consultas::querys('ciudadesPublicados');
		if($pais != "0"){
			$ciudades = Consultas::querysValor('ciudadesPaisPublicados',$pais);
		}
		//var_dump($ciudades);
		return Selects::selectCiudad($ciudades);
	}	
		
	public function dependienteCiudadPaisFiltro($pais,$tipo)
	{
		$ciudades = Consultas::querysValor('ciudadesTiposPublicados',$tipo);//Filtra las ciudades por tipo
		if($pais != "0"){
			$ciudades = Consultas::querysValor2('ciudadesTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($ciudades);
		return \View::make('ciudades_Filtro',compact('ciudades'));
	}
	
	public function dependienteCiudadPaisFiltro2($pais)
	{
		$ciudades = Consultas::querys('ciudadesPublicados');
		if($pais != "0"){
			$ciudades = Consultas::querysValor('ciudadesPaisPublicados',$pais);
		}
		//var_dump($ciudades);
		return \View::make('ciudades_Filtro',compact('ciudades'));
	}
		
	public function dependienteMarcasPaisBuscador($pais,$tipo)
	{
		$marcas = Consultas::querysValor('marcasTiposPublicados',$tipo);
		if($pais != "0"){
			$marcas = Consultas::querysValor2('marcasTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($marcas);
		return Selects::selectMarca($marcas);		
	}
	
	public function dependienteMarcasPaisBuscador2($valor)
	{
		$marcas = Consultas::querys('marcasPublicados');
		if( $valor != 0){
			$marcas = Consultas::querysValor('marcasPaisPublicadas',$valor);
		}
		//var_dump($marcas);
		return Selects::selectMarca($marcas);
	}	
	
	public function dependienteMarcasPaisFiltro($pais,$tipo)
	{
		$marcas = Consultas::querysValor('marcasTiposPublicados',$tipo);
		if($pais != "0"){
			$marcas = Consultas::querysValor2('marcasTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($marcas);
		return \View::make('marcas_Filtro',compact('marcas'));
	}
	
	public function dependienteMarcasPaisFiltro2($pais)
	{
		$marcas = Consultas::querys('marcasPublicados');
		if($pais != 0){
			$marcas = Consultas::querysValor('marcasPaisPublicados',$pais);
		}
		return \View::make('marcas_Filtro',compact('marcas'));
	}	
	
	public function dependienteModelosPaisBuscador($pais,$tipo)
	{		
		$modelos = Consultas::querysValor('modelosTipoPublicados',$tipo);
		if($pais != "0"){
			$modelos = Consultas::querysValor2('modelosTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($modelos);
		return Selects::selectModelo($modelos);	
	}	
	
	public function dependienteModelosPaisBuscador2($pais)
	{
		$modelos = Consultas::querys('modelos2');
		if( $pais != 0){
			
			$modelos = Consultas::querysValor('modelosPaisPublicadas',$pais);
			
		}
		//var_dump($modelos);
		return Selects::selectModelo($modelos);	
	}	
	
	public function dependienteModelosPaisFiltro($pais,$tipo)
	{
		$modelos = Consultas::querysValor('modelosTipoPublicados',$tipo);
		if($pais != "0"){
			$modelos = Consultas::querysValor2('modelosTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($modelos);
		return \View::make('modelos_Filtro',compact('modelos'));
	}
	
	public function dependienteModelosPaisFiltro2($pais)
	{
		$modelos = Consultas::querys('modelos2');
		if( $pais != 0){
			$modelos = Consultas::querysValor('modelosPaisPublicadas',$pais);
		}
		return \View::make('modelos_Filtro',compact('modelos'));
	}	
		
	public function dependienteColoresPaisBuscador($pais,$tipo)
	{
		$colors = Consultas::querysValor('coloresTipoPublicados',$tipo);
		if($pais != "0"){
			$colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($colors);
		return Selects::selectColor($colors);
	}
	
	public function dependienteColoresPaisBuscador2($pais)
	{
		$colors = Consultas::querys('coloresPublicados');//coloresPublicados
		if( $pais != 0){
			$colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
		}
		//var_dump($colors);
		return Selects::selectColor($colors);
	}	
		
	public function dependienteColoresPaisFiltro($pais,$tipo)
	{
		$colors = Consultas::querysValor('coloresTipoPublicados',$tipo);
		if($pais != "0"){
			$colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
		}
		//var_dump($colors);
		return \View::make('colores_Filtro',compact('colors'));
	}
	
	public function dependienteColoresPaisFiltro2($pais)
	{
		$colors = Consultas::querys('colores');
		if( $pais != 0){
			$colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
		}
		//var_dump($colors);
		return \View::make('colores_Filtro',compact('colors'));
	}	
	
	public function dependienteMarcasCiudadBuscador($ciudad,$tipo)
	{
		//return "filtra por tipo y ciudad";		
		$marcas = Consultas::querysValor('marcasTiposPublicados',$tipo);
		if($ciudad != "0"){
			$marcas = Consultas::querysValor2('marcasTipoCiudadPublicados',$ciudad,$tipo);
		}
		//var_dump($marcas);
		return Selects::selectMarca($marcas);
	}	
	
	public function dependienteMarcasCiudadBuscador2($ciudad,$pais)
	{
		//return "filtra por pais y ciudad";
		$marcas = Consultas::querysValor('marcasPaisPublicadas',$pais);
		if($ciudad != "0"){
			$marcas = Consultas::querysValor2('marcasPaisCiudadPublicados',$ciudad,$pais);
		}
		//var_dump($marcas);
		return Selects::selectMarca($marcas);		
	}	
	
	public function dependienteMarcasCiudadBuscador3($ciudad, $tipo, $pais)
	{
		//return "filtra por tipo, pais y ciudad";
		$marcas = Consultas::querysValor2('marcasTipoPaisPublicados',$pais,$tipo);
		if($ciudad != "0"){
			$marcas = Consultas::querysValor3('marcasTipoPaisCiudadPublicados',$ciudad,$tipo,$pais);
		}
		//var_dump($marcas);
		return Selects::selectMarca($marcas);		
	}	
	
	public function dependienteMarcasCiudadBuscador4($ciudad)
	{
		//return "filtra por ciudad";		
		$marcas = Consultas::querys('marcasPublicados');			
		if( $ciudad != "0"){
    		$marcas = Consultas::querysValor('marcasCiudadPublicadas',$ciudad);
        }     
        //var_dump($marcas);     	
		return Selects::selectMarca($marcas);
	}
	
	public function dependienteMarcasCiudadFiltro($ciudad,$tipo)
	{
		//return "filtra por tipo y ciudad";
		$marcas = Consultas::querysValor('marcasTiposPublicados',$tipo);
		if($ciudad != "0"){
			$marcas = Consultas::querysValor2('marcasTipoCiudadPublicados',$ciudad,$tipo);
		}
		//var_dump($marcas);
		return \View::make('marcas_Filtro',compact('marcas'));
	}
	
	public function dependienteMarcasCiudadFiltro2($ciudad,$pais)
	{
		//return "filtra por pais y ciudad";
		$marcas = Consultas::querysValor('marcasPaisPublicadas',$pais);
		if($ciudad != "0"){
			$marcas = Consultas::querysValor2('marcasPaisCiudadPublicados',$ciudad,$pais);
		}
		//var_dump($marcas);
		return \View::make('marcas_Filtro',compact('marcas'));
	}
	
	public function dependienteMarcasCiudadFiltro3($ciudad, $tipo, $pais)
	{
		//return "filtra por tipo, pais y ciudad";
		$marcas = Consultas::querysValor2('marcasTipoPaisPublicados',$pais,$tipo);                                  
		if($ciudad != "0"){
			$marcas = Consultas::querysValor3('marcasTipoPaisCiudadPublicados',$ciudad,$tipo,$pais);
		}
		//var_dump($marcas);
		return \View::make('marcas_Filtro',compact('marcas'));
	}
	
	public function dependienteMarcasCiudadFiltro4($ciudad)
	{
		//return "filtra por ciudad";
		$marcas = Consultas::querys('marcasPublicados');
		if( $ciudad != "0"){
			$marcas = Consultas::querysValor('marcasCiudadPublicadas',$ciudad);
		}
		//var_dump($marcas);
		return \View::make('marcas_Filtro',compact('marcas'));
	}

    public function dependienteModelosCiudadBuscador($ciudad,$tipo)
    {
        //return "filtra por tipo y ciudad";        
        $modelos = Consultas::querysValor('modelosTipoPublicados',$ciudad);
        if($ciudad != "0"){
            $modelos = Consultas::querysValor2('modelosTipoCiudadPublicados',$ciudad,$tipo);
        }
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }   
    
    public function dependienteModelosCiudadBuscador2($ciudad,$pais)
    {
        //return "filtra por pais y ciudad";
        $modelos = Consultas::querysValor('modelosPaisPublicadas',$pais);
        if($ciudad != "0"){
            $modelos = Consultas::querysValor2('modelosPaisCiudadPublicados',$ciudad,$pais);
        }
        //var_dump($modelos);
        return Selects::selectModelo($modelos);       
    }   
    
    public function dependienteModelosCiudadBuscador3($ciudad, $tipo, $pais)
    {
        //return "filtra por tipo, pais y ciudad";
        $modelos = Consultas::querysValor2('modelosTipoPaisPublicados',$pais,$tipo);
        if($ciudad != "0"){
            $modelos = Consultas::querysValor3('modelosTipoPaisCiudadPublicados',$ciudad,$tipo,$pais);
        }
        //var_dump($modelos);
        return Selects::selectModelo($modelos);       
    }   
    
    public function dependienteModelosCiudadBuscador4($ciudad)
    {
        //return "filtra por ciudad";       
        $modelos = Consultas::querys('modelosPublicados');            
        if( $ciudad != "0"){
            $modelos = Consultas::querysValor('modelosCiudadPublicadas',$ciudad);
        }     
        //var_dump($modelos);        
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosCiudadFiltro($ciudad,$tipo)
    {
        //return "filtra por tipo y ciudad";        
        $modelos = Consultas::querysValor('modelosTipoPublicados',$ciudad);
        if($ciudad != "0"){
            $modelos = Consultas::querysValor2('modelosTipoCiudadPublicados',$ciudad,$tipo);
        }
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }   
    
    public function dependienteModelosCiudadFiltro2($ciudad,$pais)
    {
        //return "filtra por pais y ciudad";
        $modelos = Consultas::querysValor('modelosPaisPublicadas',$pais);
        if($ciudad != "0"){
            $modelos = Consultas::querysValor2('modelosPaisCiudadPublicados',$ciudad,$pais);
        }
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));     
    }   
    
    public function dependienteModelosCiudadFiltro3($ciudad, $tipo, $pais)
    {
        //return "filtra por tipo, pais y ciudad";
        $modelos = Consultas::querysValor2('modelosTipoPaisPublicados',$pais,$tipo);
        if($ciudad != "0"){
            $modelos = Consultas::querysValor3('modelosTipoPaisCiudadPublicados',$ciudad,$tipo,$pais);
        }
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));     
    }   
    
    public function dependienteModelosCiudadFiltro4($ciudad)
    {
        //return "filtra por ciudad";       
        $modelos = Consultas::querys('modelosPublicados');            
        if( $ciudad != "0"){
            $modelos = Consultas::querysValor('modelosCiudadPublicadas',$ciudad);
        }     
        //var_dump($modelos);        
        return \View::make('modelos_Filtro',compact('modelos'));
    }
	
    public function dependienteColoresCiudadBuscador($ciudad,$tipo)
    {
        //return "filtra por tipo y ciudad";        
        $colors = Consultas::querysValor('coloresTipoPublicados',$ciudad);
        if($ciudad != "0"){
            $colors = Consultas::querysValor2('coloresTipoCiudadPublicados',$ciudad,$tipo);
        }
        //var_dump($colors);
        return Selects::selectColor($colors);
    }   
    
    public function dependienteColoresCiudadBuscador2($ciudad,$pais)
    {
        //return "filtra por pais y ciudad";
        $colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
        if($ciudad != "0"){
            $colors = Consultas::querysValor2('coloresPaisCiudadPublicados',$ciudad,$pais);
        }
        //var_dump($colors);
        return Selects::selectColor($colors);       
    }   
    
    public function dependienteColoresCiudadBuscador3($ciudad, $tipo, $pais)
    {
        //return "filtra por tipo, pais y ciudad";
        $colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
        if($ciudad != "0"){
            $colors = Consultas::querysValor3('coloresTipoPaisCiudadPublicados',$ciudad,$tipo,$pais);
        }
        //var_dump($colors);
        return Selects::selectColor($colors);       
    }   
    
    public function dependienteColoresCiudadBuscador4($ciudad)
    {
        //return "filtra por ciudad";       
        $colors = Consultas::querys('coloresPublicados');            
        if( $ciudad != "0"){
            $colors = Consultas::querysValor('coloresCiudadPublicadas',$ciudad);
        }     
        //var_dump($colores);        
        return Selects::selectColor($colors);
    }

    public function dependienteColoresCiudadFiltro($ciudad,$tipo)
    {
        //return "filtra por tipo y ciudad";        
        $colors = Consultas::querysValor('coloresTipoPublicados',$ciudad);
        if($ciudad != "0"){
            $colors = Consultas::querysValor2('coloresTipoCiudadPublicados',$ciudad,$tipo);
        }
        //var_dump($colors);
        return \View::make('colores_Filtro',compact('colors'));
    }   
    
    public function dependienteColoresCiudadFiltro2($ciudad,$pais)
    {
        //return "filtra por pais y ciudad";
        $colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
        if($ciudad != "0"){
            $colors = Consultas::querysValor2('coloresPaisCiudadPublicados',$ciudad,$pais);
        }
        //var_dump($colors);
        return \View::make('colores_Filtro',compact('colors'));    
    }   
    
    public function dependienteColoresCiudadFiltro3($ciudad, $tipo, $pais)
    {
        //return "filtra por tipo, pais y ciudad";
        $colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
        if($ciudad != "0"){
            $colors = Consultas::querysValor3('coloresTipoPaisCiudadPublicados',$ciudad,$tipo,$pais);
        }
        //var_dump($colors);
        return \View::make('colores_Filtro',compact('colors'));     
    }   
    
    public function dependienteColoresCiudadFiltro4($ciudad)
    {
        //return "filtra por ciudad";       
        $colors = Consultas::querys('coloresPublicados');            
        if( $ciudad != "0"){
            $colors = Consultas::querysValor('coloresCiudadPublicadas',$ciudad);
        }     
        //var_dump($colores);        
        return \View::make('colores_Filtro',compact('colors'));
    }

    public function dependienteModelosMarcasBuscador($valor,$tipo)
    {
        $modelos = Consultas::querysValor('modelosTipoPublicados',$tipo);       
        if($valor != 0){            
            $modelos = Consultas::querysValor2('modelosFiltro2',$valor, $tipo);
        }                         
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosMarcasBuscador2($valor,$pais)
    {
        $modelos = Consultas::querysValor('modelosPaisPublicados',$pais);       
        if($valor != 0){            
            $modelos = Consultas::querysValor2('modelosPaisMarcaPublicados',$valor, $pais);
        }                         
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosMarcasBuscador3($valor,$ciudad)
    {
        $modelos = Consultas::querysValor('modelosCiudadPublicados',$ciudad);       
        if($valor != 0){            
            $modelos = Consultas::querysValor2('modelosCiudadMarcaPublicados',$valor, $ciudad);
        }                         
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosMarcasBuscador4($valor,$tipo,$pais)
    {
        $modelos = Consultas::querysValor2('modelosTipoPaisPublicados',$pais,$tipo);     
        if($valor != 0){            
            $modelos = Consultas::querysValor3('modelosTipoPaisMarcaPublicados',$valor, $tipo, $pais);
        }                         
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosMarcasBuscador5($valor,$tipo,$ciudad)
    {
        $modelos = Consultas::querysValor2('modelosTipoCiudadPublicados',$ciudad,$tipo);     
        if($valor != 0){            
            $modelos = Consultas::querysValor3('modelosTipoCiudadMarcaPublicados',$valor, $tipo, $ciudad);
        }                         
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosMarcasBuscador6($valor,$pais,$ciudad)
    {
        $modelos = Consultas::querysValor2('modelosPaisCiudadPublicados',$ciudad,$pais);     
        if($valor != 0){            
            $modelos = Consultas::querysValor3('modelosPaisCiudadMarcaPublicados',$valor, $pais, $ciudad);
        }                         
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosMarcasBuscador7($valor,$tipo,$pais,$ciudad)
    {
        $modelos = Consultas::querysValor3('modelosTipoPaisCiudadPublicados',$ciudad, $tipo, $pais);  
        if($valor != 0){            
            $modelos = Consultas::querysValor4('modelosTipoPaisCiudadMarcaPublicados',$valor, $pais, $ciudad,$tipo);
        }                         
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }

    public function dependienteModelosMarcasBuscador8($valor)
    {
        $modelos = Consultas::querys('modelosPublicados');       
        if($valor != "0"){      
            $modelos = Consultas::querysValor('modelosFiltro',$valor);
        }                           
        //var_dump($modelos);
        return Selects::selectModelo($modelos);
    }   
    
    public function dependienteModelosMarcasFiltro($valor,$tipo)
    {
        $modelos = Consultas::querysValor('modelosTipoPublicados',$tipo);       
        if($valor != 0){            
            $modelos = Consultas::querysValor2('modelosFiltro2',$valor, $tipo);
        }                         
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }

    public function dependienteModelosMarcasFiltro2($valor,$pais)
    {
        $modelos = Consultas::querysValor('modelosPaisPublicados',$pais);       
        if($valor != 0){            
            $modelos = Consultas::querysValor2('modelosPaisMarcaPublicados',$valor, $pais);
        }                         
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }

    public function dependienteModelosMarcasFiltro3($valor,$ciudad)
    {
        $modelos = Consultas::querysValor('modelosCiudadPublicados',$ciudad);       
        if($valor != 0){            
            $modelos = Consultas::querysValor2('modelosCiudadMarcaPublicados',$valor, $ciudad);
        }                         
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }

    public function dependienteModelosMarcasFiltro4($valor,$tipo,$pais)
    {
        $modelos = Consultas::querysValor2('modelosTipoPaisPublicados',$pais,$tipo);     
        if($valor != 0){            
            $modelos = Consultas::querysValor3('modelosTipoPaisMarcaPublicados',$valor, $tipo, $pais);
        }                         
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }

    public function dependienteModelosMarcasFiltro5($valor,$tipo,$ciudad)
    {
        $modelos = Consultas::querysValor2('modelosTipoCiudadPublicados',$ciudad,$tipo);     
        if($valor != 0){            
            $modelos = Consultas::querysValor3('modelosTipoCiudadMarcaPublicados',$valor, $tipo, $ciudad);
        }                         
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }

    public function dependienteModelosMarcasFiltro6($valor,$pais,$ciudad)
    {
        $modelos = Consultas::querysValor2('modelosPaisCiudadPublicados',$ciudad,$pais);     
        if($valor != 0){            
            $modelos = Consultas::querysValor3('modelosPaisCiudadMarcaPublicados',$valor, $pais, $ciudad);
        }                         
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }

    public function dependienteModelosMarcasFiltro7($valor,$tipo,$pais,$ciudad)
    {
        $modelos = Consultas::querysValor3('modelosTipoPaisCiudadPublicados',$ciudad, $tipo, $pais);  
        if($valor != 0){            
            $modelos = Consultas::querysValor4('modelosTipoPaisCiudadMarcaPublicados',$valor, $pais, $ciudad,$tipo);
        }                         
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }

    public function dependienteModelosMarcasFiltro8($valor)
    {
        $modelos = Consultas::querys('modelosPublicados');       
        if($valor != "0"){      
            $modelos = Consultas::querysValor('modelosFiltro',$valor);
        }                           
        //var_dump($modelos);
        return \View::make('modelos_Filtro',compact('modelos'));
    }
    
    public function dependienteColoresMarcasBuscador($valor,$tipo)
    {
    	$colors = Consultas::querysValor('coloresTipoPublicados',$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresTipoMarcaPublicados',$valor, $tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresMarcasBuscador2($valor,$pais)
    {
    	$colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresPaisMarcaPublicados',$valor, $pais);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresMarcasBuscador3($valor,$ciudad)
    {
    	$colors = Consultas::querysValor('coloresCiudadPublicadas',$ciudad);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresCiudadMarcaPublicados',$valor, $ciudad);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresMarcasBuscador4($valor,$tipo,$pais)
    {
    	$colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor3('coloresTipoPaisMarcaPublicados',$valor, $tipo, $pais);    	
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresMarcasBuscador5($valor,$tipo,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresTipoCiudadPublicados',$ciudad,$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor3('coloresTipoCiudadMarcaPublicados',$valor, $tipo, $ciudad);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresMarcasBuscador6($valor,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresPaisCiudadPublicados',$ciudad,$pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor3('coloresPaisCiudadMarcaPublicados',$valor, $pais, $ciudad);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresMarcasBuscador7($valor,$tipo,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisCiudadPublicados',$ciudad, $tipo, $pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor4('coloresTipoPaisCiudadMarcaPublicados',$valor, $pais, $ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresMarcasBuscador8($valor)
    {
    	$colors = Consultas::querys('coloresPublicados');
    	if($valor != "0"){
    		$colors = Consultas::querysValor('coloresMarcasPublicadas',$valor);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }  
    
    public function dependienteColoresMarcasFiltro($valor,$tipo)
    {
    	$colors = Consultas::querysValor('coloresTipoPublicados',$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresTipoMarcaPublicados',$valor, $tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresMarcasFiltro2($valor,$pais)
    {
    	$colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresPaisMarcaPublicados',$valor, $pais);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresMarcasFiltro3($valor,$ciudad)
    {
    	$colors = Consultas::querysValor('coloresCiudadPublicadas',$ciudad);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresCiudadMarcaPublicados',$valor, $ciudad);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresMarcasFiltro4($valor,$tipo,$pais)
    {
    	$colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor3('coloresTipoPaisMarcaPublicados',$valor, $tipo, $pais);        		
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresMarcasFiltro5($valor,$tipo,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresTipoCiudadPublicados',$ciudad,$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor3('coloresTipoCiudadMarcaPublicados',$valor, $tipo, $ciudad);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresMarcasFiltro6($valor,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresPaisCiudadPublicados',$ciudad,$pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor3('coloresPaisCiudadMarcaPublicados',$valor, $pais, $ciudad);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresMarcasFiltro7($valor,$tipo,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisCiudadPublicados',$ciudad, $tipo, $pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor4('coloresTipoPaisCiudadMarcaPublicados',$valor, $pais, $ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresMarcasFiltro8($valor)
    {
    	$colors = Consultas::querys('coloresPublicados');
    	if($valor != "0"){
    		$colors = Consultas::querysValor('coloresMarcasPublicadas',$valor);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function dependienteColoresModelosBuscador($valor,$tipo){

    	$colors = Consultas::querysValor('coloresTipoPublicados',$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresTipoModeloPublicados',$valor, $tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresModelosBuscador2($valor,$pais){
    
    	$colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresPaisModeloPublicados',$valor, $pais);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresModelosBuscador3($valor,$ciudad)
    {
    	$colors = Consultas::querysValor('coloresCiudadPublicadas',$ciudad);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresCiudadModelosPublicados',$valor, $ciudad);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador4($valor,$marca)
    {
    	$colors = Consultas::querysValor('coloresMarcasPublicadas',$marca);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresMarcaModelosPublicados',$valor, $marca);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    

    public function dependienteColoresModelosBuscador5($valor,$tipo,$pais)
    {
    	$colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresTipoPaisModelosPublicados',$valor,$pais,$tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
            
    public function dependienteColoresModelosBuscador6($valor,$tipo,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresTipoCiudadPublicados',$ciudad,$tipo);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresTipoCiudadModelosPublicados',$valor,$ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresModelosBuscador7($valor,$tipo,$marca)
    {
    	$colors = Consultas::querysValor2('coloresTipoMarcaPublicados',$marca,$tipo);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresTipoMarcaModelosPublicados',$valor,$marca,$tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador8($valor,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresPaisCiudadPublicados',$ciudad,$pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresPaisCiudadModelosPublicados',$valor,$pais,$ciudad);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador9($valor,$pais,$marca)
    {
    	$colors = Consultas::querysValor2('coloresPaisMarcaPublicados',$marca,$pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresPaisMarcaModelosPublicados',$valor,$pais,$marca);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresModelosBuscador10($valor,$marca,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresCiudadMarcaPublicados',$marca,$ciudad);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresCiudadMarcaModelosPublicados',$valor,$ciudad,$marca);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador11($valor,$tipo,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisCiudadPublicados',$ciudad, $tipo, $pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresTipoPaisCiudadModeloPublicados',$valor, $pais,$ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador12($valor,$tipo,$marca,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoCiudadMarcaPublicados',$marca, $tipo, $ciudad);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresTipoCiudadMarcaModeloPublicados',$valor, $marca,$ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador13($valor,$pais,$marca,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresPaisCiudadMarcaPublicados',$marca, $pais, $ciudad);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresPaisCiudadMarcaModeloPublicados',$valor, $marca,$ciudad,$pais);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador14($valor,$pais,$marca,$tipo)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisMarcaPublicados',$marca, $tipo, $pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresTipoPaisMarcaModeloPublicados',$valor, $marca,$pais, $tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }
    
    public function dependienteColoresModelosBuscador15($valor,$pais,$marca,$tipo,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisMarcaPublicados',$marca, $tipo, $pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor5('coloresTipoPaisCiudadMarcaModeloPublicados',$valor, $marca, $pais, $ciudad, $tipo);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosBuscador16($valor)
    {
    	$colors = Consultas::querys('coloresPublicados');
    	if($valor != "0"){
    		$colors = Consultas::querysValor('coloresModeloPublicadas',$valor);
    	}
    	//var_dump($colors);
    	return Selects::selectColor($colors);
    }    
    
    public function dependienteColoresModelosFiltro($valor,$tipo){
    
    	$colors = Consultas::querysValor('coloresTipoPublicados',$tipo);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresTipoModeloPublicados',$valor, $tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro2($valor,$pais){
    
    	$colors = Consultas::querysValor('coloresPaisPublicadas',$pais);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresPaisModeloPublicados',$valor, $pais);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro3($valor,$ciudad)
    {
    	$colors = Consultas::querysValor('coloresCiudadPublicadas',$ciudad);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresCiudadModelosPublicados',$valor, $ciudad);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro4($valor,$marca)
    {
    	$colors = Consultas::querysValor('coloresMarcasPublicadas',$marca);
    	if($valor != 0){
    		$colors = Consultas::querysValor2('coloresMarcaModelosPublicados',$valor, $marca);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro5($valor,$tipo,$pais)
    {
    	$colors = Consultas::querysValor2('coloresTipoPaisPublicados',$pais,$tipo);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresTipoPaisModelosPublicados',$valor,$pais,$tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro6($valor,$tipo,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresTipoCiudadPublicados',$ciudad,$tipo);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresTipoCiudadModelosPublicados',$valor,$ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro7($valor,$tipo,$marca)
    {
    	$colors = Consultas::querysValor2('coloresTipoMarcaPublicados',$marca,$tipo);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresTipoMarcaModelosPublicados',$valor,$marca,$tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro8($valor,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresPaisCiudadPublicados',$ciudad,$pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresPaisCiudadModelosPublicados',$valor,$pais,$ciudad);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro9($valor,$pais,$marca)
    {
    	$colors = Consultas::querysValor2('coloresPaisMarcaPublicados',$marca,$pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresPaisMarcaModelosPublicados',$valor,$pais,$marca);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro10($valor,$marca,$ciudad)
    {
    	$colors = Consultas::querysValor2('coloresCiudadMarcaPublicados',$marca,$ciudad);
    	if($valor != "0"){
    		$colors = Consultas::querysValor3('coloresCiudadMarcaModelosPublicados',$valor,$ciudad,$marca);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro11($valor,$tipo,$pais,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisCiudadPublicados',$ciudad, $tipo, $pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresTipoPaisCiudadModeloPublicados',$valor, $pais,$ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro12($valor,$tipo,$marca,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoCiudadMarcaPublicados',$marca, $tipo, $ciudad);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresTipoCiudadMarcaModeloPublicados',$valor, $marca,$ciudad,$tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro13($valor,$pais,$marca,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresPaisCiudadMarcaPublicados',$marca, $pais, $ciudad);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresPaisCiudadMarcaModeloPublicados',$valor, $marca,$ciudad,$pais);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro14($valor,$pais,$marca,$tipo)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisMarcaPublicados',$marca, $tipo, $pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor4('coloresTipoPaisMarcaModeloPublicados',$valor, $marca,$pais, $tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro15($valor,$pais,$marca,$tipo,$ciudad)
    {
    	$colors = Consultas::querysValor3('coloresTipoPaisMarcaPublicados',$marca, $tipo, $pais);
    	if($valor != "0"){
    		$colors = Consultas::querysValor5('coloresTipoPaisCiudadMarcaModeloPublicados',$valor, $marca, $pais, $ciudad, $tipo);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }
    
    public function dependienteColoresModelosFiltro16($valor)
    {
    	$colors = Consultas::querys('coloresPublicados');
    	if($valor != "0"){
    		$colors = Consultas::querysValor('coloresModeloPublicadas',$valor);
    	}
    	//var_dump($colors);
    	return \View::make('colores_Filtro',compact('colors'));
    }    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//Otros:

    public function dependienteModelos($valor,$tipo)
    {
        $modelos = Consultas::querysValor2('modelos',$valor,$tipo);
        //var_dump($modelos);
        return Selects::selectModelo2($modelos);
    }
    
    public function dependienteMarcas($valor,$tipo)
    {       
        $marcas = Consultas::querysValor2('marcasSubtipos',$valor,$tipo);
        //var_dump($modelos);       
        return Selects::selectMarca2($marcas, $tipo);
    }

    public function dependienteModelosMotos($valor,$tipo,$subtipo)
    {
    	$modelos = Consultas::querysValores3('modelos',$valor,$tipo,$subtipo);
    	//var_dump($modelos);
		return Selects::selectModelo2($modelos);  
    }
    
    public function dependienteMarcasMotos($valor,$tipo)
    {
    	$marcas = Consultas::querysValor2('marcasSubtipos',$valor,$tipo);
    	//var_dump($modelos);    	   
    	return Selects::selectMarca2_motos($marcas, $tipo);
    }    

    public function dependienteCilindrada($valor)
    {
        $valor2 = "carros";

        if($valor == "141"){
            $valor2 = "karting";
        }

        $cilindrada = Consultas::querysValor('cilindradaTipos',$valor2);
        //var_dump($modelos);
        $select ="<select id='lng_idcilindrada' name='lng_idcilindrada' class='form-control' onchange='' required=''>
    
                        <option value=''>Seleccione</option>";
    
        foreach ($cilindrada as $key => $value)
        {
            $select.=" <option value='".$key."'>".$value."</option>";
        }
    
        $select.="</select>";
    
        return $select;
    }  

    public function dependiente2($letra,$pais)
    {
       $ciudades = Consultas::querysValor2('ciudades',$letra,$pais);
        //var_dump($ciudades);
       return \View::make('ciudades',compact('ciudades')); 
    }
    
    public function dependiente3($pais)
    {
        $ciudades = Consultas::querysValor('ciudades',$pais);
        //var_dump($ciudades);
        return \View::make('ciudades',compact('ciudades'));
    }
    
    public function BuscadorCiudades($letra,$pais)
    {
    	$ciudades = Consultas::querysValor2('ciudadesBuscadorLetra',$letra,$pais);
    	//var_dump($ciudades);
    	return \View::make('ciudades_Buscador',compact('ciudades'));
    }            
           
    public function placas($valor)
    {    	
    	//die($valor);    	
    	$placas = Consultas::querysValor('placas',$valor);
    	//var_dump($placas);
    	
    	$mensaje = "";
    	
    	if(!empty($placas)){
    		 
    		$mensaje = 'existe!';
    		
    	}else{
    		
    		$mensaje = '';
    	}
    	
    	return $mensaje;    	    	
    }    
    
    
    
    
}