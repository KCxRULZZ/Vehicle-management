<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeDrive - Our Branches</title>
    <link rel="icon" type="image/png" href="../images/logo.png">
    <link rel="stylesheet" href="../css/styel.css">
    <link rel="stylesheet" href="../css/branchers.css">
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
                    <div class="head-branche-and-map">
                        <!-- branchers -->
                        <div class="head-branche">

                            <?php
                            // Array of items
                            $branchesName = array(
                                'Head office Colombo',
                                'Malabe',
                                'Gampaha',
                                'Kandy',
                                'Rathnapura',
                                'Anuradhapura',
                                'Trincomale',
                                'Badulla',
                                'Galle',
                                'Mathara'
                            );

                            $branchesAddrass = array(
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka',
                                '615, Maradana Road,</br> Colombo 10 </br> Sri Lanka'
                            );

                            $branchesTelNo = array(
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5',
                                '11-5882800-5'
                            );

                            $branchesLocation = array(
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106573.97459934118!2d79.76878864875965!3d6.94080892831655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25942e62b607b%3A0x248d2865a4feb022!2sLOLC%20Finance!5e0!3m2!1sen!2slk!4v1686452777675!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63353.844277806274!2d80.02135886138493!3d7.054412353389506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fe00d804e4bf%3A0xa354ce048f0154f7!2z4Lav4LeS4Laa4LeK4Laa4Lax4LeK4LavIOC3hOC2guC2r-C3kuC2ug!5e0!3m2!1sen!2slk!4v1686473073497!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                                'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.07936518722!2d79.9448325361384!3d6.904362812918352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1686473266201!5m2!1sen!2slk',
                            );

                            // Loop through the items and generate the list
                            for ($i = 0; $i < count($branchesName); $i++) {
                                echo ' 
                                <div class="branchers" id="branche-' . $i . '">
                                <div class="branchers-image">
                                    <img src="../images/branches/1.jpg" alt="branche-1">
                                </div>
                                <div class="branchers-details">
                                    <div>
                                        <h4>' . $branchesName[$i] . '</h4>
                                        <p>' . $branchesAddrass[$i] . '</p>
                                        <div class="branchers-phone">
                                            <h4>Phone:</h4>&nbsp;
                                            <a href="tel:+94' . $branchesTelNo[$i] . '">0' . $branchesTelNo[$i] . '</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                            }

                            ?>

                        </div>
                        <!-- map -->
                        <div class="branche-map">
                            <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
                        </div>
                        <?php
                        for ($i = 0; $i < count($branchesLocation); $i++) {
                            echo ' 
                                    
                                <script>

                                    document.getElementById("map").src="' . $branchesLocation[0] . '";

                                    var branche' . $i . ' = document.getElementById("branche-' . $i . '");

                                    branche' . $i . '.addEventListener("mouseover", function(){
                                        document.getElementById("map").src="' . $branchesLocation[$i] . '";
                                    });

                                </script>
                                
                                ';
                        }
                        ?>
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