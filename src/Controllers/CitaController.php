<?php
namespace App\Controllers;
use App\Models\Cita;

class CitaController {

    function index(){
        $users = (new Cita()) -> all();
        require_once __DIR__ . "/../Views/pages/list.php";
        
    }
    function create(){
        $users = (new Cita()) -> all();
        require_once __DIR__ . "/../Views/pages/createForm.php";
    }   
     function edit(){
        $users = (new Cita()) -> all();
        require_once __DIR__ . "/../Views/pages/edit.php";
    }    
}


