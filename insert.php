<?php

require 'config.php';

$email=$_POST["email"];
$contact=$_POST["contact"];
$package=$_POST["package"];
$payment_amount=$_POST["amount"];
$card_type=$_POST["card"];
$card_number=$_POST["cardnumber"];
$expiry_date=$_POST["expiredate"];
$cvc=$_POST["cvc"];
$cardholder_name=$_POST["cardholdername"];
$billing_address=$_POST["billingaddress"];

    
$sql = "INSERT INTO payments (email, contact, package, payment_amount, card_type, card_number, expiry_date, cvc, cardholder_name, billing_address) 
        VALUES ('$email', '$contact', '$package', '$payment_amount', '$card_type', '$card_number', '$expiry_date', '$cvc', '$cardholder_name', '$billing_address')";


if ($con->query($sql)) {
    //echo "Insert Successful";
    echo "<script>
            alert('Payment Successful!');
            window.location.href = 'payment.php';
          </script>";
    exit();      
} else {
    echo "Error: " . $con->error; 

}
$con->close();
?>