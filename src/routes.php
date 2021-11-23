<?php

namespace App;
use  App\Controllers\CitaController;

$uri= $_SERVER ["REQUEST_URI"];
$controlador = new CitaController;
var_dump($_POST);



if ($uri== '/list' ){
    $controlador->index();
}
if ($uri== '/create'){
    $controlador->create();
}
if ($uri== '/edit'){
    $controlador->edit();
}






