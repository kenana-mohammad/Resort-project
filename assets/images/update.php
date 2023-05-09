<?php
$username = $_POST["username"];
$password = $_POST["password"];
$id = $_POST["id"];
include 'connection.php';
$update =  mysqli_query($con,"update users set username='$username' ,password='$password' where id='$id'");

if($update){
    echo '<script>alert("successfuly");window.location.assign("show_user.php");</script>';
}



?>