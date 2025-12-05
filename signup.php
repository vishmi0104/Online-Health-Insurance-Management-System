<?php
require 'config.php';

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "INSERT INTO customer VALUES('$firstname','$lastname','$email','$address','$username','$password')";

    if($con->query($sql))
    {
        echo "Insert sucessfull";
        header("Location:login.php");
    }
    else{
        echo "Error".$con->error;
    }

    $con->close();

    ?>
    