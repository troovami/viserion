<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use Troovami\Consultas;

class Buscador extends Model
{
    protected function camposBuscador(){

        //Las usan el buscador en cabezaA.blade.php y el filtro en inicio.blade.php
        $paisesBuscador = Consultas::querys('paisesPublicados');
        $ciudades = Consultas::querys('ciudadesPublicados');
        $marcas = Consultas::querys('marcasPublicados');                    
        $tipos = Consultas::querys('tiposPublicados');                
        $colors = Consultas::querys('coloresPublicados');                 
        $anospublicados = Consultas::querys('anosPublicados');
        $modelosTotal = Consultas::querys('modelosPublicados');        
        $paisesLista = Consultas::querys('paisesLista');
        $marcasPublicadosHoy = Consultas::querys('marcasPublicadosHoy');
                
        \View::share(compact('paisesBuscador','tipos','colors','modelosTotal','ciudades','marcas','anospublicados','paisesLista','marcasPublicadosHoy'));   
    }
}