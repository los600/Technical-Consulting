<?php
namespace App\Controllers;
use App\Models\Cita;

class PageController {

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
    /* function editView(){
        $users = (new Cita()) -> all();
        require_once __DIR__ . "/../Views/pages/editView.php";
    }     */
    public function store($request) {
       $citaToSave = new Cita($request);
       $citaToSave->save();
       $this->redirect('/');
    }
    private function redirect(string $url){
        header("Location: {$url}");
    }
};