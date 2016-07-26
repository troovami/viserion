<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Troovami\Consultas;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {        
    	$paises = Consultas::querys('paises');
    	$genero = Consultas::querysValor('maestro','genero');

        return \View::make('auth.register', compact('genero','paises'));
        //return \View::make('auth.register',array('genero'=>$genero,'paises'=>$paises,'roles'=>$roles));
        //return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::login($this->create($request->all()));

        return redirect($this->redirectPath());
    }
}