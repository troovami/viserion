<?php

namespace Troovami;


use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_vehiculos';
    //protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
      protected $fillable = ['lng_idpersona','lng_idtipo_vehiculo','lng_idsubtipo_vehiculo','str_placa','lng_idmodelo','lng_idcilindrada','int_cilindros','int_ano',
      		'lng_idarranque','lng_iddesplazamiento','lng_iddireccion','lng_idestereo','lng_idtransmision','lng_idequipo_medico','int_pisos',
      		'int_alto','int_ancho','str_carroceria','lng_idfrenado','int_carga','int_levantamiento','int_lastre','int_largo','lng_idlibreaceite',
      		'int_potenciabruta','str_tambor','int_produccion','lng_idenfriamiento','dbl_neumatico','int_potencia','int_velocidades','int_pasajeros',
      		'int_horasuso','str_comentario','lng_idnegociable','lng_idtraccion','lng_idtapizado','lng_idmotorreparado','lng_idvidrios',
      		'int_cantidad_puertas','lng_idcolor','lng_idcombustible','lng_idunicodueno','str_recorrido','str_version','lng_idtipomotor',
      		'lng_idfinanciamiento','lng_idchocado','lng_idrecibomoto','lng_idsistemaarranque','dmt_fecha_publicacion_fin','dmt_fecha_publicacion',
      		'bol_eliminado','bol_activa','int_esloralargo','int_mangaancho','lng_idmaxtripulantes','lng_idmaterial','int_peso','int_potenciamax',
      		'str_precio_venta','str_moneda','lng_idpais','lng_idciudad','str_video','status_admin','status_user','lng_idbano','lng_idventana'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['lng_idpersona','lng_idmodelo'];

}