<?php
    include "./dbh.inc.php";
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM `newcontact` WHERE id = '$id'";

        $result = $conn->query($sql);

        if ($result === TRUE) {
            header('Location: ../frontend/admin/php/show_contact.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
