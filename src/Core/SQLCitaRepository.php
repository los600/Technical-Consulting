<?php

namespace App\Core;

class SQLCitaRepository implements ICitaRepository
{
    private $table = "cita";
    private $conexion;

    function __construct()
    {
        $this->conexion = (new SQLConexion())->mysql;
    }
    function getAll()
    {
        $query = $this->conexion->query("select * FROM {$this->table}");
        $result = $query->fetchAll();
        return $result;
    }
    function save($username, $subject)
    {
        $this->conexion->query("INSERT INTO `{$this->table}` (`username`, `subject`) VALUES ('{$username}', '{$subject}')");
    }
    function delete($id)
    {
        $this->conexion->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$id} ");
    }
    function edit($id)
    {
        $this->conexion->query("UPDATE SET `{$this->table}`(`username`, `subject`) WHERE `{$this->table}`.`id`. = {$id} ");
    }
}




//$this->conexion->query("UPDATE  `{$this->table}`SET (`username`, `subject`) WHERE `{$this->table}`.`username` = {$username}, `subject` = {$subject} ");} 