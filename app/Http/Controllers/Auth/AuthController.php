<?php

namespace Troovami\Http\Controllers\Auth;

use Troovami\User;
use Validator;
use Troovami\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Troovami\Buscador;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;
    
    //entre comillas la ruta a la que deseas redireccionar
    //protected $redirectTo = 'registro-de-usuario';
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        Buscador::camposBuscador();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
        		
            'name' => 'required|max:255|unique:tbl_personas',
            //'blb_img' =>    'required|image:jpeg,png,jpg',
        	'str_nombre' => 'required|max:255',
            'str_apellido' => 'required|max:255',
        	'lng_idgenero' => 'required|max:255',
        	'dmt_fecha_nacimiento' => 'required|max:255',
            'str_ididentificacion' => 'required|max:255|unique:tbl_personas',
        	'lng_idpais' => 'required|max:255',
            'str_telefono' => 'required|max:255',

        	'email' => 'required|email|max:255|unique:tbl_personas',
        	'password' => 'required|confirmed|min:6',
            'str_twitter' => 'unique:tbl_personas',
            'str_facebook' => 'unique:tbl_personas',
            'str_instagram' => 'unique:tbl_personas',
            
        	
        	/* 'name' => 'required|max:255',
        	'email' => 'required|email|max:255|unique:users',
        	'password' => 'required|confirmed|min:6', */        		
        		
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)     
    {      	    	                     
    	if(!empty($data['blb_img'])){
    		
	    	return User::create([
	        		
	        	/*	
	            'name' => $data['name'],
	            'email' => $data['email'],
	            'password' => bcrypt($data['password']),
	        	*/
	        		'name' => $data['name'],
	        		'str_nombre' => $data['str_nombre'],
	        		'str_apellido' => $data['str_apellido'],
	        		'lng_idgenero' => $data['lng_idgenero'],
	        		'dmt_fecha_nacimiento' => $data['dmt_fecha_nacimiento'],
	        		'str_ididentificacion' => $data['str_ididentificacion'],
	        		'lng_idpais' => $data['lng_idpais'],	    				    		
	        		//'password' => bcrypt($data['password']),
	    			'password' => $data['password'],	    				    			
	        		'email' => $data['email'],
	        		'str_twitter' => trim($data['str_twitter']),
	        		'str_facebook' => trim($data['str_facebook']),
	        		'str_instagram' => trim($data['str_instagram']),
	                'lng_idservicio' => 5,
	                'str_telefono' => $data['str_telefono'],
	        		//'blb_img' => base64_encode(file_get_contents($data['blb_img'])),
	    			'blb_img' => $data['blb_img'],
	        ]);
    		
    	}else{

    		return User::create([
    		    		
    				'name' => $data['name'],
    				'str_nombre' => $data['str_nombre'],
    				'str_apellido' => $data['str_apellido'],
    				'lng_idgenero' => $data['lng_idgenero'],
    				'dmt_fecha_nacimiento' => $data['dmt_fecha_nacimiento'],
    				'str_ididentificacion' => $data['str_ididentificacion'],
    				'lng_idpais' => $data['lng_idpais'],    				    				
    				//'password' => bcrypt($data['password']),
    				'password' => $data['password'],    				
    				'email' => $data['email'],
    				'str_twitter' => trim($data['str_twitter']),
    				'str_facebook' => trim($data['str_facebook']),
    				'str_instagram' => trim($data['str_instagram']),
    				'lng_idservicio' => 5,
    				'str_telefono' => $data['str_telefono'],    		
    		]);    		
    	}    	
    }

    /**
     * Get the path to the login route.
     *
     * @return string
     */
   public function loginPath()
    {
        return route('login');        
    }


    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route('home');
    }
          
}
