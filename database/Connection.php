<?php 


class Connection {
    public static function make($config){
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'], 
                $config['user'], 
                $config['pass']
            );

        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}