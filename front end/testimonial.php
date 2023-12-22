<?php require_once("common/menu.php"); ?>
<?php
session_start();
if (!isset($_SESSION["username"])) {
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
    <section id="testimonial">

        <div class="title-text">
            <p>Testimonial</p>
            <h1>What Client Says</h1>
        </div>

        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="../Barber_Shop_img/img-1.jpg">
                    <div class="user-info">
                        <h4>John Nolan
                            <i class="fa fa-twitter"></i>
                        </h4>
                        <small>@johnnolan</small>
                    </div>
                </div>
                <p>"Having tried several barbershops in the area, I can confidently say that this one stands out from the rest. The skilled staff not only delivers top-notch haircuts but also creates a welcoming environment. The online pre-booking system makes it a breeze to schedule appointments, ensuring I never miss a chance to enjoy their excellent service.</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="../Barber_Shop_img/man.png">
                    <div class="user-info">
                        <h4>Jack Doe
                            <i class="fa fa-twitter"></i>
                        </h4>
                        <small>@jackdoe</small>
                    </div>
                </div>
                <p>I've been a loyal customer for years, and this barber shop never disappoints. The expertise of the barbers is evident in every cut—they truly understand the art of grooming. The attention to customer satisfaction, combined with the reasonable pricing, makes it my go-to place for a consistently great experience.</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="../Barber_Shop_img/img-3.jpg">
                    <div class="user-info">
                        <h4>Tim Bradford
                            <i class="fa fa-twitter"></i>
                        </h4>
                        <small>@timbradford</small>
                    </div>
                </div>
                <p>I stumbled upon this hidden gem of a barber shop, and it's been a game-changer for my grooming routine. The experienced barbers here have a keen eye for detail and always leave me looking sharp. The atmosphere is friendly, and the affordable prices are the icing on the cake!</p>
            </div>
        </div>
    </section>
</body>

</html>