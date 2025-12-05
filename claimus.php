<?php
$host = 'localhost';  
$dbname = 'hivtc';  
$username = 'root';  
$password = '';  

// Create a connection to the MySQL database
try {
    $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $providerName = $_POST['provider-name'];
    $email = $_POST['email'];
    $serviceCode = $_POST['service-code'];
    $billedAmount = $_POST['billed-amount'];
    $paidAmount = $_POST['paid-amount'];

    
    $fileUploaded = false;
    $fileName = '';

    if (isset($_FILES['file1']) && $_FILES['file1']['error'] == 0) {
        $fileName = basename($_FILES['file1']['name']);
        $uploadDir = 'uploads/';  // Ensure this directory exists and is writable
        $uploadFilePath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['file1']['tmp_name'], $uploadFilePath)) {
            $fileUploaded = true;
        } else {
            echo "Error: File upload failed.";
        }
    }

    // Insert data into the database
    try {
        $sql = "INSERT INTO claim (Name, Email, Servicecode, Billedamount	, Paidamount, Uploaddocument)
                VALUES (:provider_name, :email, :service_code, :billed_amount, :paid_amount, :file_name)";
                
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':provider_name', $providerName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':service_code', $serviceCode);
        $stmt->bindParam(':billed_amount', $billedAmount);
        $stmt->bindParam(':paid_amount', $paidAmount);
        $stmt->bindParam(':file_name', $fileName);

        $stmt->execute();

        //echo "Claim submitted successfully!";
        if ($fileUploaded) {
            
            header("Location: claimpage.php");
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


?>
