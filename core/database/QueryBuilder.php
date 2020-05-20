<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $order = "ASC")
    {

    $statement = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY name {$order}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table, $parameters)
    {
      $sql = sprintf(
        "INSERT INTO %s(%s) VALUES(%s)",
        $table,
        implode(', ', array_keys($parameters)),
        ':'. implode(', :', array_keys($parameters))
      );
      try {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);
      }catch(\Excpetion $e) {
        throw new Exception('Something went wrong! try again later...');
      }
    }
}
