<?php

return [
    'STRIPE_SECRET'                =>  env('STRIPE_SECRET'),
    'STRIPE_KEY'                   => env('STRIPE_KEY'),
    'PARTNER'                      => env('PARTNER'),
    'CELEBRANT'                    => env('CELEBRANT'),
    'ADMIN'                        => env('ADMIN'),
    'WEBSITE'                      => env('WEBSITE'),
    'FROM_EMAIL' => 'support@simpleceremonies.com.au',
    'CONTACTUS_EMAIL' => 'support@simpleceremonies.com.au',
    'CONTACTPAGE' => 'edo@simpleceremonies.com.au',
    'CONTACTPHONE' => '+61280033919',
    'COMPANYNAME' => 'Simple Ceremonies',
    'ADMINNAME' => 'Ange and Micheal',
    'EMAILFOOTER' =>'Simple Ceremonies Team',
    'userType' => [
        'Admin' => 1,
        'User' => 2,
        'Partner' => 3,
        'Celebrant' => 4
    ],
    'addonStatus' => [
        0 => 'Waiting For Approval',
        1 => 'Approved',
        2 => 'Rejected',
    ],
    'addonStatusClass' => [
        0 => 'waiting-approval',
        1 => 'approved',
        2 => 'rejected',
    ],
    'bankNames' => [
        1 => 'ANZ',
        2 => 'NAB',
        3 => 'Westpac Bank',
        4 => 'Bank of Queensland',
        5 => 'Macquarie Bank',
        6 => 'Bendigo Bank',
        7 => 'AMP Bank Ltd'
    ],
    'SERVERURL' =>'http://simpleceremoniesacc.crebos.online',
    'COUNTRY' =>'Australia',
    'RESCHEDULE_FEE' =>'85',
    



];
