<?php
return array(
    'zf-mvc-auth' => array(
        'authentication' => array(),
    ),
    'statuslib' => array(
        'array_mapper_path' => 'data/statuslib.php',
    ),
    'db' => array(
        'adapters' => array(
            'GeekMenuAdapter' => array(
                'driver' => 'Pdo_Mysql',
                'database' => 'geekmenu',
                'username' => 'vagrant',
                'password' => 'vagrant',
                'hostname' => 'localhost',
            ),
        ),
    ),
    'zf-oauth2' => array(
        'storage' => 'ZF\\OAuth2\\Adapter\\PdoAdapter',
        'db' => array(
            'dsn_type' => 'PDO',
            'dsn' => 'mysql:host=localhost;port=3306;dbname=geekmenu',
            'username' => 'vagrant',
            'password' => 'vagrant',
        ),
    ),
);
