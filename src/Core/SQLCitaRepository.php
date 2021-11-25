<?php

namespace App\Core;

class SQLCitaRepository implements ICitaRepository{
    private $table = "cita";
    private $conexion;

    function __construct(){
        $this->conexion = (new SQLConexion())->mysql;
    }
    function getAll(){
        $query = $this->conexion->query("select * FROM {$this->table}");
        $result = $query->fetchAll();
        return $result;
   }
   function save($username, $subject){
       $this->conexion->query("INSERT INTO `{$this->table}` (`username`, `subject`) VALUES ('{$username}', '{$subject}')");
   }
}