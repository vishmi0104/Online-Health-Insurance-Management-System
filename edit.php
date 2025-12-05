<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hivtc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the payment details
    $sql = "SELECT * FROM payments WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found with ID: $id";
        exit;
    }
}

// Update payment details on form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $package = $_POST["package"];
    $payment_amount = $_POST["payment_amount"];
    $card_type = $_POST["card_type"];
    $card_number = $_POST["card_number"];
    $expiry_date = $_POST["expiry_date"];
    $cardholder_name = $_POST["cardholder_name"];
    $billing_address = $_POST["billing_address"];

    // Update query
    $update_sql = "UPDATE payments SET 
                    email = '$email', 
                    contact = '$contact', 
                    package = '$package', 
                    payment_amount = '$payment_amount',
                    card_type = '$card_type',
                    card_number = '$card_number',
                    expiry_date = '$expiry_date',
                    cardholder_name = '$cardholder_name',
                    billing_address = '$billing_address' 
                  WHERE id = $id";

    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: paymentHistory.php"); // Redirect to the payment history page after updating
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Payment</title>
    <link rel="stylesheet" href="../styles/payment.css">
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../styles/editpayment.css">
</head>
<body>

<header>
    <div class="logo">HIVTC Health Insurance</div>
    <div class="topnav" id="myTopnav">
        <a href="home.php" class="active">Home</a>
        <a href="about.php">About Us</a>
        <a href="plans.php">Services</a>
        <a href="contactus.php">Contact Us</a>
    </div>
    <div class="buttons">
        <!-- <button class="loginbtn">Login</button>
        <button class="signupbtn">Sign Up</button> -->
    </div>
</header>


<h2>Edit Payment</h2>

<form method="POST" action="edit.php?id=<?php echo $id; ?>">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
    
    <label for="contact">Contact:</label><br>
    <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>" required><br><br>

    <label for="package">Package:</label><br>
    <input type="text" id="package" name="package" value="<?php echo $row['package']; ?>" required><br><br>

    <label for="payment_amount">Payment Amount:</label><br>
    <input type="number" id="payment_amount" name="payment_amount" value="<?php echo $row['payment_amount']; ?>" required><br><br>

    <label for="card_type">Card Type:</label><br>
    <input type="text" id="card_type" name="card_type" value="<?php echo $row['card_type']; ?>" required><br><br>

    <label for="card_number">Card Number:</label><br>
    <input type="text" id="card_number" name="card_number" value="<?php echo $row['card_number']; ?>" required><br><br>

    <label for="expiry_date">Expiry Date:</label><br>
    <input type="text" id="expiry_date" name="expiry_date" value="<?php echo $row['expiry_date']; ?>" required><br><br>

    <label for="cardholder_name">Cardholder Name:</label><br>
    <input type="text" id="cardholder_name" name="cardholder_name" value="<?php echo $row['cardholder_name']; ?>" required><br><br>

    <label for="billing_address">Billing Address:</label><br>
    <input type="text" id="billing_address" name="billing_address" value="<?php echo $row['billing_address']; ?>" required><br><br>

    <div class="button-container">
    <input type="submit" value="Update Payment">
</div>

</form>

<footer>
<p><a href="terms.php">Privacy and Policy</a></p>
<p><a href="FAQ.php">FAQ</a></p>
    <div class="social-icons">
        <img src="../images/instagram.png" alt="Instagram">
        <img src="../images/facebook.png" alt="Facebook">
        <img src="../images/whatsapp.png" alt="WhatsApp">
    </div>
    <p>&copy; 2024 Website. All rights reserved.</p>
</footer>

</body>
</html>
