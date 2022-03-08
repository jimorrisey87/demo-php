<?php
class Category{
    //DB 
    private $conn;
    private $table = 'categories';

    //Properties
    public $id;
    public $name;
    public $created_at;

    //Constructor with the DB
    public function __construct($db) {
        $this->conn = $db;
    }

    //get categories
    public function read(){
        //create query
        $query = 'SELECT
        id,
        name,
        created_at
    FROM
        ' . $this->table . '
    ORDER BY
        created_at DESC';

    //prepare statement
    $stmt= $this->conn->prepare($query);

    //execute
    $stmt->execute();

    return $stmt;

    }
}