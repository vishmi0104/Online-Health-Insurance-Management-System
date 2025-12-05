<!DOCTYPE html>
<head>
    
    <title>HIVTC Health Insurance - Login</title>
    
    <link rel="stylesheet" href="../HIVTC_ins/styles/newheaderfooter1.css">
    
    <link rel="stylesheet" href="../HIVTC_ins/styles/sign1.css">
   
</head>
<body>
    <div class="container">
    <header>
        <div class="logo">HIVTC Health Insurance</div>

    
    <div class="topnav" id="myTopnav">
                <a href="../HIVTC_ins/include/home.php" class="active">Home</a>
                <a href="../HIVTC_ins/include/about.php">About Us</a>
                <a href="../HIVTC_ins/include/plans.php">Services</a>
                <a href="../HIVTC_ins/include/contactus.php">Contact Us</a>
     
    </div>
    
    </header>
    
    <main>
        <section class="login-box">
            
                <h2>Create an Account</h2>
                <div class="form-container">
                <form action="signup.php" method="POST">
                    
                    <!-- First Name -->
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="firstname" placeholder="Enter your first name" required><br><br>
                    </div>
        
                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="lastname" placeholder="Enter your last name" required><br><br>
                    </div>
        
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
                    </div>
        

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter your address" required><br><br>
                    </div>
                    <!-- Username -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Enter a username" required><br><br>
                    </div>
        
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password:</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required><br><br>
                    </div>
        
                    <!-- Submit Button -->
                    <button type="submit" name="Bsubmit"  class="submit-btn">Sign Up</button>
                
                </form>
                
            </div>
        </section>
    </main>
</div>
    <footer>
    <p><a href="../HIVTC_ins/include/terms.php">Terms and Conditions</a></p>
    <p><a href="../HIVTC_ins/include/FAQ.php">FAQ</a></p>
        <div class="social-icons">
        <img src="../HIVTC_ins/images/instagram.png" alt="Instagram">
        <img src="../HIVTC_ins/images/facebook.png" alt="Facebook">
        <img src="../HIVTC_ins/images/whatsapp.png" alt="WhatsApp">
        </div>
        <p>&copy; 2024 Website. All rights reserved.</p>
    </footer>
</body>
</html>