<?php

class EntityManager 
{
    protected $pdo;
    
    public function __construct()
    {
        $this->pdo = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');

    }
 
}

?>