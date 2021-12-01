<?php require_once __DIR__ . '/../layouts/default.php'; 
echo"
    <main>
        
        <div class='container mt-5'>
            <div class='row'>
                <div class='col-md-6 offset-md-3'>
                    
               
                    <form action='/update' class='shadow p-4'  name='form' method='post' id=user> 
              
                         <div class='mb-3'>
                            <h4>Editar Cita</h4>  
                         </div>                
                         <div class='mb-3 input-group'>
                            <span class='input-group-text'><i class='bi bi-person-fill'></i></span>
                            <input type='hidden' name='id' value='{$id}'>
                            <input type='text' class='form-control' required id='user'value='{$cita-> username}' name='username' aria-label='Name'>
                         </div>
                         <div class='mb-3 input-group'>
                             <span class='input-group-text'><i class='bi bi-exclamation-octagon-fill'></i></span>
                             <label for='Password'></label>
                             <textarea class='form-control' type='text'  required id='user' name='subject'  aria-label='Consult subject'>{$cita-> subject}</textarea>
                         </div>
                         <input type='hidden' id='custId' name='custId' value='{}'> 
                         <div class='mb-4 mt-4'>
                             <button type='submit' class='btn btn-primary'>Update</button>
                         </div>
                         
                        
                    </form>
                </div>
            </div>
        </div>
    
        
    </main>
    ";
    ?>

<!--     method='get'? -->