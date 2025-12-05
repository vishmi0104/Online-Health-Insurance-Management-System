<?php
// db_connection.php: Include this file for database connection
include 'connect.php';

session_start();
$user_id = $_SESSION['user_id'];

// Get the posted form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$address = $_POST['address'];
$userName = $_POST['userName'];

// Prepare an SQL query to update the user details
$sql = "UPDATE customer SET FirstName=?, LastName=?, Email=?, Address=?, username=?, password=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $firstName, $lastName, $email, $address, $userName, $user_id);

if ($stmt->execute()) {
    echo "Details updated successfully!";
} else {
    echo "Error updating details.";
}

$stmt->close();
$conn->close();
?>
