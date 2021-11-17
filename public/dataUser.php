
<?php

class DataUser {
    public $id;
    public $username;
    public $subject;
    private $creationTime;

    public function __Construct ($data){
        $this->id = $data['id'];
        $this->username= $data['username'];
        $this->subject = $data ['subject'];
        $this->creationTime = $data['creationTime'];
      

    }


}




?>