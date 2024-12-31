<!-- 
    Project: laniconsulting.ng
    Author: alaid_technologies Ltd.
    Created on: 2024-09-07
    Description: Lani Consulting, based in Nigeria, is a premier consulting firm dedicated to providing innovative and strategic 
    solutions to businesses across diverse industries. As trusted advisors, we specialize in transforming challenges into opportunities,
     driving sustainable growth, and fostering enduring client relationships. .
-->

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
    <link href="assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> -->
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
                <h2 class="text-white fw-bolder">People</h2>
                <p class="text-white">
                    We are a leading consulting firm offering a comprehensive range of services including agricultural, human capital,
                    financial technology, and sustainability consulting to drive growth and innovation.
                </p>
            </div>
        </div>
    </section>
    <main>

        <section id="about" class="intro section">

            <?php include './components/About' ?>

        </section>

        <!-- <section id="team" class="section-one section">
            <div class="container section-title" data-aos="fade-up" data-aos-duration="1000">
                <span>Meet Our Team</span>
                <h2>Meet Our Team</h2>
                <p class="text-justify">
                    LANI Consulting’s team is composed of experienced professionals from diverse sectors. Our consultants bring unparalleled expertise, industry insights, and a hands-on approach to each project.
                    Together, we foster an environment of continuous learning and collaboration, encouraging our team to lead, inspire, and innovate​
                </p>
            </div>

        </section> -->


        <section id="how-we-work" class="how-we-work section dark-background">

            <img src="assets/img/New/how-we-work.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="600">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h2 class="cs-secondary">How we Work</h2>
                            <p class="text-justify">Our methodology is underpinned by cross-functional collaboration across teams and projects. We adopt agile principles that ensure adaptive solutions and continuous improvement.
                                Our Project Management Office (PMO) oversees the implementation of global best practices, ensuring every project is delivered efficiently.
                                From needs assessment to execution and evaluation, we embed accountability and precision at every stage​
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div id="companyFacts" class="section" data-aos="fade-up" data-aos-duration="700">
            <div class="fullWidth eight columns">
                <div class="companySummary">
                    <div class="item wow fadeInUpBig animated animated" data-number="3" style="visibility: visible;">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="row">
                            <div class="col" style="margin-right:-302px">
                                <p id="number1" class="number">50</p>
                            </div>
                            <div class="col">
                                <div class="text-white h4">+</div>
                            </div>
                        </div>
                        <span></span>
                        <p>HAPPY CLIENTS</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="10" style="visibility: visible;">
                        <i class="bi bi-journal-richtext"></i>
                        <p id="number2" class="number">35</p>
                        <span></span>
                        <p>PROJECTS</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="20" style="visibility: visible;">
                        <i class="bi bi-clock"></i>
                        <p id="number3" class="number">15</p>
                        <span></span>
                        <p>YEARS OF EXPERIENCE</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="200" style="visibility: visible;">
                        <i class="bi bi-award"></i>
                        <p id="number4" class="number">10</p>
                        <span></span>
                        <p>AWARDS</p>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <?php include_once './components/Footer' ?>

    <!-- Vendor JS Files -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="assets/js/parallax.js"></script> -->


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
</body>
<?php include_once './components/Modals' ?>

</html>