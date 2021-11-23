<?php require_once __DIR__ . '/../layouts/default.php'; ?>

    <main>
            <form action="form_submit.php" name="form" method="get">
            <div class="input-group m-3">
                <input type="text" class="form-control" id="user" name="connectdata" placeholder="Name" aria-label="Name">
            </div>
            <div class="input-group m-3">
                <input type="text" class="form-control" id="subject" id="user" name="connectdata" placeholder="Consult subject" aria-label="Consult subject">
            </div>
            <button type="button" class="btn btn-primary m-3" name="connectdata">SUBMIT</button>
        </form>
    </main>
