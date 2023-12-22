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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script type="text/javascript" src="../backEnd/controls.js"></script>

</head>

<body>
    <section id="banner">
        <img src="../Barber_Shop_img/logo.png" class="logo">
        <div class="banner-text">
            <h1>Hair Studio</h1>
            <p>Style Your Hair is Style Your Life </p>
            <div class="banner-btn">
                <a href="services.php"><span> </span>Find Out</a>
                <a href="#feature"><span></span>Read More</a>
            </div>
    </section>



    <section id="feature">
        <div class="title-text">
            <p>Features</p>
            <h1>Why Choose Us</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p>
                            With a seasoned background in the art of barbering, our experienced staff brings a wealth of expertise to the chair, ensuring each client receives a tailored and refined grooming experience.
                        </p>
                    </div>
                </div>

                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="feature-text">
                        <p>
                            Schedule your appointments effortlessly from the comfort of your device, ensuring you receive personalized attention at a time that suits your busy lifestyle.
                        </p>
                    </div>
                </div>

                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-money-bill"></i>
                    </div>
                    <div class="feature-text">
                        <p>
                            We believe that everyone deserves to look and feel their best, and our pricing reflects our dedication to making exceptional grooming accessible to all.
                        </p>
                    </div>
                </div>

            </div>
            <div class="features-img">
                <img src="../Barber_Shop_img/barber-man.jpg">
            </div>
        </div>
    </section>

    <div class="social-links">
        <div class="feature-icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-whatsapp-square"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter-square"></i>
        </div>
        <p>Copyright CSC 443 </p>
    </div>

    </section>


</body>

</html>