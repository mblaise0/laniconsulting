
<!-- 
    Project: laniconsulting.ng
    Author: alaid_technologies Ltd.
    Created on: 2024-09-07
    Description: Lani Consulting, based in Nigeria, is a premier consulting firm dedicated to providing innovative and strategic 
    solutions to businesses across diverse industries. As trusted advisors, we specialize in transforming challenges into opportunities,
     driving sustainable growth, and fostering enduring client relationships. .
-->

<?php
session_start();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lani Consulting</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.ico" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">
    <?php include_once './components/Header' ?>
    <section class="section-gap page-header-bg">
        <div class="container">
            <div class="intro" data-aos="zoom-in-up" data-aos-duration="2000">
                <h2 class="text-white fw-bolder">Contact Us</h2>
                <p class="text-white">
                    Need strategic solutions? Our doors are open. Contact us to explore how we can help your business thrive.
                </p>
            </div>
        </div>
    </section>
    <main>

        <section id="contact" class="section-one section">
            <?php include_once './components/Connect' ?>
        </section>


    </main>
    <?php include_once './components/Footer' ?>

    <!-- Vendor JS Files -->
    <!-- <script src="assets/js/jquery-3.1.1.min.js"></script> -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="assets/js/parallax.js"></script> -->


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bg.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
</body>
<?php include_once './components/Modals' ?>

</html>