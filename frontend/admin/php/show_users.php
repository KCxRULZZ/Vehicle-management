<?php
include '../../../backend/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SafeDrive - User Management</title>
    <link rel="stylesheet" href="../css/show_users.css">
    <style>
        h3 {
            text-align: center;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        /* Styles for the blurred background */
        .blur {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 9998;
        }

        /* Styles for the buttons in the pop-up box */
        .popup-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .btn1 {

            display: block;
            width: 40%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #000000;
            font-weight: bold;
            cursor: pointer;
        }

        .btn2 {

            display: block;
            width: 40%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #fe3939;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>User's information</h2>
        </div>
        <div class="add-btn">
            <button><a href="./addusers.php">Add User</a></button>
        </div>
        <div class="table-data">
            <table border="1">
                <tr>
                    <th>Full Name</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Mobile Number</th>
                    <th>NIC</th>
                    <th>NIC Issued Date</th>
                    <th>Nationality</th>
                    <th>Username</th>
                </tr>

                <?php
                $sql = "SELECT * FROM users;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['nic'];
                        echo "
                                <tr>
                                    <td>" . $row['fullname'] . "</td>
                                    <td>" . $row['dob'] . "</td>
                                    <td>" . $row['email'] . "</td>
                                    <td>" . $row['address'] . "</td>
                                    <td>" . $row['gender'] . "</td>
                                    <td>" . $row['mobile'] . "</td>
                                    <td>" . $row['nic'] . "</td>
                                    <td>" . $row['nic_issue_date'] . "</td>
                                    <td>" . $row['nationality'] . "</td>
                                    <td>" . $row['username'] . "</td>
                                    <td>
                                        <button class='del-btn' onclick='showPopup(\"$id\")'>Delete</button>
                                        <p></p>
                                        <button class='del-btn'><a href='http://localhost/Safedrive/backend/dbh.updateusers.php?updateusers=" . $id . "'>Update</a></button>
                        
                                       
                                    </td>
                                </tr>
                            ";
                    }
                }
                ?>

            </table>
        </div>
    </div>

    <!-- The pop-up box and blurred background -->
    <div id="popup" class="popup">
        <h3>Confirm Account Deletion</h3>
        <p>Are you sure you want to delete ?</p>
        <form method="post" name="deleteForm" action="http://localhost/Safedrive/backend/dbh.deleteusers.php">
            <input type="hidden" name="deleteusers" id="deleteusers" value="">
            <div class="popup-buttons">
                <button type="button" class="btn1" onclick="hidePopup()">Cancel</button>
                <button type="submit" class="btn2"><a href='http://localhost/Safedrive/backend/dbh.deleteusers.php?deleteusers=<?php echo  $id; ?>'>Confirm</a></button>
            </div>
        </form>
    </div>
    <div id="blur" class="blur"></div>

    <script>
        function showPopup(id) {
            document.getElementById("deleteusers").value = id;
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