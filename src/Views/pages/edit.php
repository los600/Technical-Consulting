<?php require_once __DIR__ . '/../layouts/default.php'; 

            
                        
        foreach ($users as $item) {
            echo "
            <section class='justify-content-center'>
            <div class='alert alert-primary' role='alert'>
            <p class='d-inline text-success'>User: {$item->username}</p>
            <p class='d-inline text-primary'>Subject: {$item->subject}</p> 
            <p class='d-inline text-muted'> Date time: {$item->creationTime}</p>
            </div> <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
            <button type='button' class='btn btn-danger'>Delete</button>
            <button type='button' class='btn btn-warning'>Edit</button>
            <button type='button' class='btn btn-success'>UpDate</button>
        </div>";
        }
        ?>
           
