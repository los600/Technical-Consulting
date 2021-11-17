<?php
require_once 'DataBase.php';
class DataUser {
    
    private $id;
    public $username;
    public $subject;
    public $creationTime;
    private $db;


    public function __Construct ($data){
        $this->id = $data['id'];
        $this->username= $data['username'];
        $this->subject = $data ['subject'];
        $this->creationTime = $data['creationTime'];
        $this->db =new Database;
      

    }
    public function all() {
        $userList =[];
        foreach ($this->db->getAll()as $users){
            array_push($userList,$users);
        }

    }
    return $userList

}




?>
