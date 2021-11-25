<?php require_once __DIR__ . '/../layouts/default.php';


            
                        
        foreach ($users as $item) {
            echo "
            <section class='m-3'>
            <div class='shadow p-4 list-group-item-info>
            <li class='d-inline m-3'><i class='bi bi-person-fill'></i>  {$item->username}</li>
            <li class='d-inline text-primary m-3'><i class='bi bi-exclamation-octagon-fill'></i>  {$item->subject}</li> 
            <li class='d-inline text-muted m-3'><i class='bi bi-clock'></i>  {$item->creationTime}</li>
            <button class='btn btn-warning' id='edit' href=''><i class='bi bi-pencil-square'></i></button>
            <button class='btn btn-success' id='update' href='SQLCitaRepository.php?id=<?php echo ['id']?><i class='bi bi-arrow-clockwise'></i></button>
            <button class='btn btn-danger'id='delete' href='SQLCitaRepository.php?id=<?php echo ['id']?><i class='bi bi-trash-fill'></i></button>
            </div>
            </section>";
        }
        ?>
           