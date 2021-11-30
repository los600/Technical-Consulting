<?php

namespace App;
use  App\Controllers\CitaController;
use App\Core\SQLConexion;

$uri= $_SERVER ["REQUEST_URI"];
$controlador = new CitaController;
/* var_dump($_POST); */
if ($_POST) {
    if ($uri=='/editUser'){
        $controlador->editUser($_POST);
    } else {
        $controlador->store($_POST);
    }
}


if ($uri== '/list' || $uri == '/'){
    $controlador->index();
}
if ($uri== '/create'){
    $controlador->create();
}

if ($_GET){
    $action = isset($_GET['action']) ? $_GET ['action'] : null;
    if ($action == 'delete' && isset($_GET['id'])){
        $controlador->delete($_GET);
    }
}

if ($_GET){
    $action = isset($_GET['action']) ? $_GET ['action'] : null;
    if ($action == 'edit' && isset($_GET['id'])){
        $controlador->edit($_GET['id']);
    }
}





