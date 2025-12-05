<?php
require 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>HIVTC Health Insurance</title>
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../styles/manager.css">
    <script>
        function confirmDelete() {
            return confirm("Do you want to delete this record?");
        }
       
    </script>
 
</head>
<body>
    

<header>
    <div class="logo">HIVTC Health Insurance</div>


<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <a href="about.php">About Us</a>
  <a href="plans.php">Services</a>
  <a href="contactus.php">Contact Us</a>
 
</div>
    <div class="buttons">
        <button class="loginbtn">Login</button>
     
    </div>
</header>

<main>

    
        <table width = 75% id = "user" align="center">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Service Code</Address></th>
          <th scope="col">Billed Amount</th>
          <th scope="col">Paid Amount</th>
          <th scope="col">Upload Document</th>
          <th scope="col">Status</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
    
        <?php
    
        $sql = "select * from claim";
        $result = mysqli_query($con,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
            $name = $row['Name'];
            $email = $row['Email'];
            $service_code = $row['Servicecode'];
            $billed_amount = $row['Billedamount'];
            $paid_amount = $row['Paidamount'];
            $file = $row['Uploaddocument'];
            $status = $row['Status'];
    
            echo '<tr>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$service_code.'</td>
            <td>'.$billed_amount.'</td>
            <td>'.$paid_amount.'</td>
            <td>'.$file.'</td>
          
           <td>
          <form method="POST" action="updatestatus.php">
                                <input type="hidden" name="name" value="' . $name . '">
                                <select name="status" class="selectbox" onchange="this.form.submit()">
                                    <option value="pending" ' . ($status == 'pending' ? 'selected' : '') . '>Pending</option>
                                    <option value="claimed" ' . ($status == 'claimed' ? 'selected' : '') . '>Claimed</option>
                                    <option value="decline" ' . ($status == 'decline' ? 'selected' : '') . '>Decline</option>
                                </select>
                            </form>
           </td>
           <td> 
           <form method="POST" action="deleteclaim.php" onsubmit="return confirm(\'Are you sure you want to delete this customer?\')">
                                <input type="hidden" name="name" value="' . $name . '">
                                <button class="submit" type="submit">Delete</button>
            </form>
          </tr>';
        }
        }
        ?>
    
    
    </tbody>
    </table>
    
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