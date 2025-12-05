<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hivtc";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the record
    $sql = "DELETE FROM payments WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        //echo "Record deleted successfully";
        header("Location: paymentHistory.php");
        exit();
    } else {
        echo "Error deleting record: " . $con->error;
    }
} else {
    echo "No id parameter found!";
}

// Redirect back to payment history page after deletion
header("paymentHistory.php");
exit();

$conn->close();
?>
