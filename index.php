<?php 
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

require Router::load('app/routes.php')->direct(Request::uri(), Request::method());