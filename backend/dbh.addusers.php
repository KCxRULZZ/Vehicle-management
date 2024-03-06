<?php
    include './dbh.inc.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $mnumber = $_POST['mnumber'];
        $nic = $_POST['nic'];
        $isdate = $_POST['isdate'];
        $nationality = $_POST['nationality'];
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];

        require_once './dbh.function.php';

        if (usernameExists($conn, $uname) !== false) {
           
            echo "<script>alert('Username Taken!');</script>";
            // header('Location: ../frontend/admin/php/addusers.php?error=usernametaken');
            exit();
        }
        

        if(emailExists($conn, $email) !== false){
            // header('location: ../frontend/admin/php/addusers.php?error=emailtaken');
            echo "<script>alert('Email Already Exists!');</script>";
        }
     
        addUser($conn, $name, $dob, $email, $address, $gender, $mnumber, $nic, $isdate, $nationality, $uname, $pwd);
    	}
?>