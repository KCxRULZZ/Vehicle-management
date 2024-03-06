<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <?php
    include '../components/header.php'
    ?>

    <div class="main">
    </div>
    <div class="content">
        <h1>Safe Drive<br><span>Vehicle Insurance</span><br>
            <h2>Welcome to our website</h2><br>
        </h1>
        <p class="par">We specialize in providing comprehensive coverage for all types of vehicles,<br>ensuring that you and your prized possession are protected from the unexpected.<br>Explore our policies, get a quote, and secure your journey today!</p>
        <button class="cn"><a href="./feedback.html">Give Feedback</a></button>

        <div class="title">
            <p>Location Map of our Branches</p>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Oh3gCefmMOV2HmJCj8wHC65mgE2Ayws&ehbc=2E312F" width="640" height="480"></iframe>
        </div>

    </div>
    </div>
    <?php
    include '../components/footer.php'
    ?>
</body>

</html>