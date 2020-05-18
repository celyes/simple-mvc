<?php 

$data = [];
$data['title'] = 'welcome';

$tasks = $app['database']->selectAll("todos");

require 'views/index.view.php';
