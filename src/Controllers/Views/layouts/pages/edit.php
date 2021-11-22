<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
    <section class='justify-content-center'>
            <?php 
            require_once 'dataUser.php';
            $users = (new DataUser()) -> all();
        foreach ($users as $item) {
            echo "
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
           
        
        </section>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    </body>
</html>