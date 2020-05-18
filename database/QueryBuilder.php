<?php 


class QueryBuilder {
    
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll() 
    {

        $statement = $this->pdo->prepare('SELECT * FROM todos');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}