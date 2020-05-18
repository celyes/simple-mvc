<?php 
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$all = new QueryBuilder(Connection::make());

var_dump($all->selectAll());