<?php

namespace App;
use  App\Controllers\CitaController;
use App\Core\SQLConexion;

$uri= $_SERVER ["REQUEST_URI"];
$controlador = new CitaController;
var_dump($_POST);


$controlador = new CitaController;

if ($uri== '/list' ){
    $controlador->index();
}
if ($uri== '/create'){
    $controlador->create();
}
if ($uri== '/edit'){
    $controlador->edit();
}






