<?php
    include '../../../backend/dbh.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Safe Drive - Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebar.css">
   
</head>
<body>

    <div class="sidebar">

        <div class="logo">
            <img src="../images/logo.png">
            <span>Dashboard</span>
        </div>

        <a href="./dashboard.php">Home</a>
        <a href="./show_users.php">User Management</a>
        <a href="./show_contact.php">ContactUS</a>
        <a href="#">#</a>
        <a href="../../../backend/dbh.logout.php" class="lower-left">Logout</a>
    </div>

    <div class="profile">
        <a href="http://www.google.com"><img src="../images/avatar.png"></a>
    </div>

    <?php
        $sql1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck1 = mysqli_num_rows($result1);

        $sql1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck2 = mysqli_num_rows($result1);

        $sql1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck3 = mysqli_num_rows($result1);

        $sql1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck4 = mysqli_num_rows($result1);

        $sql1 = "SELECT * FROM users;";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck5 = mysqli_num_rows($result1);


    echo "
    <div class='content'>
        <div class='title'>
            <h2>Overview</h2>
        </div>

        <div class='card'>
            <div class='card-01'>
                <h3>No of User Accounts</h3>
                <p>" . $resultCheck1 . "</p>
            </div>
            <div class='card-01'>
            <h3>Admin Id</h3>
            <p>" . $_SESSION['username'] . "</p>
        </div>
        <div class='card-01'>
            <h3>Admin Email</h3>
            <p>" . $_SESSION['email'] . "</p>
        </div>
        </div>
        </div>
";

    
    
    ?>

</body>
</html>
