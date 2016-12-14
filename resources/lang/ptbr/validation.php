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

    'accepted'             => 'Esse :attribute deve ser aceito.',
    'active_url'           => ':attribute não é uma URL válida.',
    'after'                => ':attribute deve ser uma data depois de :date.',
    'alpha'                => 'O atributo :attribute deve conter apenas letras.',
    'alpha_dash'           => 'O atributo :attribute deve conter apenas letras, números e traços.',
    'alpha_num'            => 'O atributo :attribute deve conter apenas letras e números.',
    'array'                => 'O atributo :attribute deve ser uma lista.',
    'before'               => ':attribute deve ser uma data antes de :date.',
    'between'              => [
        'numeric' => ':attribute deve ser entre :min e :max.',
        'file'    => ':attribute deve ter entre :min e :max kb.',
        'string'  => ':attribute deve ter entre :min e :max caracteres.',
        'array'   => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação do campo :attribute não é compatível.',
    'date'                 => ':attribute não é uma data válida.',
    'date_format'          => ':attribute não é compatível com o formato de data :format.',
    'different'            => ':attribute e :other devem ser diferentes.',
    'digits'               => ':attribute deve ter :digits digitos.',
    'digits_between'       => ':attribute deve ter entre :min e :max digitos.',
    'dimensions'           => ':attribute tem dimensões de imagem inválidas.',
    'distinct'             => 'O campo :attribute tem um valor duplicado.',
    'email'                => 'O campo :attribute deve ser um endereço de email válido.',
    'exists'               => 'O campo :attribute selecionado é inválido.',
    'file'                 => ':attribute deve ser um arquivo.',
    'filled'               => 'O arquivo :attribute é obrigatório.',
    'image'                => ':attribute precisa ser uma imagem.',
    'in'                   => 'O campo :attribute selecionado é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => ':attribute precisa ser um inteiro.',
    'ip'                   => ':attribute precisa ser um endereço de IP válido.',
    'json'                 => ':attribute precisa ser uma string JSON válida.',
    'max'                  => [
        'numeric' => ':attribute não pode ser maior que :max.',
        'file'    => ':attribute não pode ser maior que :max kb.',
        'string'  => ':attribute não pode ter mais que :max caracteres.',
        'array'   => ':attribute não pode ter mais que  :max itens.',
    ],
    'mimes'                => ':attribute precisa ser um valor do tipo: :values.',
    'mimetypes'            => ':attribute precisa ser um valor do tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute deve ser no mínimo :min.',
        'file'    => ':attribute deve ter no mínimo :min kb.',
        'string'  => ':attribute deve ter no mínimo :min caracteres.',
        'array'   => ':attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'O atributo :attribute selecionado é inválido.',
    'numeric'              => 'O atributo :attribute precisa ser um número.',
    'present'              => 'O campo :attribute precisa estar presente.',
    'regex'                => 'O formato de :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório ao menos que :other esteja em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute field é obrigatório quando nenhum de :values está presente.',
    'same'                 => ':attribute e :other devem ser compatíveis.',
    'size'                 => [
        'numeric' => ':attribute deve ter tamanho :size.',
        'file'    => ':attribute deve ter :size kb.',
        'string'  => ':attribute deve ter :size caracteres.',
        'array'   => ':attribute deve conter :size itens.',
    ],
    'string'               => ':attribute deve ser um texto.',
    'timezone'             => ':attribute deve ser uma zona válida.',
    'unique'               => ':attribute já existe, e deve ser único.',
    'uploaded'             => ':attribute falhou em efetuar upload.',
    'url'                  => 'O formato de :attribute é inválido.',

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

    'attributes' => [],

];
