<?php
require 'config.php';

    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $issue=$_POST['issue'];
    $status=$_POST[''];

    $sql = "INSERT INTO contact VALUES('$name','$email',' $contact','$issue','pending')";

    if($con->query($sql))
    {
        
        header('location:home.php');
    }
    else{
        echo "Error".$con->error;
    }

    $con->close();

    ?>
    