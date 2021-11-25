<?php

namespace App\Core;
use PDO;
use PDOException;

class SQLConexion{

    public $mysql;

    public function __construct(){

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "technicalconsulting";
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $this->mysql = new PDO ("mysql:host={$host};dbname={$database}",$user,$pass,$options);
    }

}