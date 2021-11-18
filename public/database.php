<?php

class Database {
    private  $users = [
    ['id'=> 1,
     'username'=> 'rodolfo',
     'subject'=> 'bugs',
     'creationTime'=> "13:00:00",
     

    ],
    ['id'=> 2,
    'username'=> 'marta',
    'subject'=> "hola",
    'creationTime'=> "17:00:00",
    

   ]
    ];    
    public function getAll(){
        return $this->users;
    }   
} 
?>
