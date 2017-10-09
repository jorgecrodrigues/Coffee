<?php

/**
 * Configurações de conexão com banco de dados, usando PDO.
 */
return [

    /**
     * contém as configurações para a conexão com o bando de dados MySql.
     */
    'mysql' => [
        'driver' => 'mysql',
        'host' => 'http://127.0.0.1',
        'port' => 3306,
        'database' => '',
        'username' => '',
        'password' => ''
    ],

    /**
     * As opções para a conexão com o banco de dados.
     */
    'options' => [

    ],

    /**
     * Define qual configuração de banco de dados usar para a conexão.
     */
    'default' => [
        'use' => 'mysql'
    ]
];