<?php 

return [
    'database' => [
        'name' => 'test',
        'username' => 'root', 
        'password' => 'ferrari17',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];