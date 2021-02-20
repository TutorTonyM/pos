<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Líneas de idioma de validación
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error
    | predeterminados utilizados por la clase de validación. Algunas de estas
    | reglas tienen varias versiones, como las reglas de tamaño. Siéntase libre
    | de modificar cada uno de estos mensajes aquí.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'active_url' => 'El campo :attribute no es una URL válido.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo puede contener letras.',
    'alpha_dash' => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute solo puede contener letras y números.',
    'array' => 'El campo :attribute debe ser un arreglo/una matriz.',
    'before' => 'El campo :attribute debe ser una fecha antes de :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => ':attribute debe ser entre :min y :max.',
        'file' => ':attribute debe ser entre :min y :max kilobytes.',
        'string' => ':attribute debe tener entre :min y :max caracteres.',
        'array' => ':attribute mudebe tener entre :min y :max artículos.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => 'El campo :attribute no es una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no coincide con el formato :format.',
    'different' => ':attribute y :other deben ser diferente.',
    'digits' => ':attribute debe tener :digits digitos.',
    'digits_between' => ':attribute debe ser entre :min y :max digitos.',
    'dimensions' => ':attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El campo :attribute Debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes: :values.',
    'exists' => 'La seleccion de :attribute no es válida.',
    'file' => ':attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => ':attribute debe ser mayor que :value.',
        'file' => ':attribute debe ser mayor que :value kilobytes.',
        'string' => ':attribute debe ser mayor que :value caracteres.',
        'array' => ':attributedebe ser mayor que :value artículos.',
    ],
    'gte' => [
        'numeric' => ':attribute debe ser mayor o igual que :value.',
        'file' => ':attribute debe ser mayor o igual que :value kilobytes.',
        'string' => ':attribute debe ser mayor o igual que :value caracteres.',
        'array' => ':attribute debe tener :value artículos o más.',
    ],
    'image' => ':attribute debe ser una imagen.',
    'in' => 'La seleccion :attribute Es inválida.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un numero entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => ':attribute debe ser menor que :value.',
        'file' => ':attribute debe ser menor que :value kilobytes.',
        'string' => ':attribute debe ser menor que :value caracteres.',
        'array' => ':attribute debe tener menos de :value artículos.',
    ],
    'lte' => [
        'numeric' => ':attribute debe ser menor o igual que :value.',
        'file' => ':attribute debe ser menor o igual que :value kilobytes.',
        'string' => ':attribute debe ser menor o igual que :value caracteres.',
        'array' => ':attribute no debe tener más de :value artículos.',
    ],
    'max' => [
        'numeric' => ':attribute no puede ser mayor que :max.',
        'file' => ':attribute no puede ser mayor que :max kilobytes.',
        'string' => ':attribute no puede ser mayor que :max caracteres.',
        'array' => ':attribute no puede tener más de :max artículos.',
    ],
    'mimes' => ':attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => ':attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => ':attribute debe ser como mínimo :min.',
        'file' => ':attribute debe ser como mínimo :min kilobytes.',
        'string' => ':attribute debe ser como mínimo :min caracteres.',
        'array' => ':attribute must have at least :min artículos.',
    ],
    'multiple_of' => ':attribute debe ser un múltiplo de :value.',
    'not_in' => 'La selección de :attribute es inválida.',
    'not_regex' => 'El formato de :attribute es inválid.',
    'numeric' => ':attribute debe ser un numero.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute es inválido.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute se requiere cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other es en :values.',
    'required_with' => 'El campo :attribute se requiere cuando :values está presente.',
    'required_with_all' => 'El campo :attribute se requiere cuando :values están presentes.',
    'required_without' => 'El campo :attribute se requiere cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute se requiere cuando ninguno de :values están presentes.',
    'same' => 'El campo :attribute y :other deben ser iguales.',
    'size' => [
        'numeric' => ':attribute must be :size.',
        'file' => ':attribute must be :size kilobytes.',
        'string' => ':attribute must bee :size caracteres.',
        'array' => ':attribute debe contener :size artículos.',
    ],
    'starts_with' => ':attribute debe comenzar con uno de los siguientes: :values.',
    'string' => ':attribute debe ser una cadena.',
    'timezone' => ':attribute debe ser una zona válida.',
    'unique' => ':attribute ya esta tomado.',
    'uploaded' => ':attribute no se pudo cargar.',
    'url' => 'El formato :attribute es invalido.',
    'uuid' => ':attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Líneas de idioma de validación personalizadas
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para
    | atributos usando la convención "atributo.regla" para nombrar las líneas.
    | Esto agiliza la especificación de una línea de idioma personalizada
    | específica para una regla de atributo determinada.
    |
    */

    'custom' => [
        'nombre-del-atributo' => [
            'nombre-de-la-regla' => 'mensaje-personalizado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atributos de validación personalizados
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar nuestro
    | marcador de posición de atributo con algo más fácil de leer, como
    | "Dirección de correo electrónico" en lugar de "correo electrónico". Esto
    | simplemente nos ayuda a hacer que nuestro mensaje sea más expresivo.
    |
    */

    'attributes' => [],

];
