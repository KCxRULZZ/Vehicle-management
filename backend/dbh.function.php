<?php
    // Inserting Data
    function createUser($conn, $name, $dob, $email, $address, $gender, $mnumber, $nic, $isdate, $nationality, $uname, $pwd, $cpwd){

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $query = "INSERT INTO users(fullname,dob,email,address,gender,mobile,nic,nic_issue_date,nationality,username,password)
         VALUES('$name', '$dob', '$email', '$address', '$gender', '$mnumber', '$nic', '$isdate', '$nationality', '$uname','$hashedPwd')";
        $queryRun = mysqli_query($conn, $query);
        header('location: ../frontend/pages/login.php');
        exit();
    }

    function addUser($conn, $name, $dob, $email, $address, $gender, $mnumber, $nic, $isdate, $nationality, $uname, $pwd){

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(fullname,dob,email,address,gender,mobile,nic,nic_issue_date,nationality,username,password)
         VALUES('$name', '$dob', '$email', '$address', '$gender', '$mnumber', '$nic', '$isdate', '$nationality', '$uname','$hashedPwd')";

        $queryRun = mysqli_query($conn, $query);
        header('location: ../frontend/admin/php/show_users.php');
        exit();
    }

    function updateUser($conn, $name, $dob, $email, $address, $gender, $mnumber, $nic, $isdate, $nationality, $uname, $pwd){

        $query = "UPDATE `user` SET fullname = ' $name', dob = '$dob', email = '$email' , address = '$address', gender = '$gender' , mobile = '$mnumber' , nic = '$nic' , nic_issue_date = '$isdate' , nationality = '$nationality' , username = '$uname' where nic=id";

        $queryRun = mysqli_query($conn, $query);
        header('location: ../frontend/admin/php/show_users.php');
        exit();
    }


    function usernameExists($conn, $uname){
        $sql = "SELECT * FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../frontend/pages/signup.php?error =stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }

    function emailExists($conn, $email){
        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../frontend/pages/signup.php?error=stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
    }

    function loginDataExists($conn, $username, $email){
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header('location: ../php/login.php?error=stmtfailed');
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username,$email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function loginUser($conn, $username, $password){
        $loginDataExists = loginDataExists($conn, $username, $username);

        if($loginDataExists === false){
            header('location: ../php/login.php?error=loginFailed');
            exit();
        }

        $pwdHashed = $loginDataExists["password"];
        $checkPassword = password_verify($password, $pwdHashed);

        if($checkPassword === false){
            header('location: ../php/login.php?error=wrongpassword');
            exit();
        }
        else if($checkPassword === true){
            session_start();
            $_SESSION['userID'] = $loginDataExists['userID'];
            $_SESSION['username'] = $loginDataExists['username'];
            $_SESSION['firstName'] = $loginDataExists['firstName'];
            $_SESSION['lastName'] = $loginDataExists['lastName'];
            $_SESSION['email'] = $loginDataExists['email'];
            $_SESSION['mobileNumber'] = $loginDataExists['mobileNumber'];
            $_SESSION['gender'] = $loginDataExists['gender'];
            header('location: ../index.php');
            exit();
        }
    }
    