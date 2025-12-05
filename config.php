<?php

$con = new mysqli('localhost','root','','hivtc');

if($con->connect_error){
    die("connection failed".$con->connect_error);

}
else{
    echo "";
}

?>