<?php

return [
    'API_URL' => env('API_URL'),
    'API_CLIENT_SECRET' => env('API_CLIENT_SECRET'),
    'CLIENT_ID' => env('CLIENT_ID', 2),
    'CLIENT_SECRET' => env('CLIENT_SECRET', 'mxMRPXZKbkn4b74G7PtVFvexnvHsrCbyCMrb7Voz'),
    'GRANT_TYPE' => env('GRANT_TYPE', 'password'),
    'SCOPE' => env('SCOPE', '*'),
    'BIRTHDATE_START_BEFORE_YEAR' => 10,
    'PER_PAGE' => 20,
    'PER_PAGE_LIST' => [10 => 10, 20 => 20, 30 => 30, 50 => 50, 100 => 100],
    'DEFINITION_CATELOGUE_TYPES' => [
        'ASSET' => 'Asset',
        'PICKLIST_ATOM' => 'Picklist Atom', //#170 :
        'PICKLIST_LIST' => 'Picklist List', //#170 :
        'TEXT' => 'Text',
        'DATE' => 'Date'
    ],
    'SYSTEM_USER' => 'SYSTEM_USER',
    'DEFAULT_SECRET_KEY' => "!1a@2b#3c",
    'DEFAULT_DEFINITION_CATALOGUE' => [
        'ARTICLENAME'
    ],

];
