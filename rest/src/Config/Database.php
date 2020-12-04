<?php

/**
 * Connect to MySQL database and return a PDO object through getConnection()
 */
class Database
{
    private $_db;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "PhpBlog";
        $user = "aziiz";
        $pass = "zerlanouvellemonnaie";

        try {
            $this->_db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            exit("Connection to database failed: " .$e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->_db;
    }
}
