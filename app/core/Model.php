<?php 

abstract class Model
{
    protected $db;
    
    public function __construct()
    {
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_DATABASE;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->db = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $option);
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }
}