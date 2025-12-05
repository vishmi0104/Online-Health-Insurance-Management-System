<?php 
require 'config.php';

if(isset($_GET['updateuser'])){
  $username=$_GET['updateuser'];

  $sql="DELETE FROM customer WHERE username='$username'";

  $result=mysqli_query($con,$sql);
  if($result){

    header('location:admin.php');
  }
  else{
    die(mysqli_error($con));
  }

}
?>