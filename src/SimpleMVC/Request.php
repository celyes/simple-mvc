<?php

namespace Celyes\SimpleMVC;

class Request
{

    /**
     * uri - extract path from url
     *
     * @return  string  the url path
     */

    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }

    /**
     * method - returns request method
     * 
     * @return  string  the request method
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
