<?php

return [
    'email' => [
        'title' => 'Zmień adress email',
        'updated' => 'Twój adress email został zaktualizowany.',
    ],
    'password' => [
        'title' => 'Zmień swoje hasło',
        'requirements' => 'Twoje hasło musi posiadać przynajmniej 8 znaków',
        'updated' => 'Twoje hasło zostało zaktualizowane.',
    ],
    'two_factor' => [
        'button' => 'Konfiguracja dwuetapowego uwierzytelniania',
        'disabled' => 'Dwuetapowe uwierzytelnianie zostało wyłączone na twoim koncie. Nie będziesz już proszony o wprowadzanie tokenu autoryzacji.',
        'enabled' => 'Dwuetapowe uwierzytelnianie została włączona na twoim koncie! Od teraz, gdy zalogujesz się będziesz musiał użyć kodu wygenerowanego poprzez twoje urządzenie.',
        'invalid' => 'Podany token jest nie prawidłowy.',
        'setup' => [
            'title' => 'Ustaw dwuetapowe uwierzytelnianie',
            'help' => 'Nie możesz zeskanować kodu? Wpisz kod z aplikacji poniżej:',
            'field' => 'Wprowadź token',
        ],
        'disable' => [
            'title' => 'Wyłącz dwuetapowe uwierzytelnianie',
            'field' => 'Wprowadź token',
        ],
    ],
];
