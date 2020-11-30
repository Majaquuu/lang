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
    'array' => ':attribute musi być uszeregowany.',
    'before' => ':attribute musi być datą późniejszą od :date.',
    'before_or_equal' => ':attribute musi być datą równą bądź wcześniejszą niż :date.',
    'between' => [
        'numeric' => ':attribute musi być w przedziale od :min do :max.',
        'file' => ':attribute musi zawierać od :min do :max kilobajtów.',
        'string' => ':attribute musi zawierać od :min do :max znaków.',
        'array' => ':attribute musi zawierać od :min do :max items.',
    ],
    'boolean' => ':attribute pole musi mieć wartość true lub false.',
    'confirmed' => ':attribute potwierdzenie nie pasuje.',
    'date' => ':attribute nie jest prawidłową datą.',
    'date_format' => ':attribute nie pasuje do formatu :format.',
    'different' => ':attribute i :other muszą być różne.',
    'digits' => ':attribute musi być :digits cyfrą.',
    'digits_between' => ':attribute musi być między :min a :max digits.',
    'dimensions' => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => ':attribute pole ma zduplikowaną wartość.',
    'email' => ':attribute musi być poprawnym adresem email.',
    'exists' => 'Wybrany :attribute jest niepoprawny.',
    'file' => ':attribute musi być plikiem.',
    'filled' => ':attribute pole jest wymagane.',
    'image' => ':attribute musi być zdjęciem.',
    'in' => ':attribute jest niepoprawny.',
    'in_array' => ':attribute pole nie istnieje w :other.',
    'integer' => ':attribute musi być liczbą całkowitą.',
    'ip' => ':attribute musi być prawidłowym adressem IP.',
    'json' => ':attribute musi być niepoprawny JSON wyrazu.',
    'max' => [
        'numeric' => ':attribute nie może być większy niż than :max.',
        'file' => ':attribute nie może być większy niż :max kilobytes.',
        'string' => ':attribute nie może być większy niż :max characters.',
        'array' => ':attribute nie może mieć więcej niż :max items.',
    ],
    'mimes' => ':attribute musi być plik typu: :values.',
    'mimetypes' => ':attribute musi być plik typu: :values.',
    'min' => [
        'numeric' => ':attribute musi być co najmniej :min.',
        'file' => ':attribute musi być co najmniej :min kilobytes.',
        'string' => ':attribute musi być co najmniej :min characters.',
        'array' => ':attribute musi być co najmniej :min items.',
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
