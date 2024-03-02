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

    'accepted' => 'El :attribute debe ser aceptado!',
    'accepted_if' => 'El :attribute debe aceptarse cuando :other es :value.',
    'active_url' => 'El :attribute no es una URL válida!',
    'after' => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El :attribute  debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute sólo debe contener letras.',
    'alpha_dash' => 'El :attribute sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute sólo debe contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El :attribute debe tener entre :min y :max objetos.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'string' => 'El :attribute debe tener entre :min y :max caracteres!',
    ],
    'boolean' => 'El :attribute campo debe ser verdadero o falso.',
    'confirmed' => 'En :attribute la confirmación no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'declined' => 'El :attribute debe ser rechazado.',
    'declined_if' => 'El :attribute debe rechazarse cuando :other es :value.',
    'different' => 'El :attribute y :other deben ser diferentes.',
    'digits' => 'El :attribute debe ser :digits dígitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El :attribute no puede terminar con uno de los siguientes: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El :attribute seleccionado no es válido',
    'exists' => 'El :attribute seleccionado no es válido',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El :attribute debe tener más de :value objetos!',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'string' => 'El :attribute debe ser mayor que :value caracteres.',
    ],
    'gte' => [
        'array' => 'El :attribute debe tener :value elementos o más.',
        'file' => 'El :attribute debe ser mayor o igual que :value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor o igual que :value.',
        'string' => 'El :attribute debe ser mayor o igual que :value caracteres.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado no es válido.',
    'in_array' => 'El :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'array' => 'El :attribute debe tener menos de :value objetos.',
        'file' => 'El :attribute debe ser inferior a :value kilobytes.',
        'numeric' => 'El :attribute debe ser inferior a :value.',
        'string' => 'El :attribute debe ser inferior a:value caracteres.',
    ],
    'lte' => [
        'array' => 'El :attribute no debe tener más de :value objetos.',
        'file' => 'El :attribute debe ser menor o igual que :value kilobytes.',
        'numeric' => 'El :attribute debe ser menor o igual que :value.',
        'string' => 'El :attribute debe ser menor o igual que :value caracteres.',
    ],
    'mac_address' => 'El :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El :attribute no debe tener más de :max objetos.',
        'file' => 'El :attribute no debe ser superior a :max kilobytes.',
        'numeric' => 'El :attribute no debe ser superior a :max.',
        'string' => 'El :attribute no debe ser superior a :max caracteres.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El :attribute debe tener al menos :min objetos.',
        'file' => 'El :attribute debe ser como mínimo :min kilobytes.',
        'numeric' => 'El :attribute debe ser como mínimo :min.',
        'string' => 'El :attribute debe ser como mínimo :min caracteres.',
    ],
    'multiple_of' => 'El :attribute debe ser múltiplo de :value.',
    'not_in' => 'El :attribute seleccionado no es válido.',
    'not_regex' => 'El :attribute tiene un formato no válido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => [
        'letters' => 'El :attribute debe contener al menos una letra.',
        'mixed' => 'El :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El :attribute debe contener al menos un número.',
        'symbols' => 'El :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'Los datos dados en :attribute ya han sido escogidos. Por favor, elija otro :attribute.',
    ],
    'present' => 'El :attribute debe estar presente.',
    'prohibited' => 'El :attribute campo está prohibido.',
    'prohibited_if' => 'El :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El :attribute campo está prohibido a menos que :other está en :values.',
    'prohibits' => 'El :attribute campo prohíbe :other de estar presente.',
    'regex' => 'El :attribute tiene un formato no válido',
    'required' => 'El campo :attribute es requerido!',
    'required_array_keys' => 'El :attribute debe contener entradas para: :values.',
    'required_if' => 'El :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El :attribute es obligatorio a menos que :other está en :values.',
    'required_with' => 'El :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same' => 'El :attribute y :other debe coincidir.',
    'size' => [
        'array' => 'El :attribute debe contener :size objetos.',
        'file' => 'El :attribute debe ser de :size kilobytes.',
        'numeric' => 'El :attribute debe ser de :size.',
        'string' => 'El :attribute debe ser de :size caracteres.',
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes valores: :values.',
    'string' => 'El :attribute debe ser una cadena.',
    'timezone' => 'El :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya ha sido tomada.',
    'uploaded' => 'El :attribute no se ha podido cargar.',
    'url' => 'El :attribute debe ser una URL válida.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
