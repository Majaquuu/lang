<?php

return [
    'sign_in' => 'Zaloguj się',
    'go_to_login' => 'Przejdź do logowania.',
    'failed' => 'Nie znaleziono konta pasującego do tych danych logowania.',

    'forgot_password' => [
        'label' => 'Zapomniałeś hasła?',
        'label_help' => 'Wpisz swój adres email, by otrzymać instrukcje dotyczące zresetowania hasła.',
        'button' => 'Odzyskaj konto',
    ],

    'reset_password' => [
        'button' => 'Zresetuj i zaloguj się',
    ],

    'two_factor' => [
        'label' => '2-Token domyślny uwietrzlniania dwuetapowego',
        'label_help' => 'To konto wymaga dwuetapowego uwierzytelnienia, aby się zalogować. Wprowadź kod wygenerowany przez twoje urządzenie, aby się zalogować.',
        'checkpoint_failed' => 'Token dwuetapowego uwietrzlniania jest niepoprawny',
    ],

    'throttle' => 'Za dużo prób logowania, spróbuj za :seconds sekund.',
    'password_requirements' => 'Hasło musi mieć długość co najmniej 8 znaków i powinno być unikalne dla tej strony.',
    '2fa_must_be_enabled' => 'Aby korzystać z Panelu administracyjnego, wymagane jest aktywacji weryfikacji Dwuetapowej',
];
