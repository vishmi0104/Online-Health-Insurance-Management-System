<?php
// Include database connection file
include 'config.php';

// Fetch the username from the POST request
$username = $_POST['username'] ?? '';

// Ensure that the username is provided
if (empty($username)) {
    echo "No username provided.";
    exit();
}

// SQL query to delete the user from the 'customer' table
$sql = "DELETE FROM customer WHERE username = ?"; // Use ? as a placeholder

// Prepare the SQL statement
if ($stmt = $con->prepare($sql)) {
    // Bind the username to the prepared statement
    $stmt->bind_param("s", $username);

    // Execute the statement
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            // Account deleted successfully
            header("Location: login.php?message=Account deleted successfully");
            exit();
        } else {
            echo "No account found with that username.";
        }
    } else {
        echo "Error deleting account: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error preparing the statement: " . $con->error;
}

// Close the database connection
$con->close();
?>
