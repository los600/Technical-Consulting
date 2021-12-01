<?php

namespace App\Models;

use App\Core\FakeCitaRepository;
use App\Core\SQLCitaRepository;
use App\Core\ICitaRepository;

class Cita{

    public ?int $id = null;
    public $username;
    public $subject;
    public $creationTime;
    private ICitaRepository $db;


    public function __Construct($data = null){

        if ($data) {
            $this->id = isset($data['id']) ? $data['id'] : null;
            $this->username = $data['username'];
            $this->subject = $data['subject'];
            $this->creationTime = isset($data['creationTime']) ? $data['creationTime'] : null;
        }

        $this->db = new SQLCitaRepository();
    }
    public function all(){
        $usersList = [];
        foreach ($this->db->getAll() as $users) {
            array_push($usersList, new self($users));
        }

        return $usersList;
    }
    public function save(){
        $this->db->save($this->username, $this->subject);
    }

    public function delete(){
        $this->db->delete($this->id);
    }

    public function getById($id){
        $data = $this->db->getById($id);
        return new Cita($data);
    }

    public function update(){
       $this->db->update($this->username, $this->subject, $this->id);
       /* var_dump(update); */
    }
}
