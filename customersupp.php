<?php
require 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>HVTC Health Insurance</title>
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../styles/customersupp.css">
    
 
</head>
<body>
    

<header>
    <div class="logo">HVTC Health Insurance</div>


<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <a href="about.php">About Us</a>
  <a href="plans.php">Services</a>
  <a href="contactus.php">Contact Us</a>
 
</div>
    <div class="buttons">
      
    </div>
</header>

<main>
    <h1><center>Customer Support Executive's Page<center></h1>
   
    <div>
        <table width = 75% id = "customersupp" align="center">
      <thead>
        <tr>
          <th scope="col">Full Name</th>
          <th scope="col">Email</Address></th>
          <th scope="col">Contact</th>
          <th scope="col">Issue</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
    
        <?php
    
        $sql = "select * from contact";
        $result = mysqli_query($con,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
            $fullname = $row['name'];
            $email = $row['email'];
            $contact = $row['contact'];
            $issue=$row['issue'];
    
            echo '<tr>
            <td>'.$fullname.'</td>
            <td>'.$email.'</td>
            <td>'.$contact.'</td>
            <td>'.$issue.'</td>
           <td>
           
           <a href="customersuppupdate.php? updateemaill='.$email.'"><button class = "submit" >Update</button></a>
            <a href="deleteticket.php? updateemail='.$email.'"><button class = "submit">Delete</button></a>
            </td>
          </tr>';
        }
        }
        ?>
    
    
    </tbody>
    </table>
      </div>
    
    </body>
    
    
</main>


<footer>
<p><a href="terms.php">Terms and conditions</a></p>
<p><a href="FAQ.php">FAQ</a></p>
    <div class="social-icons">
        <img src="../images/instagram.png" alt="Instagram">
        <img src="../images/facebook.png" alt="Facebook">
        <img src="../images/whatsapp.png" alt="WhatsApp">
    </div>
    <p>&copy; 2024 Website. All rights reserved.</p>
</footer>
   
</body>
</html>