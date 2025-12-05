<!DOCTYPE html>
<head>
    
    <title>HIVTC Health Insurance - Login</title>
    <link rel="stylesheet" href="../HIVTC_ins/styles/weblogin1.css">
    <link rel="stylesheet" href="../HIVTC_ins/styles/newheaderfooter1.css">
   
</head>
<body>
    
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
            <h2>LOGIN</h2>
            <form action="loginread.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="John" required>
                

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                
                <button type="submit" class="sign-up-button">Sign in</button>

             
            </form>
        </section>
    </main>

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