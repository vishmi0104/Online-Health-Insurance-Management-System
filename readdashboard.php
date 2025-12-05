<?php
// db_connection.php: Include this file for database connection
include 'connect.php';

session_start();
// Assuming the user is logged in and has an ID stored in the session
$user_id = $_SESSION['user_id'];

// Prepare SQL query to fetch user details from the 'customer' table
$sql = "SELECT FirstName, LastName, Email, Address, username,password FROM customer WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Return user details as JSON for frontend to handle
    echo json_encode($row);
} else {
    echo json_encode(['error' => 'No user data found']);
}
?>
