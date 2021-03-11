<?php
require 'vendor/autoload.php';
require 'src/SimpleMVC/bootstrap.php';

use Celyes\SimpleMVC\{Router, Request};

Router::load('app/routes.php')->direct(Request::uri(), Request::method());
