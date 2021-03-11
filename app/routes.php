<?php

/*Router::define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php'
]);
*/

$router->get('', 'WelcomeController@index');
