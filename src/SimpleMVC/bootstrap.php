<?php

use Celyes\SimpleMVC\App;

App::bind('config', require 'config.php');
App::bind('request', $_REQUEST);
App::bind('controllers-path', 'App\\Controllers\\');
