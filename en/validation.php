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

    'accepted' => ':attribute musi być zaakceptowany.',
    'active_url' => ':attribute nie jest poprawnym adresem URL.',
    'after' => ':attribute musi być później niż :date.',
    'after_or_equal' => ':attribute musi być datą późniejszą lub równą względem :date.',
    'alpha' => ':attribute moga zawierać wyłącznie litery.',
    'alpha_dash' => ':attribute może zawierać tylko litery, cyfry oraz kreski.',
    'alpha_num' => ':attribute może zawierać tylko litery i cyfry.',
    'array' => ':attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field is required.',
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'json' => ':attribute musi być niepoprawny JSON wyrazu.',
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute must be at least :min.',
        'file' => ':attribute must be at least :min kilobytes.',
        'string' => ':attribute must be at least :min characters.',
        'array' => ':attribute must have at least :min items.',
    ],
    'not_in' => ':attribute jest niepoprawny.',
    'numeric' => ':attribute musi być numerem.',
    'present' => ':attribute musi być wypełniony.',
    'regex' => ':attribute jest niepoprawny.',
    'required' => ':attribute jest wymagany.',
    'required_if' => ':attribute musi być wypełniony gdy, :other jest :value.',
    'required_unless' => ':attribute pole jest wymagane, chyba że  :other jest w :values.',
    'required_with' => ':attribute pole jest wymagane, gdy :values jest present.',
    'required_with_all' => ':attribute jest wymagany, gdy występują :values są obowiązkowy.',
    'required_without' => ':attribute pole jest wymagane, gdy :values są nie obowiązkowe.',
    'required_without_all' => ':attribute pole jest wymagane, kiedy żaden z :values jest obecny.',
    'same' => 'Wybrany :attribute i :other musi być zgodny.',
    'size' => [
        'numeric' => ':attribute musi być :size.',
        'file' => ':attribute musi być :size kilobajty.',
        'string' => ':attribute musi być :size znaków.',
        'array' => ':attribute musi zawierać :size rzeczy.',
    ],
    'string' => ':attribute musi być stringiem.',
    'timezone' => ':attribute musi być niepoprawną strefą.',
    'unique' => ':attribute został już podjęty.',
    'uploaded' => ':attribute został przesłany z niepowodzeniem.',
    'url' => ':attribute format jest nieprawidłowy.',

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

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env zmienna',
        'invalid_password' => 'Wpisane hasło jest niepoprawne dla tego konta.',
    ],
];
