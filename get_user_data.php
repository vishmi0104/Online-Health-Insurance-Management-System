<?php
require 'config.php';  // Include the database configuration file

// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if username and password are provided via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    // Escape the input to prevent SQL injection
    $username = mysqli_real_escape_string($con, $_POST['username']);


    // Query the database to get the user data
    $sql = "SELECT * FROM customer WHERE username = '$username'";
    $result = $con->query($sql);

    if (!$result) {
        // If there's a query error, log and return an error
        echo json_encode(['error' => 'Database query error: ' . $con->error]);
        exit();
    }

    // Check if a user is found
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Check if the password matches (use hashed passwords in production)
        if ($username == $user['username']) {
            // Prepare the user data to send back as JSON
            $userData = [
                'FirstName' => $user['FirstName'],
                'LastName' => $user['LastName'],
                'email' => $user['Email'],
                'address' => $user['Address'],
                'username' => $user['username']
            ];
            
            // Send the user data as JSON
            header('Content-Type: application/json');
            echo json_encode($userData);
        } else {
            // If the password is incorrect
            echo json_encode(['error' => 'Invalid password']);
        }
    } else {
        // If the username is not found in the database
        echo json_encode(['error' => 'User not found']);
    }
} else {
    // If no username or password is provided
    echo json_encode(['error' => 'Username and password required']);
}

// Close the database connection
$con->close();
?>
