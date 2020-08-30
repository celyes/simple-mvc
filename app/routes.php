<?php

/*Router::define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php'
]);
*/

$router->get('', 'TasksController@index');
$router->get('about', 'AboutController@index');
$router->get('tasks', 'TasksController@show');
$router->get('new', 'TasksController@newTask');

$router->post('search', 'SearchController@index');
$router->post('new', 'TasksController@create');
