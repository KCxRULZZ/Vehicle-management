<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>SafeDrive - Login</title>
</head>

<body>
    <div class="main-body">
        <a href="#" class="websiteName">
            <h1 style="color: #000; margin-top:100px">Safe Drive</h1>
        </a>
        <div class="form_container">
            <h1>Login</h1>
            <form action="../../backend/login.inc.php" method="post">
            
                <div class="txt_field">
                    <input type="text" name="username">
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="pwd">
                    <label>Password</label>
                </div>
                
                <input type="submit" name="submit" value="Login">
                <div class="signup_link">
                    Not have an Account? <a href="./signup.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom-img">
        <img src="../images/login.png" alt="">
    </div>
</body>

</html>