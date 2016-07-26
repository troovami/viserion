<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

trait AuthenticatesUsers
{
    use RedirectsUsers;

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        //return view('auth.login');
        return view('errors.denegado');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);

        $correoPersona = DB::table('tbl_personas as per')
        ->where('per.email', '=', $request['email'])
        ->select('per.bol_eliminado','per.email')
        ->get();        
        
        if (!$correoPersona){
        	
        	return back()->withErrors(['El correo: '. $request['email']. ' no existe']);
        	
        }

        $persona = DB::table('tbl_personas as per')
        ->where('per.email', '=', $request['email'])
        ->Where(function ($query) {
        	$query->where('per.bol_eliminado','=',false);
        })
        ->select('per.bol_eliminado','per.email')
        ->get();

        if((!$persona)){
        	
        	return back()->withErrors(['La cuenta con el correo: '. $request['email']. ' esta desactivada']);
        	
        }else{
        	
        	$credentials = $this->getCredentials($request);
        		
        	if (Auth::attempt($credentials, $request->has('remember'))) {
        		        		
        		$ruta = explode("/",$request['posicion']);

        		if(isset($ruta[1]) && !empty($ruta[1])){        		
        			return redirect()->route('detalles',$ruta[1]);        		
        		}
        		
        		return redirect()->intended($this->redirectPath());
        	}
        		
        	return redirect($this->loginPath())
        	->withInput($request->only('email', 'remember'))
        	->withErrors([
        	'email' => $this->getFailedLoginMessage(),
        	]);
        	
        }
       	
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return $request->only('email', 'password');
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage()
    {
        //return 'These credentials do not match our records.';
        return 'Verifique su Correo Electrónico o Contraseña';
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    /**
     * Get the path to the login route.
     *
     * @return string
     */
    public function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : '/auth/login';
    }
}
