<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use Troovami\Buscador;

class DenegadoController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        Buscador::camposBuscador();
    }

	public function index()
    {
        return \View::make('errors.denegado');
    }
}