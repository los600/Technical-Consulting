<?php
// var_dump($_SERVER ["REQUEST_URI"]);
// $uri= $_SERVER ["REQUEST_URI"];

namespace App;
use  App\Controllers\CitaController;


$controlador = new CitaController;
$controlador->index();







