<?php 
require 'config.php';

if(isset($_GET['updateemail'])){
  $email=$_GET['updateemail'];

  $sql="DELETE FROM contact WHERE Email='$email'";

  $result=mysqli_query($con,$sql);
  if($result){

    header('location:customersupp.php');
  }
  else{
    die(mysqli_error($con));
  }

}
?>