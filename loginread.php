<?php
require 'config.php';  // Include the database connection
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    // Query the database
    $sql = "SELECT * FROM customer WHERE username = '$username'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();
        
        // Check if the password is correct
        if ($password == $user['password']) {
            // Redirect to the dashboard with username and password in URL query
            header("Location: dashboard.php?username=$username");
            exit;
        } else {
            // Invalid password
            echo "<script>alert('Invalid password. Please try again.'); window.location.href = 'login.php';</script>";
        }
    } else {
        // Username not found
        echo "<script>alert('Invalid username. Please try again.'); window.location.href = 'login.php';</script>";
    }
}

$con->close();
?>
