<?php

return [
    'Product\\Model\\Product' => [
        'fields' => [
            'tax' => [
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 9500
            ]
        ]
    ],
    'Cart\\Model\\Cart' => [
        'fields' => [
            'tax' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false,
                    'default' => 0
                ],
                'index' => 5500
            ]
        ]
    ],
    'Cart\\Model\\CartItem' => [
        'fields' => [
            'total_before_tax' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false,
                    'default' => 0
                ],
                'index' => 5500
            ],
            'tax_percent' => [
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 5600
            ],
            'tax_amount' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false,
                    'default' => 0
                ],
                'index' => 5700
            ]
        ]
    ]
];
