<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder {

  /**
   * $pdo - holds a PDO class instance
   *
   * @var object
   */
    protected $pdo;

    /**
     * __construct sets values
     *
     * @param   object  $pdo  holds a PDO class instance
     *
     * @return  void
     */

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * [selectAll description]
     *
     * @param   string  $table  the table name to select from
     * @param   string  $order  the results order
     *
     * @return  object  fetched results
     */

    public function selectAll($table, $order = "ASC")
    {

    $statement = $this->pdo->prepare("SELECT * FROM {$table} ORDER BY name {$order}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    
    /**
     * insert - adds a new recode to the database
     *
     * @param   string  $table  the table name to insert to
     * @param   array   $parameters the values to insert
     *
     * @return  bool    
     */

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
