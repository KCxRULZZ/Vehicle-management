<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <nav>
        <div class="left">
            <h2 class="site_title"><a href="../pages/home.html">SafeDrive</a></h2>
        </div>
        <div class="right">
  
<?php
    if(isset($_SESSION['username'])){
        echo "<Button class='login-button'><a href='../pages/user.php'> Profile </a></Button>";
        echo "<Button class='login-button'><a href='../../backend/dbh.logout.php'> Logout </a></Button>";
    }

    else {
        echo "<Button class='login-button'><a href='../pages/login.php'> Log in </a></Button>";
        echo "<Button class='login-button'><a href='../pages/signup.php'> Signup </a></Button>";
    }
?>

        </div>
    </nav>
</body>

</html>