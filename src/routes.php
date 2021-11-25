<?php

namespace App;
use  App\Controllers\PageController;
use App\Core\SQLConexion;

$uri= $_SERVER ["REQUEST_URI"];
$controlador = new PageController;
/* var_dump($_POST); */

if ($_POST){
    $controlador->store($_POST);
}

if ($uri== '/list' || $uri == '/'){
    $controlador->index();
}
if ($uri== '/create'){
    $controlador->create();
}
if ($uri== '/edit'){
    $controlador->edit();
}
/* if ($uri== '/editView'){
    $controlador->editView();
} */





