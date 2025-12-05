<?php 
    require 'config.php';
    session_start(); // Start the session


    if(isset($_POST['submit'])) 
    {
        //get data
        $loginUsername = $_POST['username'];
        $loginPassword = $_POST['password'];

        //check the all fields are required
        if(!empty($loginUsername) && !empty($loginPassword)) 
        {
            //check username
            if (filter_var($loginUsername, FILTER_VALIDATE_USERNAME)) 
            {
                $userDetails = validUser($loginUsername, $loginPassword); 
    
                if ($userDetails) 
                {
                    // Store user details in session
                 
                    $_SESSION['userName'] = $userDetails[0];
                    $_SESSION['userPassword'] = $userDetails[1];
    
                    // Redirect to profile page after successful login
                    
                    header("Location:dashboard.php");
                    exit();
                }
            }
            else
            {
                echo"<script>alert('Invalid email type')</script>";
                header("Location:signup.php?error=".urlencode("Invalid Username"));
                exit(); 
            }

        }
        else
        {
            header("Location:signup.php?error=".urlencode("All fields are required"));
            exit(); 
        }
    }
?>
