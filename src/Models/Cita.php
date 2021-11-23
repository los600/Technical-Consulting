<?php       
namespace App\Models;

use App\Core\FakeCitaRepository;
use App\Core\SQLCitaRepository;
use App\Core\ICitaRepository;

class Cita {
    
    private $id;
    public $username;
    public $subject;
    public $creationTime;
    private ICitaRepository $db;


    public function __Construct ($data = null){

        if ($data){
        $this->id = $data['id'];
        $this->username= $data['username'];
        $this->subject = $data ['subject'];
        $this->creationTime = $data['creationTime'];
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
}

