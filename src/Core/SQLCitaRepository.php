<?php

namespace App\Core;

class SQLCitaRepository implements ICitaRepository{
    private $table = "cita";
    function getAll(){
        $db = (new SQLConexion())->mysql;
        $query = $db -> query("select * FROM {$this->table}");
        $result = $query->fetchAll();
        return $result;
   }
}