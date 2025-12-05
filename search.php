<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hivtc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize search variable
$search = '';
if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
}

$sql = "SELECT id, email, contact, package, payment_amount, card_type, card_number, expiry_date, cardholder_name, billing_address FROM payments WHERE email LIKE '%$search%' OR contact LIKE '%$search%' OR package LIKE '%$search%'";

$result = $conn->query($sql);
$payments = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $payments[] = $row;
    }
}

echo json_encode($payments);
$conn->close();
?>
