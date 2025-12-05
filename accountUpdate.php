<?php
require 'config.php'; // database connection

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['userName'];
    $password = $_POST['password'];



    // Check all fields are filled
    if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($address) && !empty($username) && !empty($password)) {
        // Validate username format
        if (filter_var($email, FILTER_VALIDATE_USERNAME)) {
            // Check if passwords match
            if ($password === $confirm) {
                // Sanitize inputs
                $firstname = mysqli_real_escape_string($con, $firstname);
                $lastname = mysqli_real_escape_string($con, $lasttname);
                $email = mysqli_real_escape_string($con, $email);
                $address = mysqli_real_escape_string($con, $address);
                $username = mysqli_real_escape_string($con, $username);
                $password = mysqli_real_escape_string($con, $password);
               

                // Directly using variables in SQL query (not recommended for production)
                $sql = "UPDATE customer SET FirstName = '$firstname',LastName = '$lastname',Email = '$email',address = '$address',password = '$password' WHERE username = '$username'";

                // Execute the query
                if ($con->query($sql) === TRUE) {
                    echo "<script>alert('Update successful');</script>";
                    header("Location:signup.php?success=" . urlencode("Update successful"));
                    exit();
                } else {
                    echo "<script>alert('Update failed. Please try again.');</script>";
                    header("Location:dashboard.php?error=" . urlencode("Update failed"));
                    exit();
                }
            } else {
                echo "<script>alert('Passwords do not match');</script>";
                header("Location:signup.php?error=" . urlencode("Passwords do not match"));
                exit();
            }
        } else {
            echo "<script>alert('Invalid email format');</script>";
            header("Location:signup.php?error=" . urlencode("Invalid email format"));
            exit();
        }
    }
}
?>
