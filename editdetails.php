<?php
require 'config.php';  // Include the database configuration file

// Check if username and password are provided via GET
if (isset($_GET['username'])) {
    // Escape the input to prevent SQL injection
    $username = mysqli_real_escape_string($con, $_GET['username']);


    // Query the database to get the user data
    $sql = "SELECT * FROM customer WHERE username = '$username'";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "<script>alert('User not found');</script>";
        exit();
    }
} else {
    echo "<script>alert('Username and password are required');</script>";
    exit();
}

// Check if form is submitted to update user details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get updated data from form
    $firstName = mysqli_real_escape_string($con, $_POST['FirstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['LastName']);
    $email = mysqli_real_escape_string($con, $_POST['Email']);
    $address = mysqli_real_escape_string($con, $_POST['Address']);
    $userName = mysqli_real_escape_string($con, $_POST['userName']);
    $newPassword = mysqli_real_escape_string($con, $_POST['password']); // use a separate variable for the new password

    // Update query
    $updateSql = "UPDATE customer SET 
        FirstName = '$firstName', 
        LastName = '$lastName', 
        Email = '$email', 
        Address = '$address', 
        username = '$userName',
        password = '$newPassword' 
        WHERE username = '$username'";

    if ($con->query($updateSql) === TRUE) {
        echo "<script>alert('Details updated successfully');</script>";
        echo "<script>window.location.href = 'dashboard.php?username=" . urlencode($userName) . "&password=" . urlencode($newPassword) . "';</script>";
    } else {
        echo "<script>alert('Error updating details: " . $con->error . "');</script>";
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIVTC Health Insurance - Edit Details</title>
    <link rel="stylesheet" href="../HIVTC_ins/styles/weblogin1.css">
    <link rel="stylesheet" href="../HIVTC_ins/styles/newheaderfooter.css">
    <link rel="stylesheet" href="../HIVTC_ins/styles/editdetails.css">
</head>
<body>

<header>
    <div class="logo">HIVTC Health Insurance</div>
    <div class="topnav" id="myTopnav">
        <a href="home.php" class="active">Home</a>
        <a href="about.html">About Us</a>
        <a href="plans.html">Services</a>
        <a href="contactus.php">Contact Us</a>
    </div>
</header>

<main>
    <section class="login-box">
        <h2>Edit Details</h2>
        <form method="POST">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="FirstName" value="<?= htmlspecialchars($user['FirstName']); ?>" required><br>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="LastName" value="<?= htmlspecialchars($user['LastName']); ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" value="<?= htmlspecialchars($user['Email']); ?>" required><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="Address" value="<?= htmlspecialchars($user['Address']); ?>" required><br>

            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" value="<?= htmlspecialchars($user['username']); ?>" required ><br>

            <label for="password">Password:</label>
    
            <input type="text" id="password" name="password" value="<?= htmlspecialchars($user['password']); ?>" required ><br>
            
            <input type="submit" value="Save" class="savebtn">
        </form>
    </section>
</main>

<footer>
    <p>Terms and conditions | <a href="#">Privacy and Policy</a></p>
    <div class="social-icons">
        <img src="../HIVTC_ins/images/instagram.png" alt="Instagram">
        <img src="../HIVTC_ins/images/facebook.png" alt="Facebook">
        <img src="../HIVTC_ins/images/whatsapp.png" alt="WhatsApp">
    </div>
    <p>&copy; 2024 Website. All rights reserved.</p>
</footer>

</body>
</html>
