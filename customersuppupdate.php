<?php
require 'config.php';

$email = $_GET['updateemaill']; // Getting the email from the query string

// Fetching the existing data from the database
$sql = "SELECT * FROM contact WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$fullname = $row['name'];
$email = $row['email'];
$contact = $row['contact'];
$issue = $row['issue'];

if(isset($_POST['Bsubmit'])) {
    // Only update the status to 'Done' when form is submitted
    $sql = "UPDATE contact SET status='Done' WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if($result) {
        header('location:customersupp.php'); // Redirect back to the customer support page after update
    } else {
        die(mysqli_error($con)); // Display error if update fails
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Issue Status</title>
    <link rel="stylesheet" href="../styles/newheaderfooter.css">
</head>
<body>

<h2>Update Issue Status for <?php echo $fullname; ?></h2>

<!-- Form to submit the update -->
<form method="POST">
    <label>Full Name:</label>
    <input type="text" value="<?php echo $fullname; ?>" disabled><br><br>

    <label>Email:</label>
    <input type="email" value="<?php echo $email; ?>" disabled><br><br>

    <label>Contact:</label>
    <input type="text" value="<?php echo $contact; ?>" disabled><br><br>

    <label>Issue:</label>
    <textarea disabled><?php echo $issue; ?></textarea><br><br>

    <!-- When this button is clicked, it will submit the form and trigger the update -->
    <button type="submit" name="Bsubmit">Mark as Done</button>
</form>

</body>
</html>
