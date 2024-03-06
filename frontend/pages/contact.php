<?php

  include "../../backend/dbh.inc.php";

  if(isset($_POST['submit'])){
    $rnum = $_POST['rnum'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $cont = $_POST['cont'];
    $question = $_POST['question'];
  

  $sql = "INSERT INTO newcontact (rnum, fname, email, cont,question)
           VALUES ('$rnum','$fname', '$email', '$cont', '$question')";

  $result = $conn->query($sql);

//   if($result == TRUE){
//      echo "New record created succesfully";
//   }
//    else{
//     echo "Error: " . $sql . "<br>" . $conn->error;
//    }

   $conn->close();
} 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>IC Contact us</title>
        <link rel="stylesheet" href="../css/contact.css">
       
    </head>
    <body>
        
    <?php
        include '../components/header.php'
    ?>
        <h1 class="main">HELP CENTER</h1>
        <br>
        <br>
       <div class="Ttext">
        <form action=" " method="post" >

            <label for="rnum">Registration Number:</label>
            <input type="text" class="Rnum" name="rnum"><br>
            <label for="fname">Full Name(According to your restration form):</label>
            <input type="text" class="Fname" name="fname"><br>
            <label for="email">Email(According to your restration form):</label>
            <input type="email" class="email" name="email"><br><br>
            <label for="cont">Contact Number:</label>
            <input type="text" class="cont" name="cont" ><br>
            <label for="question">Question:</label>
            <textarea type="text" class="question" name="question" rows="3" placeholder="How can we help you?"> </textarea><br><br><br><br>

            <button type="submit" name="submit">Submit</button>
            <aside class="aside3">
                <br><h4>Get more details</h4>
                <a href="https://www.facebook.com" title="Facebook" ><img src="../images/contact2.jpg" class="media"></a>
                <a href="https://www.intagram.com" title="Instagram" ><img src="../images/contact3.png"  class="media"></a>
                <a href="https://www.twitter.com" title="Twitter" ><img src="../images/contact4.png"  class="media"></a>
                
                </aside>
          </form>
        </div> 
        <?php
        include '../components/footer.php'
    ?>

    </body>
</html>