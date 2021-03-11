<?php
require 'vendor/autoload.php';
require 'src/SimpleMVC/bootstrap.php';

use Celyes\SimpleMVC\Router;
use Celyes\SimpleMVC\Request;

Router::load(__DIR__.'/app/routes.php')->direct(Request::uri(), Request::method());
