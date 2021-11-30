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
     function edit($id){
        $cita = (new Cita()) -> getById($id);
        require_once __DIR__ . "/../Views/pages/edit.php";
    }    

public function editUser($request) {
    $citaToUpdate = new Cita($request);
    $citaToUpdate->editUser();
    $this->redirect('/');
}

    public function store($request) {
       $citaToSave = new Cita($request);
       $citaToSave->save();
       $this->redirect('/');
    }
    private function redirect(string $url){
        header("Location: {$url}");
    }
    public function delete($request){
        $citaToDelete = new Cita ($request);
        $citaToDelete->delete();
        $this->redirect('/');
    }
  
};