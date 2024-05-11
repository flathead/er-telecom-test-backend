<?php

return [
    'masterDb' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2master',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ],
    'devDb' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2slave',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ],
];

