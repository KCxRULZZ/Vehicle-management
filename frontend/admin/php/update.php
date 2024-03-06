<?php
include "../../../backend/dbh.inc.php";
// include './sidebar.php';

$rnum = "";
$fname = "";
$email = "";
$cont = "";
$question = "";

if (isset($_POST['submit'])) {
    // Update record
    $id1 = $_POST['id'];
    $rnum1 = $_POST['rnum'];
    $fname1 = $_POST['fname'];
    $email1 = $_POST['email'];
    $cont1 = $_POST['cont'];
    $question1 = $_POST['question'];

    $sql = "UPDATE `newcontact` SET rnum='$rnum1', fname='$fname1', email='$email1', cont='$cont1', question='$question1' WHERE id='$id1'";

    $result = $conn->query($sql);
    if ($result === TRUE) {
        header('Location: ./show_contact.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    // Fetch record for update
    $id = $_GET['id'];

    $sql = "SELECT * FROM newcontact WHERE id='$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rnum = $row['rnum'];
            $fname = $row['fname'];
            $email = $row['email'];
            $cont = $row['cont'];
            $question = $row['question'];
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Update Form</title>
    <link rel="stylesheet" href="../css/addusers.css">
    <link rel="stylesheet" href="../css/sidebar.css">
</head>

<body>
    <div class="content">
        <div class="title">
            <h2>Update Users</h2>
        </div>
        <form action="" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Enter Full Name</label>
                <input type="text" name="rnum" value="<?php echo $rnum; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter Date of Birth</label>
                <input type="text" name="fname" value="<?php echo $fname; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter Email</label>
                <input type="text" name="email" id="emailInput" onblur="validateEmail()" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter Address</label>
                <input type="text" name="cont" value="<?php echo $cont; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter Gender</label>
                <input type="text" name="question" value="<?php echo $question; ?>" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update User" class="btn">
        </form>
    </div>
</body>

</html>
