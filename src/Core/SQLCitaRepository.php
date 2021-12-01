<?php

namespace App\Core;

class SQLCitaRepository implements ICitaRepository{
    private $table = "cita";
    private $conexion;

    function __construct(){
        $this->conexion = (new SQLConexion())->mysql;
    }
    function getAll(){
        $query = $this->conexion->query("SELECT * FROM {$this->table}");
        $result = $query->fetchAll();
        return $result;
   }
   function save($username, $subject){
       $this->conexion->query("INSERT INTO `{$this->table}` (`username`, `subject`) VALUES ('{$username}', '{$subject}')");
   }
   function delete ($id){
       $this->conexion->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$id} ");
   }

   function getById($id){
    $query = $this->conexion->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
    $result = $query->fetch();
    return $result; 
   }
   function update($username, $subject){
    $this->conexion->query("UPDATE `{$this->table}` SET `username`='[$username]',`subject`='[$subject]' WHERE `id` = {$id} ");
   }
}





