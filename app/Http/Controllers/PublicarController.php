<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Troovami\Consultas;
use Troovami\Buscador;

class PublicarController extends Controller
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
        $menu = Consultas::querys('menu');
    	return \View::make('publicar',compact('menu'));
    }   
}