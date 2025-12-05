<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>HVTC Health Insurance</title>
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../styles/contactuss.css">
    
 
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
    <a href="login.php"><button class="loginbtn">Login</button></a>
    <a href="signin.php">  <button class="signupbtn">Sign Up</button></a>
    </div>
</header>

<main>
    <section class="contact-us">
        <h1>Contact Us</h1>
        <div class="contact-container">
            <div class="contact-info">
                <div class="box">
                    <h2>Talk to Customer Support</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Nunc maximus nulla ut commodo sagittis.</p>
                </div>
                <div class="box">
                    <h2>General Inquiries</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Nunc maximus nulla ut commodo sagittis.</p>
                </div>
                <div class="box">
                    <h2>Hours of Operation</h2>
                    <p>Monday - Friday: 9am - 5pm<br>Saturday: 10am - 3pm<br>Sunday: Closed</p>
                </div>
            </div>

            <div class="raise-ticket">
                <h2>Raise a Ticket</h2>
                <form action="contact.php" method="post">
                    <label for="full-name">Enter your Full Name</label>
                    <input type="text" id="full-name" name="fullname" required>

                    <label for="email">Enter your email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="contact">Enter your contact no</label>
                    <input type="tel" id="contact" name="contact" required>

                    <label for="issue">Describe your issue</label>
                    <textarea id="issue" name="issue" required></textarea>

                    <button type="submit" name="Bsubmit">Submit</button>
                </form>
            </div>
        </div>
    </section>

</main>


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