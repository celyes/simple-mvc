<?php 
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config.php';

$all = new QueryBuilder(Connection::make($config['database']));

var_dump($all->selectAll());