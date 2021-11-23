<?php

namespace App;
use  App\Controllers\CitaController;

$uri= $_SERVER ["REQUEST_URI"];
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






