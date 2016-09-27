<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'test' => [
            'class' => 'frontend\vendor\DataColl',
            'name' => 'Armen'
        ]
    ],
];
