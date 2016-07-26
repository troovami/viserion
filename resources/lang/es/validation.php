<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => 'The :attribute must be a valid email address.',
    'filled'               => 'The :attribute field is required.',
    'exists'               => 'The selected :attribute is invalid.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ':attribute',
    'required_if'          => 'The :attribute campo es requerido when :other is :value.',
    'required_with'        => 'The :attribute campo es requerido when :values is present.',
    'required_with_all'    => 'The :attribute campo es requerido when :values is present.',
    'required_without'     => 'The :attribute campo es requerido when :values is not present.',
    'required_without_all' => 'The :attribute campo es requerido when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute ya se ha tomado.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',

            
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
		
			
    'attributes' => [
    		
    		'lng_idsubtipo_vehiculo' => 'Clasificación',
    		'lng_idmarca' => 'Marca',
			'lng_idmodelo' => 'Modelo',
			'str_placa' => 'Placas',
			'int_cantidad_puertas' => 'Cantidad de Puertas',
			'lng_idcolor' => 'Color',
			'lng_iddireccion' => 'Dirección',
			'lng_idestereo' => 'Estereo',
			'lng_idtransmision' => 'Transmisión',
			'lng_idtapizado' => 'Tapizado',
			'lng_idvidrios' => 'Vidrios',
			'lng_idtraccion' => 'Tracción',
			'lng_idcombustible' => 'Combustible',
			'int_ano' => 'Año',
			'str_recorrido' => 'Kilometraje',
			'int_cilindros' => 'N° de Cilindros',
			'lng_idcilindrada' => 'Cilindrada (CC)',
			'lng_idchocado' => 'Chocado',
			'lng_idnegociable' => 'Negociable',
			'lng_idfinanciamiento' => 'Financiamiento',
			'lng_idunicodueno' => 'Unico Dueño',
			'lng_idmotorreparado' => 'Motor Reparado',
			'int_pasajeros' => 'Capacidad de Personas',					
			'lng_idarranque' => 'Arranque',					
			'lng_idcaracteristica' => 'Caracteristicas',
            'blb_img' => 'Imágen de la cuenta',					
			'blb_img0' => 'Imagen Principal',
			'blb_img1' => 'Imagen Interior',
			'blb_img2' => 'Imagen Motor',
			'blb_img3' => 'Imagen Otros 1',
			'blb_img4' => 'Imagen Otros 2',
			'blb_img5' => 'Imagen Otros 3',		
			'str_precio_venta' => 'Precio',									
    		'lng_idpais' => 'País',
			'lng_idciudad' => 'Ciudad',
    		'lng_idequipo_medico' => 'Equipo Médico',    		
    		'str_carroceria' => 'Carrocería',
    		'lng_idventana' => 'Ventana Panorámica',
    		'lng_idbano' => 'Baño',
    		'lng_idfrenado' => 'Sistema de Frenado',
    		'int_carga' => 'Capacidad de Carga (Kg)',
    		'int_lastre' => 'Capacidad de Lastre (Kg)',
    		'dbl_neumatico' => 'Medida del Neumatico',
    		'int_potenciamax' => 'Potencia Máxima',
            'lng_idtipomotor' => 'Tipo de Motor',
            'lng_idrecibomoto' => 'Recibo Moto',
            'str_nombre' => 'Nombre',
            'str_apellido' => 'Apellido',
            'name' => 'Usuario',
            'str_ididentificacion' => 'Cédula',
            'email' => 'Correo Electrónico',
            'password' => 'Clave',
            'str_telefono' => 'Teléfono',
            'lng_idgenero' => 'Género',
    ],

];
