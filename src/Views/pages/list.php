<?php 
require_once __DIR__ . '/../layouts/default.php'; 
         
            
        foreach ($users as $item) {
            echo "
            <section class='container mt-5'>
            <div class='shadow p-4 list-group-item-info>
            <li class='d-inline m-3'><i class='bi bi-person-fill'></i>  {$item->username}</li>
            <li class='d-inline text-primary m-3'><i class='bi bi-exclamation-octagon-fill'></i>  {$item->subject}</li> 
            <li class='d-inline text-muted m-3'><i class='bi bi-clock'></i>  {$item->creationTime}</li>
            <a class='btn btn-warning'><i class='bi bi-pencil-square'></i></a>
            <a class='btn btn-danger'><i class='bi bi-trash-fill'></i></a>
            </div>
            </section>";
        }
        ?>

<!-- href='?controlador=Cita&accion=editView&id= {$item->id}' -->
<!-- href='?controlador=Cita&accion=borrar&id=echo{$data->id}' -->
