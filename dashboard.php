<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIVTC Health Insurance - Dashboard</title>
    <link rel="stylesheet" href="../HIVTC_ins/styles/newheaderfooter1.css">
    <link rel="stylesheet" href="../HIVTC_ins/styles/dash1.css">
   
    <script>
        // Fetch user details from the server when the page loads
        window.onload = function () {
            // Extract username and password from URL query string
            const queryParams = new URLSearchParams(window.location.search);
            const username = queryParams.get('username');
          

            if (username) {
                // Send POST request to get user data
                fetch('get_user_data.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        'username': username,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (!data.error) {
                        // Populate the user data in the dashboard
                        document.getElementById('FirstName').innerText = data.FirstName;
                        document.getElementById('LastName').innerText = data.LastName;
                        document.getElementById('Email').innerText = data.email;
                        document.getElementById('Address').innerText = data.address;
                        document.getElementById('username').innerText = data.username;

                        // Set the hidden input value for deletion
                        document.getElementById('usernameToDelete').value = data.username;

                        // Update the Edit Details link with the retrieved data
                        const editDetailsLink = document.getElementById('editDetailsLink');
                        editDetailsLink.href = `editdetails.php?username=${encodeURIComponent(data.username)}`;
                    } else {
                        console.error(data.error);
                    }
                })
                .catch(error => console.error('Error fetching user data:', error));
            } else {
                console.error('No username or password provided.');
            }
        };
    </script>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">HIVTC Health Insurance</div>
            <div class="topnav" id="myTopnav">
                <a href="../HIVTC_ins/include/home.php" class="active">Home</a>
                <a href="../HIVTC_ins/include/about.php">About Us</a>
                <a href="../HIVTC_ins/include/plans.php">Services</a>
                <a href="../HIVTC_ins/include/contactus.php">Contact Us</a>
            </div>
            <div class="user-icon">
                <img src="../HIVTC_ins/images/user-icon.png" alt="User Icon" class="userhead">
            </div>
        </header>

        <main>
            <section class="dashboard">
                <h2>My Dashboard</h2>
                <div class="card-container">
                    <div class="cardbox">
                        <h3>My Details</h3>
                        <p>First name: <span id="FirstName"></span></p>
                        <p>Last name: <span id="LastName"></span></p>
                        <p>Email: <span id="Email"></span></p>
                        <p>Address: <span id="Address"></span></p>
                        <p>User Name: <span id="username"></span></p>
                        <br><br>
                        <a id="editDetailsLink" href="#">
                            <button class="btn">Edit Details</button>
                        </a>

                        <br><br>
                        <form action="deleteaccount.php" method="post" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
                            <input type="hidden" name="username" value="" id="usernameToDelete"> <!-- Hidden field for username -->
                            <input type="submit" value="Delete Account" class="btn">
                        </form>
                    </div>

                    <div class="cardbox">
                        <h3>Claims Details</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.</p>
                        <a href="../HIVTC_ins/include/claimpage.php"><button class="btn">Add Claim</button></a>
                    </div>
                </div>
                <a href="../HIVTC_ins/include/home.php"><button class="logOut">Log Out</button></a>
            </section>
        </main>
    </div>

    <footer>
    <p><a href="../HIVTC_ins/include/terms.php">Privacy and Policy</a></p>
    <p><a href="../HIVTC_ins/include/FAQ.php">FAQ</a></p>
        <div class="social-icons">
            <img src="../HIVTC_ins/images/instagram.png" alt="Instagram">
            <img src="../HIVTC_ins/images/facebook.png" alt="Facebook">
            <img src="../HIVTC_ins/images/whatsapp.png" alt="WhatsApp">
        </div>
        <p>&copy; 2024 Website. All rights reserved.</p>
    </footer>
</body>
</html>
