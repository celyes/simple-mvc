<?php 


class Connection {
    public static function make(){
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'ferrari17');

        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}