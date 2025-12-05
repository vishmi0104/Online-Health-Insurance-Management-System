<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>HVTC Health Insurance</title>
    <link rel="stylesheet" href="../styles/homeStyle.css">
    <link rel="stylesheet" href="../styles/newheaderfooter.css">
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
     <script src="../JS/homeJS.js">
    
        function signUpAlert() {
            alert("Directing to Sign Up page!");
        }
        </script>
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
       <a class="main-button" href="login.php"> <button class="loginbtn">Login in</button></a>
        <a class="main-button" href="signin.php"><button class="signupbtn" onclick="signUpAlert()">Sign Up</button></a>
    </div>
</header>

<section class="main">
    <img>
    
</section>

<section class="reviews">
    <div class="review">
        <img src="../images/men.jpg" alt="User 1" style="height: 100px; width: 90px;">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--add star icon library-->
        <span class="fa fa-star checked" ></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
       
    </div>
    <div class="review">
        <img src="../images/men2.jpg" alt="User 2" style="height: 100px; width: 90px;">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--add star icon library-->
        <span class="fa fa-star checked" ></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
     
    </div>
    <div class="review">
        <img src="../images/girl.jpg" alt="User 3" style="height: 100px; width: 100px;">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--add star icon library-->
        <span class="fa fa-star checked" ></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
  

    </div>
</section>

<a href="rate" class="more-reviews">Customer Ratings</a>



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