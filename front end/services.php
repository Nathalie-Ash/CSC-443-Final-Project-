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
    <section id="service">
   
        <div class="title-text">
            <p>Services</p>
            <h1>We provide Better</h1>
            <h4 style="padding-top: 20px;">
        Click on our services to book an online appointmnet at your own convenience.
</h4>
        </div>
        
        <div class="service-box">
            <a href="prices.php" class="single-service">
                <img src="../Barber_Shop_img/pic-1.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Hair Styling</h3>
                    <hr>
                    <p>Elevate your hairstyle with our expert styling techniques.</p>
                </div>
            </a>
            <a href="prices.php" class="single-service">
                <img src="../Barber_Shop_img/pic-2.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Beard Trimming</h3>
                    <hr>
                    <p>Crafting sharp and refined beards for a distinguished appearance.</p>
                </div>
            </a>

            <a href="prices.php" class="single-service">
                <img src="../Barber_Shop_img/pic-3.jpg">
                <div class="overlay"> </div>
                <div class="service-desc">
                    <h3>Hair Cut</h3>
                    <hr>
                    <p>Transform your look with precision cuts tailored to your style.</p>
                </div>
            </a>
            <a href="prices.php" class="single-service">
                <img src="../Barber_Shop_img/pic-4.jpg">
                <div class="overlay"> </div>
                <div class="service-desc">
                    <h3>Dry Shampoo</h3>
                    <hr>
                    <p>Revitalize your hair on the go with our refreshing dry shampoo service.</p>
                </div>
            </a>
        </div>
    </section>
</body>

</html>