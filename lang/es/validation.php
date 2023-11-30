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

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'accepted_if' => 'El campo :attribute debe ser aceptado cuando :other es igual a :value.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo puede contener letras.',
    'alpha_dash' => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute solo puede contener letras y números.',
    'array' => 'El campo :attribute debe ser un array.',
    'ascii' => 'El campo :attribute sólo puede contener caracteres alfanuméricos y símbolos.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El campo :attribute debe contener entre :min y :max elementos.',
        'file' => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'string' => 'El campo :attribute debe contener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'can' => 'El campo contiene un valor no autorizado.',
    'confirmed' => 'El campo confirmación de :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo :attribute no corresponde con una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'decimal' => 'El campo :attribute debe tener :decimal dígitos en la parte decimal.',
    'declined' => 'El campo :attribute debe ser rechazad.',
    'declined_if' => 'El campo :attribute debe ser rechazado cuando :other es igual a :value.',
    'different' => 'Los campos :attribute y :other deben ser diferentes.',
    'digits' => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between' => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con alguno de estos valores: :values.',
    'doesnt_start_with' => 'El campo :attribute debe iniciar con alguno de estos valores: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo válida.',
    'ends_with' => 'El campo :attribute debe finalizar con alguno de los siguientes valores: :values',
    'enum' => 'La selección :attribute es inválido.',
    'exists' => 'El campo :attribute seleccionado no existe.',
    'extensions' => 'El campo :attribute debe tener una de las extensiones: :values.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El campo :attribute debe contener más de :value elementos.',
        'file' => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor a :value.',
        'string' => 'El campo :attribute debe contener más de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe contener :value o más elementos.',
        'file' => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'string' => 'El campo :attribute debe contener :value o más caracteres.',
    ],
    'hex_color' => 'El campo :attribute debe ser una color hexadecimal válido.',
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo :attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'lowercase' => 'El campo :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El campo :attribute debe contener menos de :value elementos.',
        'file' => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor a :value.',
        'string' => 'El campo :attribute debe contener menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute debe contener :value o menos elementos.',
        'file' => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'string' => 'El campo :attribute debe contener :value o menos caracteres.',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El campo :attribute no debe contener más de :max elementos.',
        'file' => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'string' => 'El campo :attribute no debe contener más de :max caracteres.',
    ],
    'max_digits' => 'El campo :attribute no debe tener mas de :max dígitos.',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe contener al menos :min elementos.',
        'file' => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'string' => 'El campo :attribute debe contener al menos :min caracteres.',
    ],
    'min_digits' => 'El campo :attribute debe contener al menos :min dígitos.',
    'missing' => 'El campo :attribute no debe llenarse.',
    'missing_if' => 'El campo :attribute no debe llenarse cuando :other es igual a :value.',
    'missing_unless' => 'El campo :attribute no debe llenarse mientras :other sea igual :value.',
    'missing_with' => 'El campo :attribute no debe llenarse cuando :values está presente.',
    'missing_with_all' => 'El campo :attribute no debe llenarse cuando :values están presentes.',
    'multiple_of' => 'El campo :attribute debe ser múltiplo de :value.',
    'not_in' => 'El campo :attribute seleccionado es inválido.',
    'not_regex' => 'El formato del campo :attribute es inválido.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'password' => [
        'letters' => 'La contraseña :attribute debe contener al menos una letra.',
        'mixed' => 'La contraseña :attribute debe contener al menos uns mayúscula y una minúscula.',
        'numbers' => 'La contraseña :attribute debe contener al menos un número.',
        'symbols' => 'La contraseña :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'La contraseña :attribute fue comprometida. Escoja un nueva.',
    ],
    'present' => 'El campo :attribute debe estar presente.',
    'present_if' => 'El campo :attribute debe estar presenta cuando :other es igual a :value.',
    'present_unless' => 'El campo :attribute debe estar presente cuando :other no sea igual a :value.',
    'present_with' => 'El campo :attribute debe estar presente cuando :values está presente.',
    'present_with_all' => 'El campo :attribute debe estar presente cuando :values están presentes.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es igual a :value.',
    'prohibited_unless' => 'El campo :attribute esta prohibido cuando :other no esta entre :values.',
    'prohibits' => 'El campo :attribute está prohibido cuando :other está presente.',
    'regex' => 'El formato del campo :attribute es inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener registros de: :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_if_accepted' => 'El campo :attribute es requerido cuando :other fue aceptado.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same' => 'Los campos :attribute y :other deben coincidir.',
    'size' => [
        'array' => 'El campo :attribute debe contener :size elementos.',
        'file' => 'El archivo :attribute debe pesar :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string' => 'El campo :attribute debe contener :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string' => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida.',
    'unique' => 'El valor del campo :attribute ya está en uso.',
    'uploaded' => 'El campo :attribute no se pudo subir.',
    'uppercase' => 'El campo :attribute debe estar en mayúsculas.',
    'url' => 'El formato del campo :attribute es inválido.',
    'ulid' => 'El campo :attribute debe ser un ULID válido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',

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
        'name' => 'nombre',
        'password' => 'contraseña',
    ],

];
