<?php
    include "config.php";

    $sql = "SELECT * FROM newcontact";

    $result = $conn-> query($sql);

    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title> view Page </title>
        </head>
        <body>
            <div class="container">
                <h2> CONTACT </h2>
                     <!---->
                <table class="table">
                    <thread>
                        <tr>
                            <th>ID</td>
                            <th>Registration Number</th>
                            <th>Full Name </th>
                            <th>Email</th>
                            <th>Contact Number </th>
                            <th>Question </th>
                            <th>Action </th>
                        </tr>
                        </thread>
                        <tbody>
                            <?php
                               if($result->num_rows>0){
                                   while ($row = $result->fetch_assoc()){


                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['rnum']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['cont']; ?></td>
                                <td><?php echo $row['question']; ?></td>
                                <td>
                                <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                 &nbsp;
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>

                                <?php   }
                               }
                               ?>

                        </tbody>
                </table>    
                </div>

            </body>
            </html>
