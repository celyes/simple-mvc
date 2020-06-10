<?php 

// Appplication configuration
/**
 * @todo switch to .env 
 */

return [
    'database' => [
        'name' => '', // db name
        'username' => '', // db user  
        'password' => '', // db password
        'connection' => 'mysql:host=127.0.0.1', // PDO dsn
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // error mode
        ]
    ]
];