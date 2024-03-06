<!DOCTYPE html>
<html lang="en">

<?php
include '../../backend/dbh.inc.php';

?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeDrive - Payment</title>
    <link rel="icon" type="image/png" href="../images/logo.png">
    <link rel="stylesheet" href="../css/styel.css">
    <link rel="stylesheet" href="../css/payment.css">
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
                    <!--  -->
                    <div class="payment-content">
                        <div class="payment-details">
                            <div class="payment">

                                <table>
                                    <tr>
                                        <td>
                                            <h4 style="font-size: 15px;">Payment Details :</h4>
                                        </td>
                                    </tr>
                                </table>
                                <table id="payment-details-class">
                                    <tr>
                                        <td>Full Name:</td>
                                        <td><input type="text" placeholder="First Name"></td>
                                        <td><input type="text" placeholder="Last Name"></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><input type="text" placeholder="test@gmail.com"></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Numbar:</td>
                                        <td><input type="text" placeholder="0770000000"></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><input type="text" placeholder="615, Maradana Road, Colombo 10 Sri Lanka">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount:</td>
                                        <td><input type="text" disabled value="Rs.1000" style="text-align: center;
                                            font-weight: 600;
                                            color: rgb(60, 60, 60);"></td>
                                    </tr>
                                </table>
                                <div class="payment-button">
                                    <input type="submit" value="Pay Now">
                                </div>
                            </div>
                            <div class="vehical-and-loan-details">
                                <div>
                                    <div class="vehical-details">
                                        <table>
                                            <tr>
                                                <td>
                                                    <h4 style="font-size: 15px;">Vehicle Information :</h4>
                                                </td>
                                            </tr>
                                        </table>
                                        <table id="payment-details-class-2">
                                            <tr>
                                                <td>Model:</td>
                                                <td>Sedan</td>

                                            </tr>
                                            <tr>
                                                <td>Year:</td>
                                                <td>2018</td>

                                            </tr>
                                            <tr>
                                                <td>Registration Number:</td>
                                                <td>ABC123</td>
                                            </tr>
                                            <tr>
                                                <td>Make Country:</td>
                                                <td>Germany</td>
                                            </tr>
                                            <tr>
                                                <td>Chassis Number:</td>
                                                <td>WVWZZZ1KZ8W123456</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="loan-details">
                                        <table>
                                            <tr>
                                                <td>
                                                    <h4 style="font-size: 15px;">Insurance Policy Information :</h4>
                                                </td>
                                            </tr>
                                        </table>
                                        <table id="payment-details-class-3">
                                            <tr>
                                                <td>Policy Number:</td>
                                                <td>POL123456</td>
                                            </tr>
                                            <tr>
                                                <td>Coverage Type:</td>
                                                <td>Comprehensive</td>
                                            </tr>
                                            <tr>
                                                <td>Coverage Start Date:</td>
                                                <td> 2023-06-01</td>
                                            </tr>
                                            <tr>
                                                <td>Coverage End Date:</td>
                                                <td>2024-05-31</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
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