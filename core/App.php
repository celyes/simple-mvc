<?php

namespace App\Core;

use App\Core\Exceptions\KeyNotFoundException;

final class App {

    /**
     * $registry - holds the configuration and their correspondent names
     *
     * @var array
     */

    protected static $registry = [];

    /**
     * bind - binds the key to the value
     *
     * @param   string  $key    the key to the correspondent registry value 
     * @param   mixed  $value  the registry value
     *
     * @return  void
     */

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * get the key if exists.
     *
     * @param   string  $key  the key to get a correspondent registry value
     *
     * @return  mixed the registry value from $this->registry array
     */
    
    public static function get($key)
    {
        if(! array_key_exists($key, static::$registry)){
            throw new KeyNotFoundException('No {$key} found in the registry');
        }
        return static::$registry[$key];
    }
}
