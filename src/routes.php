<?php

namespace App;
use  App\Controllers\CitaController;
use App\Core\SQLConexion;

$uri= $_SERVER ["REQUEST_URI"];
$controlador = new CitaController;

if ($_POST){
    if($uri == '/update'){
        /* var_dump($_POST); */
        $controlador->update($_POST);
    
        /* echo $_POST['id'].$_POST['username'].$_POST['subject']; */
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







