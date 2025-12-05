<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIVTC Health Insurance</title>

    <!-- External CSS files -->
    <link rel="stylesheet" href="../styles/claim.css">
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">

    <!-- Linking external JS (optional, not used for now) -->
    <script src="../JS/claim.js" defer>
    
        // Function to handle the form submission
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('claimForm').addEventListener('submit', function(event) {
                event.preventDefault();  // Prevent the form from submitting normally
                
                // Add a confirmation alert box
                alert('Request Successful!');
                
                
                this.submit();
            });
        });
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
    <a class="main-button" href="login.php"> <button class="loginbtn">Login in</button></a>
    <a class="main-button" href="signin.php"><button class="signupbtn">Sign Up</button></a>
    </div>
</header>

<main>
    <section class="claim-form">
        <h2>Request for a claim</h2>
        <p>Please fill the claim request form</p>
        <form id="claimForm" action="claimus.php" method="POST" enctype="multipart/form-data">
            <label for="provider-name">Name:</label>
            <input type="text" id="provider-name" name="provider-name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <h3>Submitter Introduction</h3>
            <p>(Please include submitter job title, telephone no, etc.)</p>

            <label for="service-code">Service Code:</label>
            <input type="text" id="service-code" name="service-code" required>

            <label for="billed-amount">Billed Amount:</label>
            <input type="text" id="billed-amount" name="billed-amount" required>

            <label for="paid-amount">Paid Amount:</label>
            <input type="text" id="paid-amount" name="paid-amount" required>

            <div class="file-upload-section">
                <label for="file1">Upload Document :</label>
                <input type="file" id="file1" name="file1">
            </div>

            <button id="request-button" type="submit" onc;ick class="submit-button">Request</button>
            
        </form>
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
