<?php
namespace Troovami;

class Selects
{	
	public static function selectPaises($arreglo){
			
		   $select ="<select id='pais' name='pais' class='form-control' onchange='filtro_por_pais(this.value)'>
        
                            <option value='0'>Seleccione</option>";
        
            foreach ($arreglo as $pais)
            {
                $select.=" <option value='".$pais->id."'>".$pais->str_paises."</option>";
            }
        
            $select.="</select>";
            
            return $select;
	
	}	
	
	public static function selectCiudad($arreglo){
		 
		$select ="<select id='ciudad' name='ciudad' class='form-control' onchange='filtro_por_ciudad(this.value)'>
	
	                        <option value='0'>Seleccione</option>";
		 
		foreach ($arreglo as $ciudad)
		{
			$select.=" <option value='".$ciudad->id."'>".$ciudad->str_ciudad."</option>";
		}
		 
		$select.="</select>";
		 
		return $select;
	
	}
		
	public static function selectMarca($arreglo){
			
            $select ="<select id='marca' name='marca' class='form-control' onchange='filtro_por_marca(this.value)'>
        
                            <option value='0'>Seleccione</option>";
        
            foreach ($arreglo as $marca)
            {
                $select.=" <option value='".$marca->id."'>".$marca->str_marca."</option>";
            }
        
            $select.="</select>";          
	
		return $select;
	
	}	
			
	public static function selectMarca2($arreglo,$tipo){
			
		$select ="<select id='lng_idmarca' name='lng_idmarca' class='form-control' onchange='dependienteModelos(this.value,".$tipo.")' required='required'>
	
                            <option value=''>Seleccione</option>";
	
		foreach ($arreglo as $marca)
		{
			$select.=" <option value='".$marca->id."'>".$marca->str_marca."</option>";
		}
	
		$select.="</select>";
	
		return $select;
	
	}
	
	public static function selectMarca2_motos($arreglo,$tipo){
			
		$select ="<select id='lng_idmarca' name='lng_idmarca' class='form-control' onchange='dependienteModelosMotos(this.value,".$tipo.")' required='required'>
	
                            <option value=''>Seleccione</option>";
	
		foreach ($arreglo as $marca)
		{
			$select.=" <option value='".$marca->id."'>".$marca->str_marca."</option>";
		}
	
		$select.="</select>";
	
		return $select;
	
	}	
	
	public static function selectModelo($arreglo){
			
    	$select ="<select id='modelo' name='modelo' class='form-control' onchange='filtro_por_modelo(this.value)'>
    
                        <option value='0'>Seleccione</option>";
    
    	foreach ($arreglo as $modelo)
    	{
    		$select.=" <option value='".$modelo->lng_idmodelo."'>".$modelo->str_modelo."</option>";
    	}
    
    	$select.="</select>";
    
    	return $select;
	
	}	
		
	public static function selectModelo2($arreglo){
			
		$select ="<select id='lng_idmodelo' name='lng_idmodelo' class='form-control' onchange='' required='required'>
	
                        <option value=''>Seleccione</option>";
	
		foreach ($arreglo as $modelo)
		{
			$select.=" <option value='".$modelo->id."'>".$modelo->str_modelo."</option>";
		}
	
		$select.="</select>";
	
		return $select;
	
	}	
		
	public static function selectColor($arreglo){
			
   		$select ="<select id='color' name='color' class='form-control' onchange=''>
    
                        <option value='0'>Seleccione</option>";
    
    	foreach ($arreglo as $colores)
    	{
    		$select.=" <option value='".$colores->lng_idcolor."'>".$colores->str_descripcion."</option>";
    	}
    
    	$select.="</select>";
    	
    	return $select;
	
	}	
			
	public static function selectMin_Ano($arreglo){
			
		$select ="<select id='min_ano' name='min_ano' class='form-control' onchange=''>
	
                        <option value='0'>Seleccione</option>";
	
		foreach ($arreglo as $ano)
		{
			$select.=" <option value='".$ano->int_ano."'>".$ano->int_ano."</option>";
		}
	
		$select.="</select>";
		 
		return $select;
	
	}
	
	public static function selectMax_Ano($arreglo){
			
		$select ="<select id='max_ano' name='max_ano' class='form-control' onchange=''>
	
                        <option value='0'>Seleccione</option>";
	
		foreach ($arreglo as $ano)
		{
			$select.=" <option value='".$ano->int_ano."'>".$ano->int_ano."</option>";
		}
	
		$select.="</select>";
			
		return $select;
	
	}	
	
	
	
	
	
	
	
}
?>