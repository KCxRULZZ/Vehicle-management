
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Vehical.css">
</head>
<body>
<?php
        include '../components/header.php'
    ?>
    <div class="box">
        <h2>Vehicle Details</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="container">
                <label for="make"><b>Make</b></label>
                <input type="text" placeholder="Enter Make" name="make" class="input" required>

                <label for="model"><b>Model</b></label>
                <input type="text" placeholder="Enter Model" name="model" class="input" required>

                <label for="year"><b>Year</b></label>
                <input type="text" placeholder="Enter Year" name="year" class="input" required>

                <label for="color"><b>Color</b></label>
                <input type="text" placeholder="Enter Color" name="color" class="input" required>


                <label for="engineNo"><b>Engine No</b></label>
                <input type="text" placeholder="Enter Engine No" name="engineNo" class="input" required>

                <label for="chassisNo"><b>Chassis No</b></label>
                <input type="text" placeholder="Enter Chassis No" name="chassisNo" class="input" required>

                <label for="licensePlateNo"><b>License Plate No</b></label>
                <input type="text" placeholder="Enter License Plate No" name="licensePlateNo" class="input" required>

                <input type="file">

                <input type="submit" value="Submit" name="save" class="btn">
            </div>

        </form>
    </div>
    <?php
        include '../components/footer.php'
    ?>
</body>
</html>
