<?php require_once("common/menu.php"); ?>
<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>

<head>
    <title>Barber Shop Website Design - Easy Tutorials</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script type="text/javascript" src="../backEnd/controls.js"></script>

</head>

<body>
    <div class="testimonial-col">


        <section id="footer">
            <img src="../Barber_Shop_img/footer-img.png" class="footer-img">
            <div class="title-text">
                <p>Contact</p>
                <h1>Visit Shop Today</h1>
            </div>
            <div class="footer-row">
                <div class="footer-left">
                    <h1>Opening Hours</h1>
                    <p><i class="fa fa-clock-o"></i>Monday to Friday - 9am to 9pm</p>
                    <p><i class="fa fa-clock-o"></i>Saturday and Sunday - 8am to 11pm</p>
                </div>
                <div class="footer-right">
                    <h1>Get in Touch</h1>
                    <p>#30 abc Colony, xyz City LB<i class="fa fa-map-marker"></i></p>
                    <p>example@website.com<i class="fa fa-paper-plane"></i></p>
                    <p>+01 123456789<i class="fa fa-phone"></i></p>
                </div>
            </div>
</body>

</html>