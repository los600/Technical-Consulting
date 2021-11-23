<?php require_once __DIR__ . '/../layouts/default.php'; 
          
            
        foreach ($users as $item) {
            echo "
            <section class='justify-content-center'>
            <div class='alert alert-primary' role='alert'>
            <p class='d-inline text-success'>User: {$item->username}</p>
            <p class='d-inline text-primary'>Subject: {$item->subject}</p> 
            <p class='d-inline text-muted'> Date time: {$item->creationTime}</p>
            </div>
            </section>";
        }
        ?>
   


