<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $status = $_POST['status'];

    // Update the status in the database
    $sql = "UPDATE claim SET Status = ? WHERE Name = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $status, $name);

    if (mysqli_stmt_execute($stmt)) {
        echo "Status updated successfully!";
    } else {
        echo "Error updating status: " . mysqli_error($con);
    }

    // Redirect back to the main page after the update
    header("Location: manager.php");
    exit();
}
?>
