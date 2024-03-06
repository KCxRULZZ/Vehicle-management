<?php
include '../../../backend/dbh.inc.php';
session_start();
?>

<?php
include "../../../backend/dbh.inc.php";

$sql = "SELECT * FROM newcontact";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SafeDrive - User Management</title>
    <!-- <link rel="stylesheet" href="../css/contact.css"> -->
    <link rel="stylesheet" href="../css/show_users.css">
</head>

<body>
    <?php
    include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Contact Us</h2>
        </div>

        <div class="table-data">
            <table border="1">
            
                    <tr>
                        <th>ID</td>
                        <th>Registration Number</th>
                        <th>Full Name </th>
                        <th>Email</th>
                        <th>Contact Number </th>
                        <th>Question </th>
                        <th>Action </th>
                    </tr>
                
              
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {


                            echo "
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['rnum']."</td>
                                <td>".$row['fname']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['cont']."</td>
                                <td>".$row['question']."</td>
                                <td>
                                    <button class='del-btn'><a href='./update.php?id=".$row['id']."'>Edit</a></button>
                                    &nbsp;&nbsp;
                                    <button class='del-btn'><a href='../../../backend/delete.php?id=".$row['id']."'>Delete</a></button>
                                </td>
                            </tr>
                        ";
                        
                        }
                    }
                    ?> 
            </table>
            </div>
        </div>


</body>

</html>