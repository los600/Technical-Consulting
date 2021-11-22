<?php
namespace App\Controllers;
use App\Models\Cita;

class CitaController {
    function index(){
        $users = (new Cita()) -> all();
        require_once __DIR__ . "/../Views/pages/list.php";
        
    }
    
}

