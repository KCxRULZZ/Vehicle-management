<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeDrive - claims</title>
    <link rel="icon" type="image/png" href="../images/logo.png">
    <link rel="stylesheet" href="../css/styel.css">
    <link rel="stylesheet" href="../css/claims.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- mobile menu -->
        <?php
        include '../components/menu.php';
        ?>

        <div class="content">
            <!-- navigation -->
         <?php
        include '../components/header.php'
    ?>
            <!-- web page content -->
            <section>
                <div class="box">
                    <div class="claims-content">
                        <table class="claim-content-table claim-content-table-1">
                            <tr>
                                <td>
                                    <h5 style="font-size: 15px;">Owner Name :</h5>
                                </td>
                                <td>
                                    <input type="text" placeholder="First Name">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                                <td>
                                    <input type="text" placeholder="Last Name">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 style="font-size: 15px;">Register Number :</h5>
                                </td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 style="font-size: 15px;">Vehicle Number :</h5>
                                </td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 style="font-size: 15px;">Which state is your vehicle registered Number:</h5>
                                </td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 style="font-size: 15px;">Where did you park your car :</h5>
                                </td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>

                            <tr>
                                <td id="claim-detail-title">
                                    <h5 style="font-size: 15px;">Claim Details :</h5>
                                </td>
                            </tr>
                        </table>
                        <table class="claim-detail-table claim-detail-table-1">
                            <tr>
                                <td>Bodily Injury Liability :</td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>

                                <td>Personal Injury Protection :</td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Property Damage Liability :</td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>

                                <td>Comprehensive :</td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Amount :</td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                        </table>

                        <table class="claim-detail-table claim-detail-table-2">
                            <tr>
                                <td>
                                    <h5 style="font-size: 15px;">Claim Details :</h5>
                                </td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                                <td>
                                    <h5 style="font-size: 15px;">Damage Amount :</h5>
                                </td>
                                <td>
                                    <input type="text">
                                    <p class="error-message">Please enter first name</p>
                                </td>
                            </tr>
                        </table>
                        <div class="submit-button">
                            <input type="submit">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- footer -->
        <?php
        include '../components/footer.php';
        ?>
    </div>
</body>
<script src="../js/script.js"></script>

</html>