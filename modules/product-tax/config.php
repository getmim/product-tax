<?php

return [
    '__name' => 'product-tax',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-tax.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-tax' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product' => [
                'tax' => [
                    'type' => 'number'
                ]
            ]
        ]
    ]
];
