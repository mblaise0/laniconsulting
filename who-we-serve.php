<!-- 
    Project: laniconsulting.ng
    Author: alaid_technologies Ltd.
    Created on: 2024-09-07
    Description: Lani Consulting, based in Nigeria, is a premier consulting firm dedicated to providing innovative and strategic 
    solutions to businesses across diverse industries. As trusted advisors, we specialize in transforming challenges into opportunities,
     driving sustainable growth, and fostering enduring client relationships. .
-->

<?php include './assets/functions/modal-links.php'; ?>

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
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/carousel.css" rel="stylesheet">

</head>

<body class="index-page">
  <?php include_once './components/Header' ?>
  <section class="section-gap page-header-bg">
    <div class="container">
      <div class="intro" data-aos="zoom-in-up" data-aos-duration="2000">
        <h2 class="text-white fw-bolder">Who We Serve</h2>
        <p class="text-white">
          We are a leading consulting firm offering a comprehensive range of services including agricultural, human capital,
          financial technology, and sustainability consulting to drive growth and innovation.
        </p>
      </div>
    </div>
  </section>

  <main>
    <section id="who-we-serve" class="section-one section">
      <div class="container section-title" data-aos="fade-up" data-aos-delay="1000">
        <span>Our Audience</span>
        <h2>Our Audience</h2>
        <p class="text-justify">
          LANI Consulting operates across multiple sectors, leveraging its deep expertise and broad footprint to serve a diverse clientele. We deliver solutions tailored to the unique needs of our clients in the public sector, private sector, NGOs, and international development partners.
          Our client-centric approach ensures that we provide high-impact and sustainable solutions in each industry we serve.
        </p>
        <!-- <p class="text-justify d-none d-sm-none d-lg-block d-md-block">
          We offers a comprehensive range of services tailored to meet the evolving needs of organisations across sectors. Our services are designed to help businesses and institutions navigate complex challenges, drive innovation, and foster sustainable growth. Each of our offerings is built upon a foundation of deep industry knowledge,
          best practices, and a commitment to delivering measurable impact.
        </p> -->
      </div>

      <?php include './components/who-we-serve' ?>


    </section>

    <section id="who-we-serve" class="section">
      <div class="container section-title" data-aos="fade-up" data-aos-delay="1000">
        <span>Our Clientele</span>
        <h2>Our Clientele</h2>
        <p class="text-justify">
          At LANI Consulting, we are privileged to partner with a diverse range of clients across the private and public sectors, as well as with development agencies and non-governmental organisations (NGOs).
          Our commitment to delivering exceptional services and driving positive change has earned us the trust of leading organisations worldwide.
        </p>
        <div class="clients-slider swipe mt-5">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-01.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-02.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-03.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-04.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-05.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-06.png" class="img-fluid w-75" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-07.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-08.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-09.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-11.png" class="img-fluidb w-75" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-12.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-13.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-14.png" class="img-fluid w-75" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-15.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-16.png" class="img-fluid w-75" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-17.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-18.png" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>

    </section>


  </main>
  <?php include './components/Footer' ?>

  <!-- Vendor JS Files -->
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/animationCounter.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bg.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <script src="assets/js/carousel.js"></script>
</body>
<?php include './components/Modals' ?>

</html>