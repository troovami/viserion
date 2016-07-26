<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use Troovami\Buscador;

class ErrorController extends Controller
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
    	return \View::make('errors.404');
    }
}
