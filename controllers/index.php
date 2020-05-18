<?php 

$data = [];
$data['title'] = 'welcome';

$tasks = $app['database']->selectAll();

require 'views/index.view.php';
