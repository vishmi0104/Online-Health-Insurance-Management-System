function validateForm() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;


    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false; // 
    }

    // Checking the  password format
    const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/; // At least 8 characters, one number, one lowercase, one uppercase
    if (!passwordPattern.test(password)) {
        alert("Password must be at least 8 characters long, contain at least one number, one lowercase letter, and one uppercase letter.");
        return false; // 
    }
    
    return true; // if all the conditions are true
}


function isvalid() {
var username = document.getElementById('username').value; 
var pass = document.getElementById('password').value; 

if (username === "" && pass === "") {
    alert("Username and password fields are empty!!");
    return false;
} else {
    if (username === "") {
        alert("Username field is empty!!");
        return false;
    }
    if (pass === "") {
        alert("Password field is empty!!");
        return false;
    }
}
return true; 
}