<?php
include './dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Safe Drive - Update Users</title>
    <link rel="stylesheet" href="../frontend/admin/css/addusers.css">
    <link rel="stylesheet" href="../frontend/admin/css/sidebar.css">
    <script src="../frontend/admin/js/updateusers.js" defer></script>
</head>

<body>
    <?php
    include './sidebar.php';

    $name = $dob = $email = $address = $gender = $mnumber = $nic = $isdate = $nationality = $uname = $pwd = '';

    if (isset($_GET['updateusers'])) {
        $id = $_GET['updateusers'];
        $query = "SELECT * FROM `users` WHERE nic = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            $row = mysqli_fetch_assoc($queryRun);
            $name = $row['fullname'];
            $dob = $row['dob'];
            $email = $row['email'];
            $address = $row['address'];
            $gender = $row['gender'];
            $mnumber = $row['mobile'];
            $nic = $row['nic'];
            $isdate = $row['nic_issue_date'];
            $nationality = $row['nationality'];
            // $uname = $row['username'];
            // $pwd = $row['password'] ;
        } else {
            die(mysqli_error($conn));
        }
    }

    if (isset($_POST['submit'])) {
        $id = $_GET['updateusers'];
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $mnumber = $_POST['mnumber'];
        $nic = $_POST['nic'];
        $isdate = $_POST['isdate'];
        $nationality = $_POST['nationality'];
        // $uname = $_POST['uname'];
        // $pwd = $_POST['pwd'];


        $query = "UPDATE `users` SET fullname = '$name', dob = '$dob', email = '$email', address = '$address', gender = '$gender', mobile = '$mnumber', nic = '$nic', nic_issue_date = '$isdate', nationality = '$nationality' WHERE nic = '$id';";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            echo "<script>alert('Successfully updated user details')</script>";
            header('Location: ../frontend/admin/php/show_users.php');
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>

    <div class="content">
        <div class="title">
            <h2>Update Users</h2>
        </div>
        <form action="" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Enter Full Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>" required>

            </div>
            <div class="input-group">
                <label>Enter Date of Birth</label>
                <input type="date" name="dob" value="<?php echo $dob; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter Email</label>
                <input type="text" name="email" id="emailInput" onblur="validateEmail()" value="<?php echo $email; ?>" required>

            </div>
            <div class="input-group">
                <label>Enter Address</label>
                <input type="text" name="address" value="<?php echo $address; ?>" required>

            </div>
            <div class="input-group">
                <label>Enter Gender</label>
                <input type="text" name="gender" value="<?php echo $gender; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter Mobile Number</label>
                <input type="text" name="mnumber" id="phoneInput" onblur="validatePhoneNumber()" value="<?php echo $mnumber; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter NIC</label>
                <input type="text" name="nic"  id="IdInput" onblur="validateIDNumber()"  value="<?php echo $nic; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter NIC Issued Date</label>
                <input type="date" name="isdate" value="<?php echo $isdate; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter Nationality</label>
                <input type="text" name="nationality" value="<?php echo $nationality; ?>" required>
            </div>
            <input type="submit" name="submit" value="Update User" class="btn">
        </form>
    </div>
</body>

</html>