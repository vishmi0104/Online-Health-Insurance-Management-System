<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['name'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);

        // Prepare the DELETE query
        $sql = "DELETE FROM claim WHERE Name = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "s", $name);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }

       
        header("Location: manager.php");
        exit();
    } else {
        echo "No customer specified for deletion.";
    }
}
?>
