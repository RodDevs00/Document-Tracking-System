
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home |  Document Tracking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/TanauanLogo.jpg" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets4/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets4/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets4/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets4/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets4/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets4/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets4/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets4/img/logo.png" alt=""> -->
        <h1 class="sitename">Document Tracking of Tanauan</h1> <span></span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a class="active">Home</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>Welcome to the Document Tracking of Tanauan</h2>
              <p>This system provides real-time visibility into document status, enhances collaboration, and ensures compliance with regulatory standards. In streamlining the document workflow, a DTS minimizes the risk of lost or misplaced documents, reduces administrative overhead, and improves overall productivity.</p>
              <a class="btn-get-started" href="{{ route('dts') }}" target="_blank">Get Started</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="assets4/img/hero-carousel/hero-carousel-1.jpg" alt="">
        </div>

        <div class="carousel-item active">
          <img src="assets4/img/hero-carousel/hero-carousel-2.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets4/img/hero-carousel/hero-carousel-3.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets4/img/hero-carousel/hero-carousel-4.jpg" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets4/img/hero-carousel/hero-carousel-5.jpg" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->



  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets4/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets4/vendor/php-email-form/validate.js"></script>
  <script src="assets4/vendor/aos/aos.js"></script>
  <script src="assets4/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets4/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets4/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets4/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets4/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets4/js/main.js"></script>

</body>

</html>