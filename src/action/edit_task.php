<?php
namespace App\action;


if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(tittle, description) VALUE ('$title, $description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }

$_SESSION['message'] = 'Task SAved succesfully';
$_SESSION['message_type'] = 'seccess';
header('location:index.php');
}