<?php

namespace App\Core;

use App\Core\Exceptions\KeyNotFoundException;

class Router {

    /**
     * @var array
     *
     * $routes - holds all routes and correspondent controllers
     * 
    */

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * load - loads routes file
     *
     * @param   resource  $file  [$file the routes file]
     *
     * @return  resource         returns a file that contains all the routes
     */

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * get - adds routes of type get to $this->routes GET array
     *
     * @param   string  $uri         url path 
     * @param   string  $controller  the correspondent controller and method
     *
     * @return  void               
     */

    public function get($uri, $controller){
       $this->routes['GET'][$uri] = $controller;
    }

     /**
     * post - adds routes of type get to $this->routes POST array
     *
     * @param   string  $uri         url path 
     * @param   string  $controller  the correspondent controller and method
     *
     * @return  void               
     */

    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * direct - 
     *
     * @param   string  $uri          the requested url path 
     * @param   string  $requestType  the request type
     *
     * @return  method                calls a method
     */
    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType])){
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new KeyNotFoundException('No route defined for this URI.');
    }


    /**
     * callAction - calls the needed method in the targeted controller
     *
     * @param   string  $controller  the controller to go to
     * @param   string  $method      the method to call
     *
     * @return  method               calls the correspondent controller method
     */

    protected function callAction($controller, $method)
    {
        $controller = App::get('controllers-path')."{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $method)) {
            throw new Exception(
                "{$controller} does not respond to the {$method} action."
            );
        }

        return $controller->$method();
    }
}
