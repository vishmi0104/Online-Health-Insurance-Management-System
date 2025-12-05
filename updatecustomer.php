
<?php
require 'config.php';
$username=$_GET['updateusername'];
$sql = "SELECT * FROM customer WHERE username = '$username'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$firstname = $row['FirstName'];
$lastname = $row['LastName'];
$email =$row['Email'];
$address = $row['Address'];
$username=$row['username'];
$password = $row['password'];

if(isset($_POST['Bsubmit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email =$_POST['email'];
            $address = $_POST['address'];
            $username=$_POST['username'];
            $password = $_POST['password'];
    

    $sql = "UPDATE customer set FirstName='$firstname',LastName='$lastname',Email='$email',Address='$address',username='$username',password='$password' where username='$username'";
    $result = mysqli_query($con,$sql);

    if($result){
        //echo "Updated successfully";
        header('location:admin.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<html>
    <head>
       
        <title>HIVTC Health Insuarance</title>
        <link rel="stylesheet" href="../images/newheaderfooter.css">
        <link rel="stylesheet" href="../images/admin.css">
        <link rel="stylesheet" href="../images/signin.css">

        
</head>
<body>
<section id="header">
        
        <h1 class="heading"><a href="home.php">HIVTC Health Insuarance</a></h1>
</section>
        <section id="form-style">
        <form method="POST">
                    
                    <!-- First Name -->
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="firstname" placeholder="Enter your first name" required autocomplete = "off" value=<?php echo $firstname?>><br><br>
                    </div>
        
                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="lastname" placeholder="Enter your last name" required autocomplete = "off" value=<?php echo $lastname?>><br><br>
                    </div>
        
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required autocomplete = "off" value=<?php echo $email?>><br><br>
                    </div>
        

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter your address" required autocomplete = "off" value=<?php echo $address?>><br><br>
                    </div>
                    <!-- Username -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Enter a username" required autocomplete = "off" value=<?php echo $username?>><br><br>
                    </div>
        
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete = "off" value=<?php echo $password?>><br><br>
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password:</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required autocomplete = "off"><br><br>
                    </div>
        
                    <!-- Submit Button -->
                    <button type="submit" name="Bsubmit" class="submit-btn" value="update">Update</button>
                
                </form>

    </section>
    
</body> 
</html>
