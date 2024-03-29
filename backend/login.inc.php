<?php
     session_start();
include './dbh.inc.php';

// Checking if the form was submitted
// Assuming the user submitted the login form with 'nic' as the username and password
$username = $_POST['username'];
$password = $_POST['pwd'];

// Checking if the username and password match in the 'admin' table
$query = "SELECT * FROM `admin` WHERE admin_username = '$username' AND `admin_password` = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Admin user found with matching username and password
    $adminData = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
    // Store session data for admin
        $_SESSION['name'] = $adminData['admin_name'];
        $_SESSION['username'] = $adminData['admin_username'];
        $_SESSION['email'] = $adminData['admin_email'];

        // Redirect to the admin page 
        
        header('Location: ../frontend/admin/php/dashboard.php');
        exit();
}


// Check if the username and hashed password match in the 'user' table
$query = "SELECT * FROM `users` WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Regular user found with matching username
    $userData = mysqli_fetch_assoc($result);
    $storedHashedPassword = $userData['password'];

    // Verify the hashed password
    if (password_verify($password, $storedHashedPassword)) {
   
        // Password is correct
        // Store session data for user
        $_SESSION['username'] = $userData['username'];
        $_SESSION['name'] = $userData['fullname'];
        $_SESSION['dob'] = $userData['dob'];
        $_SESSION['nic'] = $userData['nic'];
        $_SESSION['isdate'] = $userData['nic_issue_date'];
        $_SESSION['nationality'] = $userData['nationality'];
        $_SESSION['address'] = $userData['address'];
        $_SESSION['email'] = $userData['email'];
        $_SESSION['mobileNumber'] = $userData['mobile'];
        $_SESSION['gender'] = $userData['gender'];
        mysqli_free_result($result);
        mysqli_close($conn);
        // Redirect to the user page
        header('Location: ../frontend/pages/aboutus.php');
        exit();
    }
}

mysqli_close($conn);
echo "Invalid username or password!";
