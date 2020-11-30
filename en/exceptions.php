<?php

return [
    'daemon_connection_failed' => 'Podczas próby połaczenia z Daemon wystąpił pewien wyjątek w skutku czego HTTP/:code kod odpowiedzi. Ten wyjątek został zarejestrowany.',
    'node' => [
        'servers_attached' => 'Węzeł nie może mieć podłączonych do niego serwerów, aby mógł zostać usunięty..',
        'daemon_off_config_updated' => 'Konfiguracja Daemona  <strong>Została zaktualizowana</strong>,Jednak podczas próby automatycznej aktualizacji pliku konfiguracyjnego w Daemonie pojawił się błąd. Będziesz musiał ręcznie zaktualizować plik konfiguracyjny (config.yml), aby demon mógł zastosować te zmiany.',
    ],
    'allocations' => [
        'server_using' => 'Serwer jest obecnie przypisany do tej alokacji. Alokacja może być usunięta tylko wtedy, gdy żaden serwer nie jest aktualnie przypisany.',
        'too_many_ports' => 'Dodanie więcej niż 1000 portów, w jednym zakresie na raz nie jest obsługiwany.',
        'invalid_mapping' => 'Mapowanie przewidziane dla :port było nieprawidłowe i nie mogło zostać przetworzone.',
        'cidr_out_of_range' => 'Notacja CIDR pozwala na stosowanie tylko masek pomiędzy /25 a /32.',
        'port_out_of_range' => 'Porty w Alokacji muszą być większe niż 1024 i mniejsze lub równe 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Gniazdo z aktywnymi serwerami podłączonymi do niego nie może zostać usunięte z panelu.',
        'egg' => [
            'delete_has_servers' => 'Egg z aktywnymi serwerami podłączonymi do niego, nie można usunąć z panelu.',
            'invalid_copy_id' => 'Egg wybrane do skopiowania skryptu albo nie istnieje, albo jest kopiowaniem samego skryptu.',
            'must_be_child' => 'Dyrektywa "Kopiuj ustawienia z" dla tego Egga musi być opcją dla dziecka dla wybranego Gniazda.',
            'has_children' => 'To Egg należy do jednego lub kilku innych Eggs. Przed usunięciem tego egg usuń pozostałe.',
        ],
        'variables' => [
            'env_not_unique' => 'Zmienna środowiskowa :name musi być unikalna dla tego Egg.',
            'reserved_name' => 'Zmienna środowiskowa :name jest chroniona i nie może być przypisana do zmiennej.',
            'bad_validation_rule' => 'Reguła walidacji ":rule" nie jest ważną regułą dla tej aplikacji.',
        ],
        'importer' => [
            'json_error' => 'Podczas próby analizy pliku JSON pojawił się błąd: :error.',
            'file_error' => 'Podany plik JSON jest nieprawidłowy.',
            'invalid_json_provided' => 'Otrzymany plik JSON nie jest, w rozpoznawalnym formacie.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Edycja własnego konta podrzędnego jest niedozwolona.',
        'user_is_owner' => 'Nie można dodać właściciela serwera jako podrzędnego użytkownika dla tego serwera.',
        'subuser_exists' => 'Użytkownik z tym adresem e-mail jest już przypisany jako podrzędny użytkownik tego serwera.',
    ],
    'databases' => [
        'delete_has_databases' => 'Nie można usunąć serwera hosta bazy danych, który ma aktywne podłączone bazy danych.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Maksymalny interwał przykutego zadania wynosi 15minut.',
    ],
    'locations' => [
        'has_nodes' => 'Nie można usunąć pliku z lokalizacji, która ma aktywne Node podłączonych do niej.',
    ],
    'users' => [
        'node_revocation_failed' => 'Nie udało się cofnąć kluczy na <a href=":link" >Node #:node</a>. :error.',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Nie znaleziono żadnych node spełniających wymogi określone dla automatycznego wdrażania.',
        'no_viable_allocations' => 'Nie znaleziono żadnych przydziałów spełniających wymogów dotyczących automatycznego wdrażania.',
    ],
    'api' => [
        'resource_not_found' => 'Wymagane zasoby nie zostałe znalezione.',
    ],
];
