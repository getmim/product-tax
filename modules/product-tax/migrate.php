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
    ]
];
