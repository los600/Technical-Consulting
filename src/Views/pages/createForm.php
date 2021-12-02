<?php require_once __DIR__ . '/../layouts/default.php'; ?>

    <main>
      

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    
                    
                    <form action="/Cita" class="shadow p-4"  name="form" method="post" id=user>
                        <div class="mb-3">
                            <h4>Solicitar Cita</h4>  
                        </div>                
                        <div class="mb-3 input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" required id="user"value="" name="username" placeholder="Name" aria-label="Name">
                        </div>

                        <div class="mb-3 input-group">
                            <span class="input-group-text"><i class="bi bi-exclamation-octagon-fill"></i></span>
                            <label for="Password"></label>
                            <textarea class="form-control" type="text"  required  id="user" name="subject" placeholder="Consult subject " aria-label="Consult subject"></textarea>
                        </div>

                
                        <div class="mb-4 mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    
                        
                    </form>
                </div>
            </div>
        </div>
          
        
    </main>
    <?php require_once __DIR__ . '/../layouts/footer.php'; ?>
