<?php

namespace Troovami;


use Illuminate\Database\Eloquent\Model;

class ImagenesVehiculos extends Model
{
    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_imagenes_vehiculos';
    //protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
      protected $fillable = ['lng_idvehiculo','blb_img','int_peso','bol_eliminado','updated_at','created_at'];

      /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

}
