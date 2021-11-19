<?php

class Database {
    private  $users = [
    ['id'=> 1,
     'username'=> 'Rodolfo',
     'subject'=> 'bugs',
     'creationTime'=> "13:00:00",
     

    ],
    ['id'=> 2,
    'username'=> 'Marta',
    'subject'=> "composer",
    'creationTime'=> "17:00:00",
    

],
   ['id'=> 3,
    'username'=> 'Eduardo',
    'subject'=> "error 404",
    'creationTime'=> "19:00:00",
    

],
   ['id'=> 4,
    'username'=> 'Jenaro',
    'subject'=> "test",
    'creationTime'=> "10:30:00",
    

   ]
    ];    
    public function getAll(){
        return $this->users;
    }   
} 
?>
