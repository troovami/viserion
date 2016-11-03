var divname;

var divname_placas;
var divname_paginar;
var divname_fav;

var divname_PaisesBuscador;
var divname_PaisesFiltro;

var divname_CiudadBuscador;
var divname_CiudadFiltro;

var divname_MarcasBuscador;
var divname_MarcasFiltro;

var divname_ModelosFiltro;
var divname_ModelosBuscador;

var divname_ColoresBuscador;
var divname_ColoresFiltro;

var divname_AnoBuscadorMin;
var divname_AnoBuscadorMax;
var divname_AnoFiltrorMin;
var divname_AnoFiltroMax;

var http = getXmlHttpObject();
var http_paginar = getXmlHttpObject();

var http_placas = getXmlHttpObject();

var http_fav = getXmlHttpObject();

var http_PaisesBuscador = getXmlHttpObject();
var http_PaisesFiltro = getXmlHttpObject();

var http_CiudadBuscador = getXmlHttpObject();
var http_CiudadFiltro = getXmlHttpObject();

var http_MarcasBuscador = getXmlHttpObject();
var http_MarcasFiltro = getXmlHttpObject();

var http_ModelosBuscador = getXmlHttpObject();
var http_ModelosFiltro = getXmlHttpObject();

var http_ColoresBuscador = getXmlHttpObject();
var http_ColoresFiltro = getXmlHttpObject();

var http_AnoBuscadorMin = getXmlHttpObject();
var http_AnoBuscadorMax = getXmlHttpObject();
var http_AnoFiltroMin = getXmlHttpObject();
var http_AnoFiltroMax = getXmlHttpObject();

function handleHttpResponse()
{
 /*   
    if (http.readyState == 0)
    {
        results = "Error al Cargar los datos";
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
    }

    if (http.readyState == 1)
    {
        results = "";
        //results = '<img src="../imagenes/fetching.gif">';
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
    }
*/
    if (http.readyState == 4)
    {
        results = http.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname).innerHTML = results;
    }
}

function handleHttpResponse_placas()
{
    if (http_placas.readyState == 4)
    {  
        results = http_placas.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        
        
        if(results != ""){

        	alert('Disculpe, pero el número de placa ingresado ya se encuentra registrado');
        	document.getElementById('str_placa').value = "";
        }                           

    }
}


function handleHttpResponse_fav()
{
    if (http_fav.readyState == 4)
    {  
        results = http_fav.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
		document.getElementById(divname_fav).value = "<i style='color: red' class='fa fa-heart'></i>";
                                 

    }
}

function handleHttpResponse_paginar()
{
    if (http_paginar.readyState == 4)
    {  
        results = http_paginar.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_paginar).innerHTML = results;
        document.getElementById('barra-progreso').style.visibility = 'hidden';
        contador();
    }
}

function handleHttpResponsePaisesBuscador()
{
    if (http_PaisesBuscador.readyState == 4)
    {  
        results = http_PaisesBuscador.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_PaisesBuscador).innerHTML = results;
    }
}

function handleHttpResponsePaisesFiltro()
{
    if (http_PaisesFiltro.readyState == 4)
    {  
        results = http_PaisesFiltro.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_PaisesFiltro).innerHTML = results;
    }
}

function handleHttpResponseCiudadBuscador()
{
    if (http_CiudadBuscador.readyState == 4)
    {  
        results = http_CiudadBuscador.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_CiudadBuscador).innerHTML = results;
    }
}

function handleHttpResponseCiudadFiltro()
{
    if (http_CiudadFiltro.readyState == 4)
    {  
        results = http_CiudadFiltro.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_CiudadFiltro).innerHTML = results;
    }
}

function handleHttpResponseMarcasBuscador()
{
    if (http_MarcasBuscador.readyState == 4)
    {  
        results = http_MarcasBuscador.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_MarcasBuscador).innerHTML = results;
    }
}

function handleHttpResponseMarcasFiltro()
{
    if (http_MarcasFiltro.readyState == 4)
    {  
        results = http_MarcasFiltro.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_MarcasFiltro).innerHTML = results;
    }
}

function handleHttpResponseModelosBuscador()
{
    if (http_ModelosBuscador.readyState == 4)
    {  
        results = http_ModelosBuscador.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_ModelosBuscador).innerHTML = results;
    }
}

function handleHttpResponseModelosFiltro()
{
    if (http_ModelosFiltro.readyState == 4)
    {  
        results = http_ModelosFiltro.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_ModelosFiltro).innerHTML = results;
    }
}

function handleHttpResponseColoresBuscador()
{
    if (http_ColoresBuscador.readyState == 4)
    {  
        results = http_ColoresBuscador.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_ColoresBuscador).innerHTML = results;
    }
}

function handleHttpResponseColoresFiltro()
{
    if (http_ColoresFiltro.readyState == 4)
    {  
        results = http_ColoresFiltro.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_ColoresFiltro).innerHTML = results;
    }
}

function handleHttpResponseAnoBuscadorMin()
{
    if (http_AnoBuscadorMin.readyState == 4)
    {  
        results = http_AnoBuscadorMin.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_AnoBuscadorMin).innerHTML = results;
    }
}

function handleHttpResponseAnoBuscadorMax()
{
    if (http_AnoBuscadorMax.readyState == 4)
    {  
        results = http_AnoBuscadorMax.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_AnoBuscadorMax).innerHTML = results;
    }
}

function handleHttpResponseAnoFiltroMin()
{
    if (http_AnoFiltroMin.readyState == 4)
    {  
        results = http_AnoFiltroMin.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_AnoFiltroMin).innerHTML = results;
    }
}

function handleHttpResponseAnoFiltroMax()
{
    if (http_AnoFiltroMax.readyState == 4)
    {  
        results = http_AnoFiltroMax.responseText;
        //innerHTML es para llenar el div resultado con info, recuerden javascript es casesensitive (una variable a != A)
        document.getElementById(divname_AnoFiltroMax).innerHTML = results;
    }
}

