<?php       

require_once 'database.php';

class DataUser {
    
    private $id;
    public $username;
    public $subject;
    public $creationTime;
    private $db;


    public function __Construct ($data = null){

        if ($data){
        $this->id = $data['id'];
        $this->username= $data['username'];
        $this->subject = $data ['subject'];
        $this->creationTime = $data['creationTime'];
        }
        $this->db =new Database;

    }
    public function all() {
        $usersList =[];
        foreach ($this->db->getAll() as $users){
            array_push($usersList, new self($users));
        }

        return $usersList;
    }
}
?>
