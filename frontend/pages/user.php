<?php
include '../../backend/dbh.inc.php';
?>
<?php
        include '../components/header.php'
    ?>
<?php
$name = $dob = $email = $address = $gender = $mnumber = $nic = $isdate = $nationality = $uname = '';

//  if (isset($_GET['updateusers'])) {
//      $id = $_GET['updateusers'];
$query = "SELECT * FROM `users` WHERE username = '{$_SESSION['username']}';";
$queryRun = mysqli_query($conn, $query);

if ($queryRun) {
  $row = mysqli_fetch_assoc($queryRun);
  $name1 = $row['fullname'];
  $dob1 = $row['dob'];
  $email1 = $row['email'];
  $address1 = $row['address'];
  $gender1 = $row['gender'];
  $mnumber1 = $row['mobile'];
  $nic1 = $row['nic'];
  $isdate1 = $row['nic_issue_date'];
  $nationality1 = $row['nationality'];
  $uname1 = $row['username'];
  // $pwd = $row['password'] ;
} else {
  die(mysqli_error($conn));
}


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $nic = $_POST['nic'];
  $isdate = $_POST['isdate'];
  $nationality = $_POST['nat'];
  $address = $_POST['add'];
  $email = $_POST['email'];
  $number = $_POST['tel'];
  $gender = $_POST['gender'];

  $query = "UPDATE `users` SET username = '$uname', gender = '$gender' , fullname = '$name', dob = '$dob', email = '$email', address = '$address', mobile = '$number', nic = '$nic', nic_issue_date = '$isdate', nationality = '$nationality' WHERE username = '{$_SESSION['username']}';";
  $queryRun = mysqli_query($conn, $query);

  if ($queryRun) {
    echo "<script>alert('Successfully updated user details')</script>";
    header('Location: ./user.php');
  } else {
    die(mysqli_error($conn));
  }
}

if (isset($_POST['del'])) {
  $query = "DELETE from `users` WHERE username = '{$_SESSION['username']}'";
  $queryRun = mysqli_query($conn, $query);

  if ($queryRun) {
    session_start();
    session_unset();
    session_destroy();
    header('Location: ./login.php');
    exit();
    
  } else {
    die(mysqli_error($conn));
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="user.css">
</head>

<body>

  <div class="box">
    <div class="border">
      <h2>User Profile</h2>
      <form method="post" name="save" action="" enctype="multipart/form-data">
        <div class="imgcontainer">
          <img src="img/user.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label for="uname"><b>User Name</b></label>
          <input type="text" value="<?php echo  $uname1; ?> " name="uname" class="username">

          <label for="name"><b>Full Name</b></label>
          <input type="text" value="<?php echo $name1; ?>" name="name" required>

          <label for="dob"><b>Date of Birth</b></label>
          <input type="date" value="<?php echo $dob1; ?>" name="dob" required>

          <label for="nic"><b>Nation Identity Number</b></label>
          <input type="text" value="<?php echo $nic1; ?>" name="nic" required>

          <label for="isdate"><b>NIC Issued Date</b></label>
          <input type="date" value="<?php echo  $isdate1; ?>" name="isdate" required>

          <label for="nat"><b>Nationality</b></label>
          <input type="text" value="<?php echo  $nationality1; ?>" name="nat" required>

          <label for="add"><b>Address</b></label>
          <input type="text" value="<?php echo $address1; ?>" name="add" required>

          <label for="email"><b>Email</b></label>
          <input type="text" value="<?php echo $email1; ?>" name="email" required>

          <label for="tel"><b>Mobile Number</b></label>
          <input type="text" value="<?php echo $mnumber1; ?>" name="tel" required>


        </div>

        <label class="gender-label">Gender: </label>
        <label class="radio-label"><input type="radio" name="gender" value="Male"<?php if ($gender1 === 'Male') echo 'checked'; ?>> Male</label>
        <label class="radio-label"><input type="radio" name="gender" value="Female" <?php if ($gender1 === 'Female') echo 'checked'; ?>> Female</label>

        <div class="btn-container">
          <button type="submit" name="submit" class="btn1">Update Profile</button>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" name="del" class="btn2" onclick="showPopup()">Deactivate Account</button>

        </div>

      </form>
    </div>
  </div>

  <!-- The pop-up box and blurred background -->
  <div id="popup" class="popup">
    <h3>Confirm Account Deactivation</h3>
    <p>Are you sure you want to deactivate your account?</p>
    <form method="post" name="save" action="" enctype="multipart/form-data">
    <div class="popup-buttons">
    
      <button type="submit" class="btn1" onclick="hidePopup()">Cancel</button>
      <button type="submit" name="del" class="btn2">Confirm</button>
    
    </div></form>
  </div>
  <div id="blur" class="blur"></div>
  <?php
        include '../components/footer.php'
    ?>
  <script>
    function showPopup() {
      document.getElementById("popup").style.display = "block";
      document.getElementById("blur").style.display = "block";
    }

    function hidePopup() {
      document.getElementById("popup").style.display = "none";
      document.getElementById("blur").style.display = "none";
    }
  </script>

</body>

</html>