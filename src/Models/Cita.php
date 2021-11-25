<?php       
namespace App\Models;

use App\Core\FakeCitaRepository;
use App\Core\SQLCitaRepository;
use App\Core\ICitaRepository;

class Cita {
    
    private ?int $id = null;
    public $username;
    public $subject;
    public $creationTime;
    private ICitaRepository $db;


    public function __Construct ($data = null){

        if ($data){
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->username= $data['username'];
        $this->subject = $data ['subject'];
        $this->creationTime = isset($data['creationTime']) ? $data['creationTime'] : null;
        }

        $this->db =new SQLCitaRepository();

    }
    public function all() {
        $usersList =[];
        foreach ($this->db->getAll() as $users){
            array_push($usersList, new self($users));
        }

        return $usersList;
    }
    public function save(){
        $this->db->save($this->username, $this->subject);
    }
}

