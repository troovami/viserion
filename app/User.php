<?php

namespace Troovami;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_personas';
    //protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
      protected $fillable = ['name','str_nombre','str_apellido','lng_idgenero',
      'dmt_fecha_nacimiento','str_ididentificacion', 'str_telefono','blb_img',
      'lng_idpais','password','email','str_twitter','str_facebook','str_instagram','bol_certificado','bol_eliminado','lng_idservicio'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','blb_img'];
    
    
    public function setPasswordAttribute($valor){
    	
    	if(!empty($valor)){
    		$this->attributes['password'] = \Hash::make($valor);
    	}
    }
        
    public function setBlbimgAttribute($valor){
    	     	
    	if(!empty($valor)){    		 
    		$this->attributes['blb_img'] = base64_encode(file_get_contents($valor));   		    		    		
    	}    
    } 
    
}
