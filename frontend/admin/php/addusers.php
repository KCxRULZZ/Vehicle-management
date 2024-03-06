<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SafeDrive - Dashboard</title>
    <link rel="stylesheet" href="../css/addusers.css">
    <script src="../js/addusers.js" defer></script>
</head>

<body>

    <?php
    include './sidebar.php';
    ?>

    <div class="content">
        <div class="title">
            <h2>Add Users</h2>
        </div>
        <form action="../../../backend/dbh.addusers.php" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Enter Full Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="input-group">
                <label>Enter Date of Birth</label>
                <input type="date" name="dob" placeholder="YYYY-MM-DD" required>
            </div>
            <div class="input-group">
                <label>Enter Email</label>
                <input type="text" name="email" id="emailInput" onblur="validateEmail()" required>
            </div>
            <div class="input-group">
                <label>Enter Address</label>
                <input type="text" name="address" required>
            </div>
            <div class="input-group">
                <label>Enter Gender</label>
                <select name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="input-group">
                <label>Enter Mobile Number</label>
                <input type="text" name="mnumber" placeholder="07xxxxxxx" id="phoneInput" onblur="validatePhoneNumber()" required>
            </div>
            <div class="input-group">
                <label>Enter NIC</label>
                <input type="text" name="nic" id="IdInput" onblur="validateIDNumber()" required>
            </div>
            <div class="input-group">
                <label>Enter NIC Issued Date</label>
                <input type="date" name="isdate" placeholder="YYYY-MM-DD" required>
            </div>
            <div class="input-group">
                <label>Enter Nationality</label>
                <select name="nationality" placeholder="eg. Sri Lankan" required>
                    <option value="" disabled selected>Select your nationality</option>
                    <option value="afghan">Afghanistan</option>
                    <option value="bangladeshi">Bangladesh</option>
                    <option value="bhutanese">Bhutan</option>
                    <option value="indian">India</option>
                    <option value="maldivian">Maldives</option>
                    <option value="nepali">Nepal</option>
                    <option value="pakistani">Pakistan</option>
                    <option value="sri_lankan">Sri Lanka</option>
                </select>
            </div>
            <div class="input-group">
                <label>Enter Username</label>
                <input type="text" name="uname">
            </div>
            <div class="input-group">
                <label>Enter Password</label>
                <input type="text" name="pwd" id="password">
                <span id="passwordIcon"></span>
            </div>
            <input type="submit" name="submit" value="Add user" class="btn">
        </form>

    </div>

</body>

</html>
