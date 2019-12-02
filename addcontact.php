<?php
    include_once 'connection.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $phone = mysqli_real_escape_string($conn,$POST['phone']);

mysqli_query($conn,"INSERT INTO contact (name, number) values ('$name','$phone');");
header("Location: fetchdata.php");
exit();
}

