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
    'CONTACTPAGE' =>'edo@simpleceremonies.com.au',
    'CONTACTPHONE' =>'+61280033919',
    'userType' => [
        'Admin' => 1,
        'User' => 2,
        'Partner' => 3,
        'Celebrant' =>4
    ],

    'bankNames' => [
        1=> 'ANZ',
        2=>'NAB',
        3=>'Westpac Bank',
        4=>'Bank of Queensland',
        5=>'Macquarie Bank',
        6=>'Bendigo Bank',
        7=>'AMP Bank Ltd'
    ],


];


