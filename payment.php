<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>HIVTC Health Insurance</title>
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../styles/payment.css">
   
 
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
    <a href="login.php"> <button class="loginbtn">Login</button></a>
    <a href="signin.php"> <button class="signupbtn">Sign Up</button></a>
    </div>
</header>

<main>
  
    <div class="form-section">
        <form class="payment-form" action="insert.php" method="POST">
            <div class="form-left">
                <!-- Email Input -->
                <label for="email">Enter your email address</label>
                <input type="email" id="email" name="email" placeholder="JohnSilva@gmail.com" required>
    
                <!-- Contact Input -->
                <label for="contact">Enter your Contact No</label>
                <input type="tel" id="contact" name="contact" placeholder="Enter your phone number" required>
    
                <!-- Package Selection -->
                <label for="package">Select Your Package</label>
                <select id="package" name="package">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
    
                <!-- Payment Amount -->
                <label for="payment-amount">Enter your payment amount</label>
                <input type="text" id="payment-amount" name="amount" placeholder="eg: Rs.25000" required>
    
                <!-- Payment Method (Radio Buttons) -->
                <label for="payment-method">Select your payment method</label><br>
                <div class="radio-container">
                    <input type="radio" id="mastercard" name="card" value="mastercard" required>
                    <label for="mastercard">MasterCard</label>
    
                    <input type="radio" id="visacard" name="card" value="visacard">
                    <label for="visacard">VisaCard</label>
    
                    <input type="radio" id="amexcard" name="card" value="amexcard">
                    <label for="amexcard">AmexCard</label>
                </div>
                <div class="card-images">
        <label for="mastercard">
            <img src="../images/mastercard.jpg" alt="MasterCard Image" class="card-image" id="mastercard-img">
        </label>
        <label for="visacard">
            <img src="../images/visa.jpg" alt="VisaCard Image" class="card-image" id="visacard-img">
        </label>
        <label for="amexcard">
            <img src="../images/amex.jpg" alt="AmexCard Image" class="card-image" id="amexcard-img">
        </label>
    </div>

    <script>
        // Function to show the relevant card image
        function showImage(cardId) {
            // Hide all card images
            const images = document.querySelectorAll('.card-image');
            images.forEach(image => image.style.display = 'none');

            // Display the selected card's image
            document.getElementById(cardId).style.display = 'block';
        }
    </script>
            </div>

            
    
            <div class="form-right">
                <!-- Card Information -->
                <label for="card-number">Card Information</label>
                <div class="card-details">
                    <input type="text" id="card-number" name="cardnumber" placeholder="Card No" required>
                    <input type="text" id="expiry-date" name="expiredate" placeholder="MM/YY" required><br><br>
                    <input type="text" id="cvc" name="cvc" placeholder="CVC" required>
                </div>
    
                <!-- Cardholder Name -->
                <label for="cardholder-name">Cardholder name</label>
                <input type="text" id="cardholder-name" name="cardholdername" placeholder="Full name on Card" required>
    
                <!-- Billing Address -->
                <label for="billing-address">Enter your billing address</label>
                <textarea id="billing-address" name="billingaddress" required></textarea>
    
                <!-- Form Buttons -->
                <div class="form-buttons">
                    <button type="button" name="cancel" class="cancel">Cancel</button>
                    <button type="submit" name="pay" class="pay">Pay</button>
                </div>
            </div>
        </form>
    </div>
    
    
    
</main>


<footer>
<p><a href="terms.php">Privacy and Policy</a></p>
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