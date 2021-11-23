<?php require_once __DIR__ . '/../layouts/default.php'; ?>

    <main>
        <form action="/" name="form" method="post" id=user>
                <div class="input-group m-3">
                    <input type="text" class="form-control" id="user"value="" name="username" placeholder="Name" aria-label="Name">
                </div>
                <div class="input-group m-3">
                    <input type="text" class="form-control"  id="user" name="subject" placeholder="Consult subject " aria-label="Consult subject">
                </div>
                <button type="submit" class="btn btn-primary m-3" >SUBMIT</button>
        </form>
    </main>
