<?php
require 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>HVTC Health Insurance</title>
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../styles/admin1.css">
    <script>
        function confirmDelete() {
            return confirm("Do you want to delete this record?");
        }
        function confirmUpdate(){
          return confirm("Do you want to update this record")
        }

        // Show button when user scrolls down
    window.onscroll = function() {
        var topBtn = document.getElementById("topBtn");
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            topBtn.style.display = "block";
        } else {
            topBtn.style.display = "none";
        }
    };

    // Scroll to top of page
    function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
 
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
    <h1 style="color:chartreuse; font-size:50px;font-family:Georgia, 'Times New Roman', Times, serif"><center><big>Welcome admin</big></center> </h1>
    
        <div> 
        <a href = "signin.php"><button class = "submit">Add Customer</button></a>
      </div>

      <div> 
        <a href = "paymentHistory.php"><button class = "submit">View payment history</button></a>
      </div>
    
        <table width = 75% id = "user" align="center">
      <thead>
        <tr>
          <th scope="col">Firstname</th>
          <th scope="col">Lastname</th>
          <th scope="col">Email</Address></th>
          <th scope="col">Address</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
    
        <?php
    
        $sql = "select * from customer";
        $result = mysqli_query($con,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
            $firstname = $row['FirstName'];
            $lastname = $row['LastName'];
            $email = $row['Email'];
            $address = $row['Address'];
            $username=$row['username'];
            $password = $row['password'];
    
            echo '<tr>
            <td>'.$firstname.'</td>
            <td>'.$lastname.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>'.$username.'</td>
            <td>'.$password.'</td>
           <td>
           <a href="updatecustomer.php? updateusername='.$username.'" onclick="return confirmUpdate()"><button class = "submit" >Update</button></a>
            <a href="deletecustomer.php? updateuser='.$username.'" onclick="return confirmDelete()"><button class = "submit">Delete</button></a>
            </td>
          </tr>';
        }
        }
        ?>
    
    
    </tbody>
    </table>
    
    </body>
    
    
</main>
<button onclick="scrollToTop()" id="topBtn" style="display:none;">Back to Top</button>

<footer>
<p><a href="terms.php">Terms and Conditions</a></p>
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