<?php

return [
    '__name' => 'product-tax',
    '__version' => '0.2.1',
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
            ],
            'purchase' => [
                'tax' => [
                    'type' => 'number',
                    'decimal' => 2
                ]
            ],
            'purchase-product' => [
                'total_before_tax' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'tax_percent' => [
                    'type' => 'number'
                ],
                'tax_amount' => [
                    'type' => 'number',
                    'decimal' => 2
                ]
            ],
            'cart' => [
                'tax' => [
                    'type' => 'number',
                    'decimal' => 2
                ]
            ],
            'cart-item' => [
                'total_before_tax' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'tax_percent' => [
                    'type' => 'number'
                ],
                'tax_amount' => [
                    'type' => 'number',
                    'decimal' => 2
                ]
            ]
        ]
    ]
];