function nuevoAjax()
{
    var xmlhttp = false;
    try
    {
        // No IE
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
        try
        {
            // IE 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function getXmlHttpObject()
{
    var xmlhttp;
    /*@cc_on
     @if (@_jscript_version >= 5)
     try
     {
     xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
     }
     catch (e)
     {
     try
     {
     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }
     catch (e)
     {
     xmlhttp = false;
     }
     }
     @else
     xmlhttp = false;
     @end @*/

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
    {
        try
        {
            xmlhttp = new XMLHttpRequest();
        }
        catch (e)
        {
            xmlhttp = false;
        }
    }
    return xmlhttp;
}


function inicio() {
	

	//esto muestra las marcas al inicio
	$(".by-type-options").slideToggle();
	return false;
	
}

function dependienteModelos(valor,tipo){

//alert(tipo);
	document.getElementById('lng_idmodelo').selectedIndex = "0";
	
	if (valor != ""){

	    divname = "dependienteModelos";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Modelos/'+valor+'/Tipo/'+tipo, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
	}else{
		
		document.getElementById('lng_idmodelo').selectedIndex = "0";
	}
}

function dependienteModelosMotos(valor,tipo){
	
	var subtipo = document.getElementById('lng_idsubtipo_vehiculo').value;	
	
	if(!subtipo == ""){
		
		//alert(subtipo);
		document.getElementById('lng_idmodelo').selectedIndex = "0";
		
		if (valor != ""){

		    divname = "dependienteModelos";
		    //http.open("GET", 'paginas' + url, true);
		    http.open("GET", 'ModelosMotos/'+valor+'/Tipo/'+tipo+'/Subtipo/'+subtipo, true);
		    http.onreadystatechange = handleHttpResponse;
		    http.send(null);
		}else{
			
			document.getElementById('lng_idmodelo').selectedIndex = "0";
		}
		
	}else{
		
		document.getElementById('lng_idmarca').selectedIndex = "0";
		alert('Por favor elija la clasificación');
		
	}	

}

function dependienteMarcasMotos(valor,tipo){
	
	document.getElementById('lng_idmarca').selectedIndex = "0";
	document.getElementById('lng_idmodelo').selectedIndex = "0";
	
	if (valor != ""){
	
        divname = "dependienteMarcas";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'MarcasMotos/'+valor+'/Tipo/'+tipo, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);

        setTimeout('dependienteCilindrada('+valor+')',500);
	}else{
		
		document.getElementById('lng_idmarca').selectedIndex = "0";
		document.getElementById('lng_idmodelo').selectedIndex = "0";
	}
}

function dependienteMarcas(valor,tipo){
	
	document.getElementById('lng_idmarca').selectedIndex = "0";
	document.getElementById('lng_idmodelo').selectedIndex = "0";
	
	if (valor != ""){
	
        divname = "dependienteMarcas";
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Marcas/'+valor+'/Tipo/'+tipo, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);

        setTimeout('dependienteCilindrada('+valor+')',500);
	}else{
		
		document.getElementById('lng_idmarca').selectedIndex = "0";
		document.getElementById('lng_idmodelo').selectedIndex = "0";
	}
}

function dependienteCilindrada(valor){

    //alert(valor);
    divname = "dependienteCilindrada";
    //http.open("GET", 'paginas' + url, true);
    http.open("GET", 'Cilindrada/'+ valor, true);
    http.onreadystatechange = handleHttpResponse;
    http.send(null);

}

/************************************************************************************************************/
function buscarCiudadPorPais(lng_idpais){
	
	//alert(lng_idpais);
	document.getElementById('lng_idciudad').value = "";
    document.getElementById('buscador').value = "";
   	
    divname = "dependiente2";
    
    if (lng_idpais != ""){
		document.getElementById(divname).style.display = 'none';
	    //http.open("GET", 'paginas' + url, true);
	    http.open("GET", 'Pais/'+lng_idpais, true);
	    http.onreadystatechange = handleHttpResponse;
	    http.send(null);
    }else{
    	document.getElementById(divname).style.display = 'none';
    }
}

function verCiudades(){
	
	var lng_idpais = document.getElementById('lng_idpais').value;
	buscarCiudadPorPais(lng_idpais);
	divname = "dependiente2";
	
	if(lng_idpais != ""){
		document.getElementById(divname).style.display = 'inline';
	}else{
		document.getElementById(divname).style.display = 'none';
	}
}

function buscarCiudadPorLetra(letra){

    var lng_idpais = document.getElementById('lng_idpais').value;
    var buscador = document.getElementById('buscador').value;
       
    //alert(lng_idpais)
    divname = "dependiente2";
    
    if ((lng_idpais != "") && (buscador != "")){
    	document.getElementById(divname).style.display = 'inline';
        //http.open("GET", 'paginas' + url, true);
        http.open("GET", 'Ciudades/'+ letra + '/Pais/'+lng_idpais, true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
        
    }else{
    	document.getElementById(divname).style.display = 'none';
    }
}

function seleccion(id,ciudad){
    
	divname = "dependiente2";
	document.getElementById(divname).style.display = 'none';
	
	document.getElementById('lng_idciudad').value = id;
    document.getElementById('buscador').value = ciudad;
}

function seleccion_Buscador(id,ciudad){
    
	divname = "divBuscador";
	document.getElementById(divname).style.display = 'none';
	
	document.getElementById('ciudad').value = id;
    document.getElementById('buscador2').value = ciudad;
}

/********************************************	BUSCADOR**********************************************************************************/

function verCiudades_Buscador(){
	
	var lng_idpais = document.getElementById('pais').value;
	dependienteCiudadBuscador(lng_idpais);
	divname = "divBuscador";
	
	if(lng_idpais != ""){
		document.getElementById(divname).style.display = 'inline';
	}else{
		document.getElementById(divname).style.display = 'none';
	}
}

function buscarCiudadPorLetra_Buscador(letra){

    var lng_idpais = document.getElementById('pais').value;
    var buscador = document.getElementById('buscador2').value;
       
    divname = "divBuscador";
    
    if ((lng_idpais != "") && (buscador != "")){
    	document.getElementById(divname).style.display = 'inline';
        //http.open("GET", 'paginas' + url, true);
        http.open("GET", 'BuscadorCiudades/'+letra+'/Pais/'+lng_idpais, true);
        http.onreadystatechange = handleHttpResponse;
        http.send(null);
        
    }else{
    	document.getElementById(divname).style.display = 'none';
    }
  
}

function limpiar(){
	
	//alert('hola');
	//Buscador:
	document.getElementById('monedaMinimo').innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div>';
	document.getElementById('monedaMaximo').innerHTML = '<div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div>';
	
	//Filtros:
	document.getElementById('monedaMinimo1').innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div>';
	document.getElementById('monedaMaximo1').innerHTML = '<div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div>';	

	//filtro_por_tipo(0);
	
	
	filtro_por_tipo2("0");	    	
	paginar(1);	 	
	
	document.getElementById('tipoFiltrado').innerHTML = "";
	document.getElementById('paisFiltrado').innerHTML = "";
	document.getElementById('ciudadFiltrado').innerHTML = "";
	document.getElementById('marcaFiltrado').innerHTML = "";
	document.getElementById('modeloFiltrado').innerHTML = "";
	document.getElementById('colorFiltrado').innerHTML = "";
	document.getElementById('anodesdeFiltrado').innerHTML = "";
	document.getElementById('anohastaFiltrado').innerHTML = "";
	document.getElementById('preciodesdeFiltrado').innerHTML = "";
	document.getElementById('preciohastaFiltrado').innerHTML = "";
}

function moneda(campo1, campo2, valor, select){
	
	//alert(campo1 +"--"+ campo2 +"--"+ valor +"--"+ select)
	
	switch (valor) {	    	    
	    
	    case 0: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Cualquier Moneda" style="cursor:pointer"> <i class="fa fa-money"></i> </div>';
	    break;	
	
		case 1: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Peso Argentino" style="cursor:pointer">ARS</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Peso Argentino" style="cursor:pointer">ARS</div>';
	    break;
	    
	    case 2: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Boliviano" style="cursor:pointer">BOB</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Boliviano" style="cursor:pointer">BOB</div>';	      	
	    	
	    break;
	    
	    case 3: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Real Brasileño" style="cursor:pointer">BRL</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Real Brasileño" style="cursor:pointer">BRL</div>';
	    break;
	    
	    case 4: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Peso Chileno" style="cursor:pointer">CLP</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Peso Chileno" style="cursor:pointer">CLP</div>';
	    break;
	    
	    case 5: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Peso Colombiano" style="cursor:pointer">COP</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Peso Colombiano" style="cursor:pointer">COP</div>';
	    break;
	    
	    case 6:
	    case 21:
	    case 28: 
	    case 29: 
	    case 36: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Americano" style="cursor:pointer">USD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Americano" style="cursor:pointer">USD</div>';
	    break;
	    
	    case 7: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Guyanés" style="cursor:pointer">GYD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Guyanés" style="cursor:pointer">GYD</div>';
	    break;
	    
	    case 8: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Euro" style="cursor:pointer">EUR</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Euro" style="cursor:pointer">EUR</div>';
	    break;
	    
	    case 9: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Guaraní" style="cursor:pointer">PYG</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Guaraní" style="cursor:pointer">PYG</div>';
	    break;
	    
	    case 10: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Nuevo Sol" style="cursor:pointer">PEN</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Nuevo Sol" style="cursor:pointer">PEN</div>';
	    break;
	    
	    case 11: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Surinamés" style="cursor:pointer">SRD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Surinamés" style="cursor:pointer">SRD</div>';
	    break;
	    
	    case 12: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Peso Uruguayo" style="cursor:pointer">UYU</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Peso Uruguayo" style="cursor:pointer">UYU</div>';
	    break;
    	   
	    case 13: /*VENEZUELA*/	
	    	
	    	//alert(select)
	    	
	    	document.getElementById(campo1).innerHTML = "<select id='"+select+"' name='"+select+"' class='' onchange='cambiarMoneda(this.value,this.name)' title='Bolívar Fuerte / Dólar Americano' style='cursor:pointer'><option value='str_moneda'>BsF/$</option><option value='Bolívares'>BsF</option><option value='Dólares'>$</option></select>";
	    	document.getElementById(campo2).innerHTML = "<div title='BsF/$' style='cursor:pointer'>BsF/$</div>";
	    break;	    	   	   	  

	    case 15: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Bahameño" style="cursor:pointer">BSD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Bahameño" style="cursor:pointer">BSD</div>';
	    break;
	    
	    case 16: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar de Barbados" style="cursor:pointer">BBD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar de Barbados" style="cursor:pointer">BBD</div>';
	    break;
	    
	    case 17: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Beliceño" style="cursor:pointer">BZD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Beliceño" style="cursor:pointer">BZD</div>';
	    break;
	    
	    case 18: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Colón Costarricense" style="cursor:pointer">CRC</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Colón Costarricense" style="cursor:pointer">CRC</div>';
	    break;
	    
	    case 19: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Peso Cubano" style="cursor:pointer">CUP</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Peso Cubano" style="cursor:pointer">CUP</div>';
	    break;

	    case 23: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Quetzal" style="cursor:pointer">GTQ</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Quetzal" style="cursor:pointer">GTQ</div>';
	    break;
	    
	    case 24: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Gourde" style="cursor:pointer">HTG</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Gourde" style="cursor:pointer">HTG</div>';
	    break;
	    
	    case 25: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Lempira" style="cursor:pointer">HNL</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Lempira" style="cursor:pointer">HNL</div>';
	    break;
	    
	    case 26: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Jamaicano" style="cursor:pointer">JMD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Jamaicano" style="cursor:pointer">JMD</div>';
	    break;
	    
	    case 27: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Córdoba" style="cursor:pointer">NIO</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Córdoba" style="cursor:pointer">NIO</div>';
	    break;

	    case 30: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Peso Dominicano" style="cursor:pointer">DOP</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Peso Dominicano" style="cursor:pointer">DOP</div>';
	    break;
	    
	    case 14:
	    case 20:
	    case 22:
	    case 31: 
	    case 32:
	    case 33: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar del Caribe Oriental" style="cursor:pointer">XCD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar del Caribe Oriental" style="cursor:pointer">XCD</div>';
	    break;
	    
	    case 34: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Trinitense" style="cursor:pointer">TTD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Trinitense" style="cursor:pointer">TTD</div>';
	    break;
	    
	    case 35: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Dólar Canadiense" style="cursor:pointer">CAD</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Dólar Canadiense" style="cursor:pointer">CAD</div>';
	    break;

	    case 37: 
	    	document.getElementById(campo1).innerHTML = '<input type="hidden" id="str_moneda" name="str_moneda" value="str_moneda"/><div title="Peso Mexicano" style="cursor:pointer">MXN</div>';
	    	document.getElementById(campo2).innerHTML = '<div title="Peso Mexicano" style="cursor:pointer">MXN</div>';
	    break;    
	}
	
}

function cambiarMoneda(valor,nombre){
	
	//alert(nombre);
		
	if(nombre == "str_moneda"){
		
		document.getElementById('str_moneda1').value = document.getElementById('str_moneda').value;
		
	}else if(nombre == "str_moneda1"){
		
		document.getElementById('str_moneda').value = document.getElementById('str_moneda1').value;
		
	}	
	
	if(valor == "Bolívares"){
		
		document.getElementById('monedaMaximo').innerHTML = '<div title="Bolívar Fuerte" style="cursor:pointer">BsF</div>';
		document.getElementById('monedaMaximo1').innerHTML = '<div title="Bolívar Fuerte" style="cursor:pointer">BsF</div>';
		
	}else if(valor == "Dólares"){
		
		document.getElementById('monedaMaximo').innerHTML = '<div title="Dólar Americano" style="cursor:pointer">$</div>';
		document.getElementById('monedaMaximo1').innerHTML = '<div title="Dólar Americano" style="cursor:pointer">$</div>';
	}else{

		document.getElementById('monedaMaximo').innerHTML = '<div title="BsF/$" style="cursor:pointer">BsF/$</div>';
		document.getElementById('monedaMaximo1').innerHTML = '<div title="BsF/$" style="cursor:pointer">BsF/$</div>';

	}
}

/************************************************************************************************************/

function buscador(){
	
	//alert('buscador')
    $(".search-form").slideToggle();
    paginar(1);
}

function paginar(valor){

	document.getElementById('barra-progreso').style.visibility = 'visible';
    var pais = document.getElementById('pais').value;
    var ciudad = document.getElementById('ciudad').value;
    var tipo = document.getElementById('tipo').value;
    var marca = document.getElementById('marca').value;      
    var modelo = document.getElementById('modelo').value;
    var color = document.getElementById('color').value;  
    var min_ano = document.getElementById('min_ano').value;    
    var max_ano = document.getElementById('max_ano').value;       
    var min_precio = document.getElementById('min_precio').value;    
    var max_precio = document.getElementById('max_precio').value;
    
	var a = document.getElementById('pais');
	var paisText = a.options[a.selectedIndex].text;
	
	var b = document.getElementById('ciudad');
	var ciudadText = b.options[b.selectedIndex].text;
	
	var c = document.getElementById('tipo');
	var tipoText = c.options[c.selectedIndex].text;
	
	var d = document.getElementById('marca');
	var marcaText = d.options[d.selectedIndex].text;
	
	var e = document.getElementById('modelo');
	
	var modeloText_original = e.options[e.selectedIndex].text;
		
    if(modeloText_original.length < 20){
    	
    	var modeloText = modeloText_original;
    	
    }else{
    	
    	var modeloText = modeloText_original.substring(0, 20);    	
    }	
	
	var f = document.getElementById('color');
	var colorText = f.options[f.selectedIndex].text;	
	
	var g = document.getElementById('min_ano');
	var min_anoText = g.options[g.selectedIndex].text;
	
	var h = document.getElementById('max_ano');
	var max_anoText = h.options[h.selectedIndex].text;
		
	//var x = foo ? 10 : 20; (guia)
	document.getElementById('paisFiltrado').innerHTML = pais != 0 ? paisText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'pais\')"></i>' : "";
	document.getElementById('ciudadFiltrado').innerHTML = ciudad != 0 ? ciudadText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'ciudad\')"></i>' : "";
	document.getElementById('tipoFiltrado').innerHTML = tipo != 0 ? tipoText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'tipo\')"></i>' : "";
	document.getElementById('marcaFiltrado').innerHTML = marca != 0 ? marcaText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'marca\')"></i>' : "";
	document.getElementById('modeloFiltrado').innerHTML = modelo != 0 ? modeloText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'modelo\')"></i>' : "";
	document.getElementById('colorFiltrado').innerHTML = color != 0 ? colorText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'color\')"></i>' : "";	
	document.getElementById('anodesdeFiltrado').innerHTML = min_ano != 0 ? min_anoText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'anodesde\')"></i>' : "";
	document.getElementById('anohastaFiltrado').innerHTML = max_ano != 0 ? max_anoText + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'anohasta\')"></i>' : "";	
	document.getElementById('preciodesdeFiltrado').innerHTML = min_precio != 0 ? min_precio + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'preciodesde\')"></i>' : "";
	document.getElementById('preciohastaFiltrado').innerHTML = max_precio != 0 ? max_precio + '&nbsp;&nbsp;<i class="fa fa-times-circle" style="cursor: pointer;" onclick="quitarFiltro(\'preciohasta\')"></i>' : "";
	
    var min_ano = document.getElementById('min_ano').value;
    if (min_ano == "") {

        min_ano = "min_ano"
    };

    var max_ano = document.getElementById('max_ano').value;
    if (max_ano == "") {

        max_ano = "max_ano"
    };
    
    //Para todos los paises:
    var str_moneda = "str_moneda";
    
    //Para Venezuela:
    if(document.getElementById('pais').value == 13){
    	
    	var str_moneda = document.getElementById('str_moneda').value;    	
    }
           
    var min_precio = document.getElementById('min_precio').value;
    if (min_precio == "") {

        min_precio = "min_precio"
    }; 

    var max_precio = document.getElementById('max_precio').value;
    if (max_precio == "") {

        max_precio = "max_precio"
    };    

    //alert("Valor: "+valor+"\n"+ "Pais: "+pais +"\n"+ "Ciudad: "+ciudad +"\n"+ "Tipo: "+tipo +"\n"+ "Marca: "+marca +"\n"+ "Modelo: "+modelo +"\n"+ "Color: "+color +"\n"+"Min Año: "+min_ano +"\n"+"Max Año: "+max_ano +"\n"+ "Min Precio: "+min_precio +"\n"+ "Max Precio: "+max_precio+ "\n"+"Moneda: "+str_moneda)

    document.getElementById('pag').value = valor;
       
    paginas = Number(document.getElementById('paginas').value);

    
    divname_paginar = "results-holder";
    //http.open("GET", 'paginas' + url, true);
    http_paginar.open("GET", 'Pagina/'+valor+'/pais/'+pais+'/ciudad/'+ciudad+'/tipo/'+tipo+'/marca/'+marca+'/modelo/'+modelo+'/color/'+color+'/min_ano/'+min_ano+'/max_ano/'+max_ano+'/min_precio/'+min_precio+'/max_precio/'+max_precio+'/str_moneda/'+str_moneda, true);

    http_paginar.onreadystatechange = handleHttpResponse_paginar;
    http_paginar.send(null); 
}

function siguiente(){
	
	valor = Number(document.getElementById('pag').value) + 1;
	paginas = Number(document.getElementById('paginas').value);

	if(valor <= paginas ){
		document.getElementById('pag').value = valor;
		paginar(valor);
	}
	
	//contador();
}

function anterior(){
	
	valor = Number(document.getElementById('pag').value) - 1;

	if(valor > 0){
		document.getElementById('pag').value = valor;
		paginar(valor);
	}
	
	//contador();
}

function contador(){
	
	document.getElementById('numPagina').innerHTML = "Página: "+ document.getElementById('pag').value + " de " + document.getElementById('paginas').value + " / Vehículos: " + document.getElementById('total').value;
}

function quitarFiltro(valor){
	
	//alert(valor);

	switch (valor) {	    	    
    
    	case "tipo": 
	    	document.getElementById('tipo').selectedIndex = 0;
	    	filtro_por_tipo2("0");	    	
	    	paginar(1);	    	
		break;

	    case "pais": 	    	
	    	document.getElementById('pais').selectedIndex = 0;
	    	limpiar();
	    	paginar(1);	    	
	    break;	

	    case "ciudad": 	    	
	    	document.getElementById('ciudad').selectedIndex = 0;		    	
	    	paginar(1);	    	
		break;
		
		case "marca": 
	    	document.getElementById('marca').selectedIndex = 0;	    	
	    	paginar(1);			    	
		break;		
		
	    case "modelo": 
	    	document.getElementById('modelo').selectedIndex = 0;	    	
	    	paginar(1);		    	
		break;	

	    case "color": 
	    	document.getElementById('color').selectedIndex = 0;	    	
	    	paginar(1);			    	
		break;
			
		case "anodesde": 
	    	document.getElementById('min_ano').selectedIndex = 0;	    	
	    	paginar(1);			    	
		break;	

		case "anohasta": 
	    	document.getElementById('max_ano').selectedIndex = 0;	    	
	    	paginar(1);				    	
		break;
		
		case "preciodesde": 
	    	document.getElementById('min_precio').value = 0;	    	
	    	paginar(1);		    	
		break;	

		case "preciohasta": 
	    	document.getElementById('max_precio').value = 0;	    	
	    	paginar(1);					    	
		break;		
	
	}
}

function filtros(campo,x){
	
	//alert(campo + '--' + x);
	document.getElementById(campo).value = x;						
	paginar(1);
}

function oir2(){
	document.getElementById('blb_img').addEventListener('change', blb_imgUser, false);
}

function blb_imgUser(evt) {

    var files = evt.target.files; // FileList object
    //Obtenemos la imagen del campo "file". 
    for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        reader.onload = (function (theFile) {
            return function (e) {
                // Creamos la imagen.
                //document.getElementById("papa").innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                
                document.getElementById("imgUser").innerHTML = ['<img class="img-responsive img-rounded" style="width:250px" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);

        reader.readAsDataURL(f);
    }
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }

    return true;
}

function validarRadio(nombre){

    var ele = document.getElementById(nombre+"_validar")
    ele.setAttribute('class', 'fa fa-check');
    ele.setAttribute('style', 'color: green');
}

function soloEnVenezuela(nombre){

	var t = document.getElementById(nombre);
	var selectedText = t.options[t.selectedIndex].text;
			
	if(selectedText == "Venezuela"){
		
		document.getElementById('str_moneda').selectedIndex = 0;
		document.getElementById('monedas_validar').style.display = "inline";
		
	}else{

		document.getElementById('str_moneda').selectedIndex = 0;
		document.getElementById('monedas_validar').style.display = "none";
		
	}
}

//Esta funcion la llamo desde:
//cabeza.blade.php (evento "onload") y desde el select de lng_idtipo_vehiculo (evento "onchange")
function formularioDinamico(){
 
    var t = document.getElementById("lng_idsubtipo_vehiculo");
    var selectedText = t.options[t.selectedIndex].text;
    
    if (selectedText == "Ambulancias")
    {
        document.getElementById('ambulancias').style.display = "inline";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Autobuses"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "inline";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Camiones"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        //*************Comparten el campo int_carga******************
        document.getElementById('camiones').style.display = "inline";        
        document.getElementById('gruas').style.display = "inline";
        //***********************************************************
        document.getElementById('kartings').style.display = "none";

    } else if (selectedText == "Carros y Camionetas"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";

    }else if (selectedText == "Gruas"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "inline";
        document.getElementById('kartings').style.display = "none";
        
    }else if (selectedText == "Carros de Golf"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        //*************Comparten el campo int_carga******************
        document.getElementById('gruas').style.display = "inline";
        //***********************************************************
        document.getElementById('kartings').style.display = "none";        

    }else if (selectedText == "Kartings"){

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "inline";
    
    }else{

        document.getElementById('ambulancias').style.display = "none";
        document.getElementById('autobuses').style.display = "none";
        document.getElementById('camiones').style.display = "none";
        document.getElementById('gruas').style.display = "none";
        document.getElementById('kartings').style.display = "none";
    }   

    //ImagenesGaleria();
}

function confirmar() {
    
    if (confirm("¿Completó satisfactoriamente los datos solicitados?") == true) {

       document.getElementById("formularioVehiculo").submit();
        
    }
}

function isValidUrl(url){

    var regex=/^(ht|f)tps?:\/\/\w+([\.\-\w]+)?\.([a-z]{2,4}|travel)(:\d{2,5})?(\/.*)?$/i
    return regex.test(url);
}

function validarUrl(valor)  {
    if(!isValidUrl(valor) )
    {
        alert("La dirección URL es incorrecta");
        document.getElementById('str_video').focus();
        document.getElementById('str_video').value = "";
        return (false);
    }
}

/*
document.getElementById('str_telefono').addEventListener('blur', function (e) {
	  var x = e.target.value.replace(/\D/g, '').match(/(\d{4})(\d{3})(\d{4})/);
	  e.target.value = '(' + x[1] + ') ' + x[2] + '-' + x[3];
	});
*/

function validarEmail(email,campo) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) )
        //alert("Error: La dirección de correo " + email + " es incorrecta.");
    document.getElementById(campo).value = "";
    
}

/****Imagenes****/
function botonCropVisible(valor){
	
	id = "btnCrop-" + valor;	
	var boton =  document.getElementById(id);
    boton.style.display="inline"; 	
    boton.style.position="relative";
    
    for (x = 0; x <6;x++){
    	
    	if (x != valor){
    		
    		botonCropHidden(x)
    	}
    }
}

function botonCropHidden(valor){
	id = "btnCrop-" + valor;	
	var boton =  document.getElementById(id);
    boton.style.display="none"; 	
    boton.style.position="absolute";
}

function popupVisible(){
	document.getElementById('popup').style.visibility="visible"; 
}

function popupHidden(){
	document.getElementById('popup').style.visibility="visible"; 
	var status = document.getElementById('popup').style.visibility="hidden";  
    botonCropHidden('0');botonCropHidden('1');botonCropHidden('2');
    botonCropHidden('3');botonCropHidden('4');botonCropHidden('5'); 
}

// Popup Visible  + Boton Visible
/*
document.querySelector('.cropped-0').addEventListener("click", function() {	popupVisible(); botonCropVisible('0'); })
document.querySelector('.cropped-1').addEventListener("click", function() {	popupVisible(); botonCropVisible('1'); })
document.querySelector('.cropped-2').addEventListener("click", function() {	popupVisible(); botonCropVisible('2'); })
document.querySelector('.cropped-3').addEventListener("click", function() {	popupVisible(); botonCropVisible('3'); })
document.querySelector('.cropped-4').addEventListener("click", function() {	popupVisible(); botonCropVisible('4'); })
document.querySelector('.cropped-5').addEventListener("click", function() {	popupVisible(); botonCropVisible('5'); })
// Popup Hidden  + Boton Hidden
document.querySelector('.close').addEventListener("click", function() { popupHidden();})
*/
/////////////////////////////////////////////////////////////////////////////// 

function ImagenesGaleria1() {
	
	//alert('publicando')
	
    var options =
    {
        imageBox: '.imageBoxImage',
        thumbBox: '.thumbBoxImage',
        spinner: '.spinnerImage',
        imgSrc: 'avatar1.png'
    }
    var cropper = new cropbox(options);
    
    function croppedImage(valor){	
		var clase = ".cropped-" + valor;		
		var img = cropper.getDataURL();
		var tagImage = '<img class="img-responsive" src="'+img+'">';
		var nameInputHidden = 'blb_img' + valor;
		var inputHiddenImage = '<input required="required" readonly="readonly" type="hidden" id="'+ nameInputHidden +'" name="'+ nameInputHidden +'" value="'+img+'">';
    	document.querySelector(clase).innerHTML = tagImage+inputHiddenImage;
    	popupHidden(); 
	}

    document.querySelector('#fileImage').addEventListener('change', function(){
        var reader = new FileReader();
        reader.onload = function(e) {
            options.imgSrc = e.target.result;
            cropper = new cropbox(options);
        }
        reader.readAsDataURL(this.files[0]);
        this.files = [];
    })        
    	document.querySelector('#btnCrop-0').addEventListener('click', function(){ croppedImage('0') })


    // Maximizar
    document.querySelector('#btnZoomInImage').addEventListener('click', function(){
        cropper.zoomIn();
    })
    // Minimizar
    document.querySelector('#btnZoomOutImage').addEventListener('click', function(){
        cropper.zoomOut();
    })
};

    function ImagenesGaleria() {
    	
    	//alert('publicando')
    	
        var options =
        {
            imageBox: '.imageBox',
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: 'avatar1.png'
        }
        var cropper = new cropbox(options);
        
        function croppedImage(valor){	
			var clase = ".cropped-" + valor;		
			var img = cropper.getDataURL();
			var tagImage = '<img class="img-responsive" src="'+img+'">';
			var nameInputHidden = 'blb_img' + valor;
			var inputHiddenImage = '<input required="required" readonly="readonly" type="hidden" id="'+ nameInputHidden +'" name="'+ nameInputHidden +'" value="'+img+'">';
	    	document.querySelector(clase).innerHTML = tagImage+inputHiddenImage;
	    	popupHidden(); 
		}

        document.querySelector('#file').addEventListener('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })        


        document.querySelector('#btnCrop-1').addEventListener('click', function(){ croppedImage('1');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-2').addEventListener('click', function(){ croppedImage('2');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-3').addEventListener('click', function(){ croppedImage('3'); })
        document.querySelector('#btnCrop-4').addEventListener('click', function(){ croppedImage('4'); })
        document.querySelector('#btnCrop-5').addEventListener('click', function(){ croppedImage('5'); })

        // Maximizar
        document.querySelector('#btnZoomIn').addEventListener('click', function(){
            cropper.zoomIn();
        })
        // Minimizar
        document.querySelector('#btnZoomOut').addEventListener('click', function(){
            cropper.zoomOut();
        })
    };
    
    function ImagenesGaleriaEditar() {
    	
    	
    	//alert('editando')
    	
        var options =
        {
            imageBox: '.imageBox',
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: 'avatar1.png'
        }
        var cropper = new cropbox(options);
        
        function croppedImage(valor){	
			var clase = ".cropped-" + valor;		
			var img = cropper.getDataURL();
			var tagImage = '<img class="img-responsive" src="'+img+'">';
			//var nameInputHidden = 'blb_img' + valor;
			var nameInputHidden = 'blb_img';
			var inputHiddenImage = '<input type="hidden" id="'+ nameInputHidden +'" name="'+ nameInputHidden +'" value="'+img+'">';
	    	document.querySelector(clase).innerHTML = tagImage+inputHiddenImage;
	    	popupHidden(); 
		}

        document.querySelector('#file').addEventListener('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })        
        document.querySelector('#btnCrop-0').addEventListener('click', function(){ croppedImage('0');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-1').addEventListener('click', function(){ croppedImage('1');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-2').addEventListener('click', function(){ croppedImage('2');document.getElementById('file').value = "" })
        document.querySelector('#btnCrop-3').addEventListener('click', function(){ croppedImage('3'); })
        document.querySelector('#btnCrop-4').addEventListener('click', function(){ croppedImage('4'); })
        document.querySelector('#btnCrop-5').addEventListener('click', function(){ croppedImage('5'); })

        // Maximizar
        document.querySelector('#btnZoomIn').addEventListener('click', function(){
            cropper.zoomIn();
        })
        // Minimizar
        document.querySelector('#btnZoomOut').addEventListener('click', function(){
            cropper.zoomOut();
        })
    };    

/******************************************************************************************************/

  //Tipos:
    function filtro_por_tipo(tipo){//La llama el Buscador

    	//Filtra los paises por tipo:
    	dependientePaisesTipoBuscador(tipo);
        dependientePaisesTipoFiltro(tipo);
        
        //Filtra las ciudades por tipo:
    	dependienteCiudadTipoBuscador(tipo);
    	dependienteCiudadTipoFiltro(tipo);
            
    	//Filtra las marcas por tipo:
    	dependienteMarcasTipoBuscador(tipo);
        dependienteMarcasTipoFiltro(tipo);
            
        //Filtra los modelos por tipo:	
    	dependienteModelosTipoBuscador(tipo);
    	dependienteModelosTipoFiltro(tipo);
    	
    	//Filtra los colores por tipo:
    	dependienteColoresTipoBuscador(tipo);
    	dependienteColoresTipoFiltro(tipo);    	
    	
    	//Filtra los años por tipo:
    	dependienteAnosTipoBuscadorMin(tipo);
    	dependienteAnosTipoBuscadorMax(tipo);    	
    	dependienteAnosTipoFiltroMin(tipo);
    	dependienteAnosTipoFiltroMax(tipo);
    	
        monedas(0);
    }

    function filtro_por_tipo2(tipo){//La llama el Filtro

    	filtro_por_tipo(tipo);
    	filtros("tipo",tipo);
    }

    //Paises:
    function filtro_por_pais(pais){//La llama el Buscador

    	var pais = Number(pais);
    	
    	//Filtra las ciudades por pais:
    	dependienteCiudadPaisBuscador(pais);
    	dependienteCiudadPaisFiltro(pais);
    	        
    	//Filtra las marcas por pais:
    	dependienteMarcasPaisBuscador(pais);
        dependienteMarcasPaisFiltro(pais);
            
        //Filtra los modelos por pais:	
    	dependienteModelosPaisBuscador(pais);
    	dependienteModelosPaisFiltro(pais);
    	    	
    	//Filtra los colores por pais:
    	dependienteColoresPaisBuscador(pais);
    	dependienteColoresPaisFiltro(pais);    	
    		
    	monedas(pais);
    }

    function filtro_por_pais2(valor){//La llama el Filtro

    	var valor = Number(valor);
    	
    	filtro_por_pais(valor);
    	filtros('pais',valor);
    }

    //Ciudades:
    function filtro_por_ciudad(ciudad){//La llama el Buscador

    	//Filtra las marcas por ciudad:
    	dependienteMarcasCiudadBuscador(ciudad);
        dependienteMarcasCiudadFiltro(ciudad);
            
        //Filtra los modelos por ciudad:	
    	dependienteModelosCiudadBuscador(ciudad);
    	dependienteModelosCiudadFiltro(ciudad);
    	    	
    	//Filtra los colores por ciudad:
    	dependienteColoresCiudadBuscador(ciudad);
    	dependienteColoresCiudadFiltro(ciudad);
    }

    function filtro_por_ciudad2(ciudad){//La llama el Filtro

    	filtro_por_ciudad(ciudad);
    	filtros("ciudad",ciudad);
    }

    //Marcas:
    function filtro_por_marca(marca){//La llama el Buscador

    	 //Filtra los modelos por marca:	
    	dependienteModelosMarcasBuscador(marca);
    	dependienteModelosMarcasFiltro(marca);

    	dependienteColoresMarcasBuscador(marca);
    	dependienteColoresMarcasFiltro(marca);
    }

    function filtro_por_marca2(marca){//La llama el Filtro

    	filtro_por_marca(marca);
    	filtros('marca',marca);
    }
        
    function filtro_por_modelo(modelo){

    	dependienteColoresModeloBuscador(modelo);
    	dependienteColoresModeloFiltro(modelo);    	
    }
    
    function filtro_por_modelo2(modelo){
    	
    	filtro_por_modelo(modelo);
    	filtros('modelo',modelo);    	
    }

    function dependientePaisesTipoBuscador(valor){

    	document.getElementById('pais').selectedIndex = "0";
    	document.getElementById('ciudad').selectedIndex = "0";
    	
        divname_PaisesBuscador = "dependientePaisesBuscador";
	    //http.open("GET", 'paginas' + url, true);
	    http_PaisesBuscador.open("GET", 'PaisesTipoBuscador/'+valor, true);
	    http_PaisesBuscador.onreadystatechange = handleHttpResponsePaisesBuscador;
	    http_PaisesBuscador.send(null);
    }
    
    function dependientePaisesTipoFiltro(valor){

    	document.getElementById('pais').selectedIndex = "0";
    	document.getElementById('ciudad').selectedIndex = "0";

        divname_PaisesFiltro = "dependientePaisesFiltro";      
    	//http.open("GET", 'paginas' + url, true);
    	http_PaisesFiltro.open("GET", 'PaisesTipoFiltro/'+valor, true);
    	http_PaisesFiltro.onreadystatechange = handleHttpResponsePaisesFiltro;
    	http_PaisesFiltro.send(null);
    }
        
    function dependienteCiudadTipoBuscador(tipo){
		
    	document.getElementById('ciudad').selectedIndex = 0;
    	
        divname_CiudadBuscador = "divBuscadorCiudades";    
        //http.open("GET", 'paginas' + url, true);          
        http_CiudadBuscador.open("GET", 'CiudadesTipoBuscador/'+tipo, true);	        
        http_CiudadBuscador.onreadystatechange = handleHttpResponseCiudadBuscador;
        http_CiudadBuscador.send(null);
    }
    
    function dependienteCiudadTipoFiltro(tipo){
      	
      	document.getElementById('ciudad').selectedIndex = 0;

        divname_CiudadFiltro = "divFiltroCiudades";         
    	//http.open("GET", 'paginas' + url, true);          
        http_CiudadFiltro.open("GET", 'CiudadesTipoFiltro/'+tipo, true);          
    	http_CiudadFiltro.onreadystatechange = handleHttpResponseCiudadFiltro;
    	http_CiudadFiltro.send(null);
    }

    function dependienteMarcasTipoBuscador(valor){

    	document.getElementById('marca').selectedIndex = "0";
    	document.getElementById('modelo').selectedIndex = "0";
    	
        divname_MarcasBuscador = "dependienteMarcasBuscador";
	    //http.open("GET", 'paginas' + url, true);
	    http_MarcasBuscador.open("GET", 'MarcasTipoBuscador/'+valor, true);
	    http_MarcasBuscador.onreadystatechange = handleHttpResponseMarcasBuscador;
	    http_MarcasBuscador.send(null);
    }
    
    function dependienteMarcasTipoFiltro(lng_idtipo){

    	document.getElementById('marca').selectedIndex = "0";
    	document.getElementById('modelo').selectedIndex = "0";

        divname_MarcasFiltro = "dependienteMarcasFiltro";      
    	//http.open("GET", 'paginas' + url, true);
    	http_MarcasFiltro.open("GET", 'MarcasTipoFiltro/'+lng_idtipo, true);
    	http_MarcasFiltro.onreadystatechange = handleHttpResponseMarcasFiltro;
    	http_MarcasFiltro.send(null);
    }
        
    function dependienteModelosTipoBuscador(valor){

        document.getElementById('modelo').selectedIndex = "0";
    	
	    divname_ModelosBuscador = "dependienteModelosBuscador";
	    //http.open("GET", 'paginas' + url, true);	    
	    http_ModelosBuscador.open("GET", 'ModelosTipoBuscador/'+ valor, true);
	    http_ModelosBuscador.onreadystatechange = handleHttpResponseModelosBuscador;
	    http_ModelosBuscador.send(null);
    }
    
    function dependienteModelosTipoFiltro(valor){
    	
    	document.getElementById('modelo').selectedIndex = "0";

        divname_ModelosFiltro = "dependienteModelosFiltro";      
    	//http.open("GET", 'paginas' + url, true);        
        http_ModelosFiltro.open("GET", 'ModelosTipoFiltro/'+valor, true);        
    	http_ModelosFiltro.onreadystatechange = handleHttpResponseModelosFiltro;
    	http_ModelosFiltro.send(null);
    }
     
    function dependienteColoresTipoBuscador(valor){

    	document.getElementById('color').selectedIndex = "0";
    	
	    divname_ColoresBuscador = "dependienteColoresBuscador";
	    //http.open("GET", 'paginas' + url, true);	    
	    http_ColoresBuscador.open("GET", 'ColoresTipoBuscador/'+ valor, true);
	    http_ColoresBuscador.onreadystatechange = handleHttpResponseColoresBuscador;
	    http_ColoresBuscador.send(null);
    }

    function dependienteColoresTipoFiltro(valor){

		document.getElementById('color').selectedIndex = "0";

        divname_ColoresFiltro = "dependienteColoresFiltro";      
    	//http.open("GET", 'paginas' + url, true);        
        http_ColoresFiltro.open("GET", 'ColoresTipoFiltro/'+valor, true);        
    	http_ColoresFiltro.onreadystatechange = handleHttpResponseColoresFiltro;
    	http_ColoresFiltro.send(null);
    }
           
    function dependienteAnosTipoBuscadorMin(valor){    	    
    	
		document.getElementById('min_ano').selectedIndex = "0";

        divname_AnoBuscadorMin = "dependienteAnosBuscadorMin";      
    	//http.open("GET", 'paginas' + url, true);        
        http_AnoBuscadorMin.open("GET", 'AnosTipoBuscadorMin/'+valor, true);        
        http_AnoBuscadorMin.onreadystatechange = handleHttpResponseAnoBuscadorMin;
        http_AnoBuscadorMin.send(null);
    	
    }
    
    function dependienteAnosTipoBuscadorMax(valor){    	    
    	
		document.getElementById('max_ano').selectedIndex = "0";

        divname_AnoBuscadorMax = "dependienteAnosBuscadorMax";      
    	//http.open("GET", 'paginas' + url, true);        
        http_AnoBuscadorMax.open("GET", 'AnosTipoBuscadorMax/'+valor, true);        
        http_AnoBuscadorMax.onreadystatechange = handleHttpResponseAnoBuscadorMax;
        http_AnoBuscadorMax.send(null);
    	
    }    
    
    function dependienteAnosTipoFiltroMin(valor){    	    
    	
		document.getElementById('min_anoFiltro').selectedIndex = "0";

        divname_AnoFiltroMin = "dependienteAnosFiltroMin";      
    	//http.open("GET", 'paginas' + url, true);        
        http_AnoFiltroMin.open("GET", 'AnosTipoFiltroMin/'+valor, true);        
        http_AnoFiltroMin.onreadystatechange = handleHttpResponseAnoFiltroMin;
        http_AnoFiltroMin.send(null);
    	
    }
    
    function dependienteAnosTipoFiltroMax(valor){    	    
    	
		document.getElementById('max_anoFiltro').selectedIndex = "0";

		divname_AnoFiltroMax = "dependienteAnosFiltroMax";      
    	//http.open("GET", 'paginas' + url, true);        
		http_AnoFiltroMax.open("GET", 'AnosTipoFiltroMax/'+valor, true);        
		http_AnoFiltroMax.onreadystatechange = handleHttpResponseAnoFiltroMax;
		http_AnoFiltroMax.send(null);
    	
    }     
    
    function monedas(valor){
    	
    	moneda("monedaMinimo","monedaMaximo",valor,"str_moneda");
    	moneda("monedaMinimo1","monedaMaximo1",valor,"str_moneda1");
    }
    
    function dependienteCiudadPaisBuscador(lng_idpais){
   		
    	document.getElementById('ciudad').selectedIndex = 0;
    	
        divname_CiudadBuscador = "divBuscadorCiudades";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
       
        if(tipo != "0"){
        	
        	//Filtra las ciudades por tipo de vehiculo y pais:
        	http_CiudadBuscador.open("GET", 'CiudadesTipoPaisBuscador/'+lng_idpais+'/tipo/'+tipo, true);
        	
        }else{
        	//Filtra las ciudades por pais:
        	http_CiudadBuscador.open("GET", 'CiudadesPaisBuscador/'+lng_idpais, true);	
        }
        
        http_CiudadBuscador.onreadystatechange = handleHttpResponseCiudadBuscador;
        http_CiudadBuscador.send(null);

    }

    function dependienteCiudadPaisFiltro(lng_idpais){
      	
      	document.getElementById('ciudad').selectedIndex = 0;

        divname_CiudadFiltro = "divFiltroCiudades";
         
    	//http.open("GET", 'paginas' + url, true);
        var tipo = document.getElementById('tipo').value;
        
        if(tipo != "0"){
        	    	
        	http_CiudadFiltro.open("GET", 'CiudadesTipoPaisFiltro/'+lng_idpais+'/tipo/'+tipo, true);
        	
        }else{
        	
            http_CiudadFiltro.open("GET", 'CiudadesPaisFiltro/'+lng_idpais, true);
        }    
        
    	http_CiudadFiltro.onreadystatechange = handleHttpResponseCiudadFiltro;
    	http_CiudadFiltro.send(null);
    }
    
    function dependienteMarcasPaisBuscador(valor){

    	document.getElementById('marca').selectedIndex = "0";
    	document.getElementById('modelo').selectedIndex = "0";
    	
        divname_MarcasBuscador = "dependienteMarcasBuscador";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
            
        if(tipo != "0"){
        	
        	http_MarcasBuscador.open("GET", 'MarcasTipoPaisBuscador/'+valor+'/tipo/'+tipo, true);
        	
        }else{
        	
        	http_MarcasBuscador.open("GET", 'MarcasPaisBuscador/'+valor, true);
        	
        }
            
        http_MarcasBuscador.onreadystatechange = handleHttpResponseMarcasBuscador;
        http_MarcasBuscador.send(null);

    }
    
    function dependienteMarcasPaisFiltro(lng_idpais){

    	document.getElementById('marca').selectedIndex = "0";
    	document.getElementById('modelo').selectedIndex = "0";

        divname_MarcasFiltro = "dependienteMarcasFiltro";      
    	//http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
        
        if(tipo != "0"){
        	    	
        	http_MarcasFiltro.open("GET", 'MarcasTipoPaisFiltro/'+lng_idpais+'/tipo/'+tipo, true);
        	
        }else{
        	
        	http_MarcasFiltro.open("GET", 'MarcasPaisFiltro/'+lng_idpais, true);
        } 
            	
    	http_MarcasFiltro.onreadystatechange = handleHttpResponseMarcasFiltro;
    	http_MarcasFiltro.send(null);
    }
            
    function dependienteModelosPaisBuscador(valor){

    	document.getElementById('modelo').selectedIndex = "0";
    	
    	divname_ModelosBuscador = "dependienteModelosBuscador";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
            
        if(tipo != 0){
        	
        	http_ModelosBuscador.open("GET", 'ModelosTipoPaisBuscador/'+valor+'/tipo/'+tipo, true);
        	
        }else{

        	http_ModelosBuscador.open("GET", 'ModelosPaisBuscador/'+valor, true);        	
        }
            
        http_ModelosBuscador.onreadystatechange = handleHttpResponseModelosBuscador;
        http_ModelosBuscador.send(null);

    }
    
    function dependienteModelosPaisFiltro(valor){

    	document.getElementById('modelo').selectedIndex = "0";
    	
    	divname_ModelosFiltro = "dependienteModelosFiltro"; 
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
            
        if(tipo != 0){
        	
        	http_ModelosFiltro.open("GET", 'ModelosTipoPaisFiltro/'+valor+'/tipo/'+tipo, true);
        	
        }else{

        	http_ModelosFiltro.open("GET", 'ModelosPaisFiltro/'+valor, true);        	
        }
            
        http_ModelosFiltro.onreadystatechange = handleHttpResponseModelosFiltro;
        http_ModelosFiltro.send(null);    	    
    }    
    
    function dependienteColoresPaisBuscador(valor){
    	
    	document.getElementById('color').selectedIndex = "0";

    	divname_ColoresBuscador = "dependienteColoresBuscador";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
            
        if(tipo != 0){
        	
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisBuscador/'+valor+'/tipo/'+tipo, true);
        	
        }else{

        	http_ColoresBuscador.open("GET", 'ColoresPaisBuscador/'+valor, true);        	
        }
            
        http_ColoresBuscador.onreadystatechange = handleHttpResponseColoresBuscador;
        http_ColoresBuscador.send(null);

    }    
    
    function dependienteColoresPaisFiltro(valor){
    	
    	document.getElementById('color').selectedIndex = "0";

    	divname_ColoresFiltro = "dependienteColoresFiltro"; 
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
            
        if(tipo != 0){
        	
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisFiltro/'+valor+'/tipo/'+tipo, true);
        	
        }else{

        	http_ColoresFiltro.open("GET", 'ColoresPaisFiltro/'+valor, true);        	
        }
            
        http_ColoresFiltro.onreadystatechange = handleHttpResponseColoresFiltro;
        http_ColoresFiltro.send(null);    	    
    }     
        
    function dependienteMarcasCiudadBuscador(valor){

    	document.getElementById('marca').selectedIndex = "0";
    	document.getElementById('modelo').selectedIndex = "0";
    	
        divname_MarcasBuscador = "dependienteMarcasBuscador";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value; 
                
        if((tipo != "0") && (pais == "0")){
        	
        	//alert('filtra por tipo y ciudad')
        	http_MarcasBuscador.open("GET", 'MarcasTipoCiudadBuscador/'+valor+'/tipo/'+tipo, true);
        	        	
        }else if((tipo == "0") && (pais != "0")){
        	
        	//alert('filtra por pais y ciudad')
        	http_MarcasBuscador.open("GET", 'MarcasPaisCiudadBuscador/'+valor+'/pais/'+pais, true);
        	
        }else if ((tipo != "0") && (pais != "0")){
        	
        	//alert('filtra por tipo, pais y ciudad')
        	http_MarcasBuscador.open("GET", 'MarcasTipoPaisCiudadBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);
        }else{
        	
        	//alert('filtra por ciudad')
        	http_MarcasBuscador.open("GET", 'MarcasCiudadBuscador/'+valor, true);
        	
        }
            
        http_MarcasBuscador.onreadystatechange = handleHttpResponseMarcasBuscador;
        http_MarcasBuscador.send(null);

    }    
           
    function dependienteMarcasCiudadFiltro(valor){

    	document.getElementById('marca').selectedIndex = "0";
    	document.getElementById('modelo').selectedIndex = "0";
    	
        divname_MarcasFiltro = "dependienteMarcasFiltro";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value; 
                
        if((tipo != "0") && (pais == "0")){
        	
        	//alert('filtra por tipo y ciudad')
        	http_MarcasFiltro.open("GET", 'MarcasTipoCiudadFiltro/'+valor+'/tipo/'+tipo, true);
        	        	
        }else if((tipo == "0") && (pais != "0")){
        	
        	//alert('filtra por pais y ciudad')
        	http_MarcasFiltro.open("GET", 'MarcasPaisCiudadFiltro/'+valor+'/pais/'+pais, true);
        	
        }else if ((tipo != "0") && (pais != "0")){
        	
        	//alert('filtra por tipo, pais y ciudad')
        	http_MarcasFiltro.open("GET", 'MarcasTipoPaisCiudadFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);
        }else{
        	
        	//alert('filtra por ciudad')
        	http_MarcasFiltro.open("GET", 'MarcasCiudadFiltro/'+valor, true);
        	
        }
            
        http_MarcasFiltro.onreadystatechange = handleHttpResponseMarcasFiltro;
        http_MarcasFiltro.send(null);

    }     
    
    function dependienteModelosCiudadBuscador(valor){

    	document.getElementById('modelo').selectedIndex = "0";
    	
        divname_ModelosBuscador = "dependienteModelosBuscador";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value; 
                
        if((tipo != "0") && (pais == "0")){
        	
        	//alert('filtra por tipo y ciudad')
        	http_ModelosBuscador.open("GET", 'ModelosTipoCiudadBuscador/'+valor+'/tipo/'+tipo, true);
        	        	
        }else if((tipo == "0") && (pais != "0")){
        	
        	//alert('filtra por pais y ciudad')
        	http_ModelosBuscador.open("GET", 'ModelosPaisCiudadBuscador/'+valor+'/pais/'+pais, true);
        	
        }else if ((tipo != "0") && (pais != "0")){
        	
        	//alert('filtra por tipo, pais y ciudad')
        	http_ModelosBuscador.open("GET", 'ModelosTipoPaisCiudadBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);
        }else{
        	
        	//alert('filtra por ciudad')
        	http_ModelosBuscador.open("GET", 'ModelosCiudadBuscador/'+valor, true);
        	
        }
            
        http_ModelosBuscador.onreadystatechange = handleHttpResponseModelosBuscador;
        http_ModelosBuscador.send(null);

    }

    function dependienteModelosCiudadFiltro(valor){

    	document.getElementById('modelo').selectedIndex = "0";
    	
        divname_ModelosFiltro = "dependienteModelosFiltro";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value; 
                
        if((tipo != "0") && (pais == "0")){
        	
        	//alert('filtra por tipo y ciudad')
        	http_ModelosFiltro.open("GET", 'ModelosTipoCiudadFiltro/'+valor+'/tipo/'+tipo, true);
        	        	
        }else if((tipo == "0") && (pais != "0")){
        	
        	//alert('filtra por pais y ciudad')
        	http_ModelosFiltro.open("GET", 'ModelosPaisCiudadFiltro/'+valor+'/pais/'+pais, true);
        	
        }else if ((tipo != "0") && (pais != "0")){
        	
        	//alert('filtra por tipo, pais y ciudad')
        	http_ModelosFiltro.open("GET", 'ModelosTipoPaisCiudadFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);
        }else{
        	
        	//alert('filtra por ciudad')
        	http_ModelosFiltro.open("GET", 'ModelosCiudadFiltro/'+valor, true);
        	
        }
            
        http_ModelosFiltro.onreadystatechange = handleHttpResponseModelosFiltro;
        http_ModelosFiltro.send(null);

    }
    
    function dependienteColoresCiudadBuscador(valor){

    	document.getElementById('color').selectedIndex = "0";
    	
        divname_ColoresBuscador = "dependienteColoresBuscador";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value; 
                
        if((tipo != "0") && (pais == "0")){
        	
        	//alert('filtra por tipo y ciudad')
        	http_ColoresBuscador.open("GET", 'ColoresTipoCiudadBuscador/'+valor+'/tipo/'+tipo, true);
        	        	
        }else if((tipo == "0") && (pais != "0")){
        	
        	//alert('filtra por pais y ciudad')
        	http_ColoresBuscador.open("GET", 'ColoresPaisCiudadBuscador/'+valor+'/pais/'+pais, true);
        	
        }else if ((tipo != "0") && (pais != "0")){
        	
        	//alert('filtra por tipo, pais y ciudad')
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisCiudadBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);
        }else{
        	
        	//alert('filtra por ciudad')
        	http_ColoresBuscador.open("GET", 'ColoresCiudadBuscador/'+valor, true);
        	
        }
            
        http_ColoresBuscador.onreadystatechange = handleHttpResponseColoresBuscador;
        http_ColoresBuscador.send(null);

    }

    function dependienteColoresCiudadFiltro(valor){
    	
    	document.getElementById('color').selectedIndex = "0";

        divname_ColoresFiltro = "dependienteColoresFiltro";    
        //http.open("GET", 'paginas' + url, true);
        
        var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value; 
                
        if((tipo != "0") && (pais == "0")){
        	
        	//alert('filtra por tipo y ciudad')
        	http_ColoresFiltro.open("GET", 'ColoresTipoCiudadFiltro/'+valor+'/tipo/'+tipo, true);
        	        	
        }else if((tipo == "0") && (pais != "0")){
        	
        	//alert('filtra por pais y ciudad')
        	http_ColoresFiltro.open("GET", 'ColoresPaisCiudadFiltro/'+valor+'/pais/'+pais, true);
        	
        }else if ((tipo != "0") && (pais != "0")){
        	
        	//alert('filtra por tipo, pais y ciudad')
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisCiudadFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);
        }else{
        	
        	//alert('filtra por ciudad')
        	http_ColoresFiltro.open("GET", 'ColoresCiudadFiltro/'+valor, true);
        	
        }
            
        http_ColoresFiltro.onreadystatechange = handleHttpResponseColoresFiltro;
        http_ColoresFiltro.send(null);

    }    
    
    function dependienteModelosMarcasBuscador(valor){

    	document.getElementById('modelo').selectedIndex = "0";

    	var tipo = document.getElementById('tipo').value;
    	var pais = document.getElementById('pais').value;
    	var ciudad = document.getElementById('ciudad').value;

	    divname_ModelosBuscador = "dependienteModelosBuscador";
	    //http.open("GET", 'paginas' + url, true);
	    
        if((tipo != "0") && (pais == "0") && (ciudad == "0")){
        	
        	//alert('filtra por tipo y marca')
        	http_ModelosBuscador.open("GET", 'ModelosTipoMarcaBuscador/'+valor+'/tipo/'+tipo, true);
        	        	
        }else if((tipo == "0") && (pais != "0") && (ciudad == "0")){
        	
        	//alert('filtra por pais y marca')
        	http_ModelosBuscador.open("GET", 'ModelosPaisMarcaBuscador/'+valor+'/pais/'+pais, true);
        	
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0")){
        	
        	//alert('filtra por ciudad y marca')
        	http_ModelosBuscador.open("GET", 'ModelosCiudadMarcaBuscador/'+valor+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad == "0")){

        	//alert('filtra por tipo, pais y marca')
        	http_ModelosBuscador.open("GET", 'ModelosTipoPaisMarcaBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);

		}else if ((tipo != "0") && (pais == "0") && (ciudad != "0")){

        	//alert('filtra por tipo, ciudad y marca')
        	http_ModelosBuscador.open("GET", 'ModelosTipoCiudadMarcaBuscador/'+valor+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
		
		}else if ((tipo == "0") && (pais != "0") && (ciudad != "0")){

        	//alert('filtra por pais, ciudad y marca')
        	http_ModelosBuscador.open("GET", 'ModelosPaisCiudadMarcaBuscador/'+valor+'/pais/'+pais+'/ciudad/'+ciudad, true);
		
		}else if ((tipo != "0") && (pais != "0") && (ciudad != "0")){

        	//alert('filtra por tipo, pais, ciudad y marca')
        	http_ModelosBuscador.open("GET", 'ModelosTipoPaisCiudadMarcaBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais+'/ciudad/'+ciudad, true);
		
		}else{
        	
        	//alert('filtra por marca')
        	http_ModelosBuscador.open("GET", 'ModelosMarcaBuscador/'+valor, true);
        	
        }

	    http_ModelosBuscador.onreadystatechange = handleHttpResponseModelosBuscador;
	    http_ModelosBuscador.send(null);

    }
    
    function dependienteModelosMarcasFiltro(valor){
      	
        var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value;
        var ciudad = document.getElementById('ciudad').value;

        divname_ModelosFiltro = "dependienteModelosFiltro";
        //http.open("GET", 'paginas' + url, true);
        
        if((tipo != "0") && (pais == "0") && (ciudad == "0")){
            
            //alert('filtra por tipo y marca')
            http_ModelosFiltro.open("GET", 'ModelosTipoMarcaFiltro/'+valor+'/tipo/'+tipo, true);
                        
        }else if((tipo == "0") && (pais != "0") && (ciudad == "0")){
            
            //alert('filtra por pais y marca')
            http_ModelosFiltro.open("GET", 'ModelosPaisMarcaFiltro/'+valor+'/pais/'+pais, true);
            
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0")){
            
            //alert('filtra por ciudad y marca')
            http_ModelosFiltro.open("GET", 'ModelosCiudadMarcaFiltro/'+valor+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad == "0")){

            //alert('filtra por tipo, pais y marca')
            http_ModelosFiltro.open("GET", 'ModelosTipoPaisMarcaFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);

        }else if ((tipo != "0") && (pais == "0") && (ciudad != "0")){

            //alert('filtra por tipo, ciudad y marca')
            http_ModelosFiltro.open("GET", 'ModelosTipoCiudadMarcaFiltro/'+valor+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais != "0") && (ciudad != "0")){

            //alert('filtra por pais, ciudad y marca')
            http_ModelosFiltro.open("GET", 'ModelosPaisCiudadMarcaFiltro/'+valor+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad != "0")){

            //alert('filtra por tipo, pais, ciudad y marca')
            http_ModelosFiltro.open("GET", 'ModelosTipoPaisCiudadMarcaFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else{
            
            //alert('filtra por marca')
            http_ModelosFiltro.open("GET", 'ModelosMarcaFiltro/'+valor, true);
            
        }

        http_ModelosFiltro.onreadystatechange = handleHttpResponseModelosFiltro;
        http_ModelosFiltro.send(null);

    }
    
	function dependienteColoresMarcasBuscador(valor){
		var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value;
        var ciudad = document.getElementById('ciudad').value;

        divname_ColoresBuscador = "dependienteColoresBuscador";
        //http.open("GET", 'paginas' + url, true);
        
        if((tipo != "0") && (pais == "0") && (ciudad == "0")){
            
            //alert('filtra por tipo y marca')
        	http_ColoresBuscador.open("GET", 'ColoresTipoMarcaBuscador/'+valor+'/tipo/'+tipo, true);
                        
        }else if((tipo == "0") && (pais != "0") && (ciudad == "0")){
            
            //alert('filtra por pais y marca')
        	http_ColoresBuscador.open("GET", 'ColoresPaisMarcaBuscador/'+valor+'/pais/'+pais, true);
            
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0")){
            
            //alert('filtra por ciudad y marca')
        	http_ColoresBuscador.open("GET", 'ColoresCiudadMarcaBuscador/'+valor+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad == "0")){

            //alert('filtra por tipo, pais y marca')
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisMarcaBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);

        }else if ((tipo != "0") && (pais == "0") && (ciudad != "0")){

            //alert('filtra por tipo, ciudad y marca')
        	http_ColoresBuscador.open("GET", 'ColoresTipoCiudadMarcaBuscador/'+valor+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais != "0") && (ciudad != "0")){

            //alert('filtra por pais, ciudad y marca')
        	http_ColoresBuscador.open("GET", 'ColoresPaisCiudadMarcaBuscador/'+valor+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad != "0")){

            //alert('filtra por tipo, pais, ciudad y marca')
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisCiudadMarcaBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else{
            
            //alert('filtra por marca')
        	http_ColoresBuscador.open("GET", 'ColoresMarcaBuscador/'+valor, true);
            
        }

        http_ColoresBuscador.onreadystatechange = handleHttpResponseColoresBuscador;
        http_ColoresBuscador.send(null);

	}    
	
	function dependienteColoresMarcasFiltro(valor){
		var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value;
        var ciudad = document.getElementById('ciudad').value;

        divname_ColoresFiltro = "dependienteColoresFiltro";
        //http.open("GET", 'paginas' + url, true);
        
        if((tipo != "0") && (pais == "0") && (ciudad == "0")){
            
            //alert('filtra por tipo y marca')
        	http_ColoresFiltro.open("GET", 'ColoresTipoMarcaFiltro/'+valor+'/tipo/'+tipo, true);
                        
        }else if((tipo == "0") && (pais != "0") && (ciudad == "0")){
            
            //alert('filtra por pais y marca')
        	http_ColoresFiltro.open("GET", 'ColoresPaisMarcaFiltro/'+valor+'/pais/'+pais, true);
            
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0")){
            
            //alert('filtra por ciudad y marca')
        	http_ColoresFiltro.open("GET", 'ColoresCiudadMarcaFiltro/'+valor+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad == "0")){

            //alert('filtra por tipo, pais y marca')
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisMarcaFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);

        }else if ((tipo != "0") && (pais == "0") && (ciudad != "0")){

            //alert('filtra por tipo, ciudad y marca')
        	http_ColoresFiltro.open("GET", 'ColoresTipoCiudadMarcaFiltro/'+valor+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais != "0") && (ciudad != "0")){

            //alert('filtra por pais, ciudad y marca')
        	http_ColoresFiltro.open("GET", 'ColoresPaisCiudadMarcaFiltro/'+valor+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad != "0")){

            //alert('filtra por tipo, pais, ciudad y marca')
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisCiudadMarcaFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else{
            
            //alert('filtra por marca')
        	http_ColoresFiltro.open("GET", 'ColoresMarcaFiltro/'+valor, true);
            
        }

        http_ColoresFiltro.onreadystatechange = handleHttpResponseColoresFiltro;
        http_ColoresFiltro.send(null);

	}	
	
	function dependienteColoresModeloBuscador(valor){
		var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value;
        var ciudad = document.getElementById('ciudad').value;
        var marca = document.getElementById('marca').value;

        divname_ColoresBuscador = "dependienteColoresBuscador";
        //http.open("GET", 'paginas' + url, true);
        
        if((tipo != "0") && (pais == "0") && (ciudad == "0") && (marca == "0")){
            
            //alert('filtra por tipo y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresTipoModeloBuscador/'+valor+'/tipo/'+tipo, true);
                        
        }else if((tipo == "0") && (pais != "0") && (ciudad == "0") && (marca == "0")){
            
            //alert('filtra por pais y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresPaisModeloBuscador/'+valor+'/pais/'+pais, true);
            
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0") && (marca == "0")){
            
            //alert('filtra por ciudad y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresCiudadModeloBuscador/'+valor+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais == "0") && (ciudad == "0") && (marca != "0")){
	        
	        //alert('filtra por marca y modelo')
	    	http_ColoresBuscador.open("GET", 'ColoresMarcaModeloBuscador/'+valor+'/marca/'+marca, true);
	    
	    }else if ((tipo != "0") && (pais != "0") && (ciudad == "0") && (marca == "0")){

            //alert('filtra por tipo, pais y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisModeloBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);

        }else if ((tipo != "0") && (pais == "0") && (ciudad != "0") && (marca == "0")){

            //alert('filtra por tipo, ciudad y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresTipoCiudadModeloBuscador/'+valor+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
                
	    }else if ((tipo != "0") && (pais == "0") && (ciudad == "0") && (marca != "0")){
	
	        //alert('filtra por tipo, marca y modelo')
	    	http_ColoresBuscador.open("GET", 'ColoresTipoMarcaModeloBuscador/'+valor+'/tipo/'+tipo+'/marca/'+marca, true);
	    
	    }else if ((tipo == "0") && (pais != "0") && (ciudad != "0") && (marca == "0")){

            //alert('filtra por pais, ciudad y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresPaisCiudadModeloBuscador/'+valor+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais != "0") && (ciudad == "0") && (marca != "0")){

            //alert('filtra por pais, marca y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresPaisMarcaModeloBuscador/'+valor+'/pais/'+pais+'/marca/'+marca, true);
        
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por ciudad, marca y modelo')
        	http_ColoresBuscador.open("GET", 'ColoresCiudadMarcaModeloBuscador/'+valor+'/marca/'+marca+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad != "0") && (marca == "0")){

            //alert('filtra por tipo, pais, y ciudad')
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisCiudadModeloBuscador/'+valor+'/tipo/'+tipo+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais == "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por tipo, ciudad y marca')
        	http_ColoresBuscador.open("GET", 'ColoresTipoCiudadMarcaModeloBuscador/'+valor+'/tipo/'+tipo+'/marca/'+marca+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais != "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por pais, ciudad y marca')
        	http_ColoresBuscador.open("GET", 'ColoresPaisCiudadMarcaModeloBuscador/'+valor+'/pais/'+pais+'/marca/'+marca+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad == "0") && (marca != "0")){

            //alert('filtra por tipo, pais y marca')
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisMarcaModeloBuscador/'+valor+'/pais/'+pais+'/marca/'+marca+'/tipo/'+tipo, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por tipo, pais, ciudad y marca')
        	http_ColoresBuscador.open("GET", 'ColoresTipoPaisCiudadMarcaModeloBuscador/'+valor+'/pais/'+pais+'/marca/'+marca+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
        
        }else{
            
            //alert('filtra por modelo')
        	http_ColoresBuscador.open("GET", 'ColoresModeloBuscador/'+valor, true);
            
        }

        http_ColoresBuscador.onreadystatechange = handleHttpResponseColoresBuscador;
        http_ColoresBuscador.send(null);

	}
    
	
	function dependienteColoresModeloFiltro(valor){
		var tipo = document.getElementById('tipo').value;
        var pais = document.getElementById('pais').value;
        var ciudad = document.getElementById('ciudad').value;
        var marca = document.getElementById('marca').value;

        divname_ColoresFiltro = "dependienteColoresFiltro";
        //http.open("GET", 'paginas' + url, true);
        
        if((tipo != "0") && (pais == "0") && (ciudad == "0") && (marca == "0")){
            
            //alert('filtra por tipo y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresTipoModeloFiltro/'+valor+'/tipo/'+tipo, true);
                        
        }else if((tipo == "0") && (pais != "0") && (ciudad == "0") && (marca == "0")){
            
            //alert('filtra por pais y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresPaisModeloFiltro/'+valor+'/pais/'+pais, true);
            
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0") && (marca == "0")){
            
            //alert('filtra por ciudad y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresCiudadModeloFiltro/'+valor+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais == "0") && (ciudad == "0") && (marca != "0")){
	        
	        //alert('filtra por marca y modelo')
	    	http_ColoresFiltro.open("GET", 'ColoresMarcaModeloFiltro/'+valor+'/marca/'+marca, true);
	    
	    }else if ((tipo != "0") && (pais != "0") && (ciudad == "0") && (marca == "0")){

            //alert('filtra por tipo, pais y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisModeloFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais, true);

        }else if ((tipo != "0") && (pais == "0") && (ciudad != "0") && (marca == "0")){

            //alert('filtra por tipo, ciudad y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresTipoCiudadModeloFiltro/'+valor+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
                
	    }else if ((tipo != "0") && (pais == "0") && (ciudad == "0") && (marca != "0")){
	
	        //alert('filtra por tipo, marca y modelo')
	    	http_ColoresFiltro.open("GET", 'ColoresTipoMarcaModeloFiltro/'+valor+'/tipo/'+tipo+'/marca/'+marca, true);
	    
	    }else if ((tipo == "0") && (pais != "0") && (ciudad != "0") && (marca == "0")){

            //alert('filtra por pais, ciudad y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresPaisCiudadModeloFiltro/'+valor+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais != "0") && (ciudad == "0") && (marca != "0")){

            //alert('filtra por pais, marca y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresPaisMarcaModeloFiltro/'+valor+'/pais/'+pais+'/marca/'+marca, true);
        
        }else if ((tipo == "0") && (pais == "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por ciudad, marca y modelo')
        	http_ColoresFiltro.open("GET", 'ColoresCiudadMarcaModeloFiltro/'+valor+'/marca/'+marca+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad != "0") && (marca == "0")){

            //alert('filtra por tipo, pais, y ciudad')
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisCiudadModeloFiltro/'+valor+'/tipo/'+tipo+'/pais/'+pais+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais == "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por tipo, ciudad y marca')
        	http_ColoresFiltro.open("GET", 'ColoresTipoCiudadMarcaModeloFiltro/'+valor+'/tipo/'+tipo+'/marca/'+marca+'/ciudad/'+ciudad, true);
        
        }else if ((tipo == "0") && (pais != "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por pais, ciudad y marca')
        	http_ColoresFiltro.open("GET", 'ColoresPaisCiudadMarcaModeloFiltro/'+valor+'/pais/'+pais+'/marca/'+marca+'/ciudad/'+ciudad, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad == "0") && (marca != "0")){

            //alert('filtra por tipo, pais y marca')
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisMarcaModeloFiltro/'+valor+'/pais/'+pais+'/marca/'+marca+'/tipo/'+tipo, true);
        
        }else if ((tipo != "0") && (pais != "0") && (ciudad != "0") && (marca != "0")){

            //alert('filtra por tipo, pais, ciudad y marca')
        	http_ColoresFiltro.open("GET", 'ColoresTipoPaisCiudadMarcaModeloFiltro/'+valor+'/pais/'+pais+'/marca/'+marca+'/tipo/'+tipo+'/ciudad/'+ciudad, true);
        
        }else{
            
            //alert('filtra por modelo')
        	http_ColoresFiltro.open("GET", 'ColoresModeloFiltro/'+valor, true);
            
        }

        http_ColoresFiltro.onreadystatechange = handleHttpResponseColoresFiltro;
        http_ColoresFiltro.send(null);

	}	
		
	function acciones(id,valor){

		var accion = document.getElementById('accionesPublicacion'+valor).value;
		
		var x = document.getElementById('accionesPublicacion'+valor);
		var accionText = x.options[x.selectedIndex].text;
						
		switch (accionText) {
			case "En Línea":
			case "Pausar":
			case "Vendido":
								
				if(accionText == "En Línea"){
					accionText = "Activa";
				}else if(accionText == "Pausar"){
					accionText = "Pausada";
				}else if(accionText == "Vendido"){
					accionText = "Vendido";																				
					
				}
						
				
				
				
				
				
			    divname = "accionPublicacion"+valor;
			    
			    //alert('div->'+divname +' - accion->'+ accion +' - texto->'+ accionText+' - id->'+id);
			    //http.open("GET", 'paginas' + url, true);
			    http.open("GET", 'Acciones/'+accion+'/texto/'+accionText+'/id/'+id, true);//ver archivo: routes.php
			    http.onreadystatechange = handleHttpResponse;
			    http.send(null);
			    
			    if(accionText == "Vendido"){
			    	window.location.href="http://vehiculos-troovami.got/Mi-Cuenta";
			    }
			    
										
			break;
				
			case "Modificar":
								
				window.location.href="http://vehiculos-troovami.got/Mi-Cuenta/Modificar/"+id;//ver archivo: routes.php
                //window.location.href="http://cars.troovami.com/Mi-Cuenta/Modificar/"+id;
				//window.location.href="http://troovami.com/Mi-Cuenta/Modificar/"+id;//ver archivo: routes.php
                //window.location.href="http://viserion-troovami.ddns.net/Mi-Cuenta/Modificar/"+id;

			break;
		
		}
			    	   	
	}
	
	function verificarPlaca(valor){
		
		//alert(valor);		

	    divname_placas = "verificarPlaca";
	    //http.open("GET", 'paginas' + url, true);
	    http_placas.open("GET", 'Placas/'+valor, true);
	    http_placas.onreadystatechange = handleHttpResponse_placas;
	    http_placas.send(null);

		
	}
	
	
	function fav(id){
		
		//alert(id);

	    divname_fav = "fav_pub"+id;	    
	    http_fav.open("GET", 'Favoritos/'+id, true);
	    http_fav.onreadystatechange = handleHttpResponse_fav;
	    http_fav.send(null);
	    
		
	}
	
	
	
	
	
	
	
	
	
	
	
    