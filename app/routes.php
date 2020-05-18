<?php 

/*$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php'
]);
*/
$router->get('', 'PagesController@index');
$router->get('about', 'AboutController@index');