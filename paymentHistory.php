<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hivtc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HIVTC Health Insurance</title>
    <link rel="stylesheet" href="../styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../styles/payment.css">
    <link rel="stylesheet" href="../styles/paymentHistory.css">

     
    <script>
        // Event Handling 
        
        async function searchPayments() {
            const searchInput = document.getElementById('searchInput').value;
            const response = await fetch(`search.php?search=${encodeURIComponent(searchInput)}`);
            const payments = await response.json();
            const tableBody = document.getElementById('paymentsTableBody');

            // Clear existing table rows
            tableBody.innerHTML = '';

            if (payments.length > 0) {
                payments.forEach(payment => {
                    const row = `
                        <tr>
                            <td>${payment.email}</td>
                            <td>${payment.contact}</td>
                            <td>${payment.package}</td>
                            <td>${payment.payment_amount}</td>
                            <td>${payment.card_type}</td>
                            <td>${payment.card_number}</td>
                            <td>${payment.expiry_date}</td>
                            <td>${payment.cardholder_name}</td>
                            <td>${payment.billing_address}</td>
                            
                            <td>
                                <a href='edit.php?id=${payment.id}' class='edit-btn'>Edit</a>
                                <a href='delete.php?id=${payment.id}' class='delete-btn' onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                            </td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="10">No payment data found</td></tr>';
            }
        }
    </script>
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
    <a href="login.php"> <button class="loginbtn">Login</button></a>
    <a href="signin.php"> <button class="signupbtn">Sign Up</button></a>
    </div>
</header>

<main>
<h1>Payment History</h1>

<!-- Search Form -->
<div class="search-container">
    <input type="text" name="search" placeholder="Search by email, contact, or package" class="search-bar" id="searchInput" oninput="searchPayments()">
</div>

<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Contact</th>
            <th>Package</th>
            <th>Payment Amount</th>
            <th>Card Type</th>
            <th>Card Number</th>
            <th>Expiry Date</th>
            <th>Cardholder Name</th>
            <th>Billing Address</th>
            <th>Operation</th>
           
        </tr>
    </thead>
    <tbody id="paymentsTableBody">
        <?php
        // Initial fetch for all records
        $result = $conn->query("SELECT id, email, contact, package, payment_amount, card_type, card_number, expiry_date, cardholder_name, billing_address FROM payments");
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["email"]) . "</td>
                        <td>" . htmlspecialchars($row["contact"]) . "</td>
                        <td>" . htmlspecialchars($row["package"]) . "</td>
                        <td>" . htmlspecialchars($row["payment_amount"]) . "</td>
                        <td>" . htmlspecialchars($row["card_type"]) . "</td>
                        <td>" . htmlspecialchars($row["card_number"]) . "</td>
                        <td>" . htmlspecialchars($row["expiry_date"]) . "</td>
                        <td>" . htmlspecialchars($row["cardholder_name"]) . "</td>
                        <td>" . htmlspecialchars($row["billing_address"]) . "</td>
                        
                        <td>
                            <a href='edit.php?id=" . $row["id"] . "' class='edit-btn'>Edit</a>
                            <a href='delete.php?id=" . $row["id"] . "' class='delete-btn' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No payment data found</td></tr>";
        }
        ?>
    </tbody>
</table>
</main>

<footer>
<p><a href="terms.php">Terms and Conditions</a></p>
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
