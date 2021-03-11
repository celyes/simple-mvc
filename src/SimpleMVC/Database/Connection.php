<?php

namespace Celyes\SimpleMVC\Database;

use PDO;
use PDOException;

class Connection
{

    /**
     * [make description]
     *
     * @param   array  $config  database configuration array
     *
     * @return  object PDO      a PDO class instance
     */

    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
