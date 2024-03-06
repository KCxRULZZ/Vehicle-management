<?php
    include "config.php";

    $rnum = "";
    $fname= "";
    $email= "";
    $cont = "";
    $question = "";
    
    if (isset($_POST['update'])) {
        // Update record
        $id = $_POST['id'];
        $rnum = $_POST['rnum'];
        $fname = $_POST['fname'];
        $email= $_POST['email'];
        $cont = $_POST['cont'];
        $question = $_POST['question'];
       
        $sql = "UPDATE newcontact  SET rnum='$rnum', fname='$fname', email='$email', cont='$cont' WHERE id='$id'";

        $result = $conn->query($sql);
        if ($result == TRUE) {
        echo "New record created Successfully";
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
</head>
<body>
    <h2>User Update Form</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
         Registration Number: <br>
        <input type="text" name="rnum" value="<?php echo isset($rnum) ? $rnum : ''; ?>"><br>
         Full Name: <br>
        <input type="text" name="fname" value="<?php echo isset($fname) ? $fname:''; ?>"><br>
        Email: <br>
        <input type="email" name="email" value="<?php echo isset($email) ? $email: ''; ?>"><br>
         Contact Number: <br>
        <input type="text" name="cont" value="<?php echo isset ($cont) ? $cont: ''; ?>"> <br> <br>
         Question: <br>
        <input type="text" name="question" value="<?php echo isset($question) ? $question:''; ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>

