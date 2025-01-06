<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>projek</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

  <link href="/asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/asset/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/asset/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/asset/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/asset/assets/css/main.css" rel="stylesheet">
</head>

<body class="services-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Lampung Virtual Tour</h1>
      </a>
      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('index') }}">home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('virtualtour') }}">Virtual Tour</a></li>
        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
   </nav>
      <div class="header-social-links">
        <a href="https://twitter.com/museumlampung" class="twitter" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/MuseumLampung" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/museumlampung" class="instagram" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </header>

  <main class="main">
    
<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Jasa Layanan Museum Lampung</h1>
          <p class="mb-0">Temukan pengalaman tak terlupakan yang menghubungkan Anda dengan sejarah, budaya, dan keindahan Lampung. Kami menawarkan berbagai layanan untuk menjelajahi dan menikmati kekayaan warisan Lampung yang penuh warna. Jadikan kunjungan Anda lebih berarti bersama kami.</p>
          <a href="{{ route('contact') }}" class="cta-btn">Hubungi Kami untuk Info Lebih Lanjut<br></a>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li class="current">Layanan</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a class="stretched-link">Tur Sejarah Lampung</a></h4>
              <p>Ikuti tur bersejarah yang memandu Anda menelusuri kisah dan perkembangan Lampung dari masa ke masa.</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a class="stretched-link">Pameran Budaya Lampung</a></h4>
              <p>Kunjungi pameran yang menampilkan kekayaan seni dan budaya Lampung, dari artefak hingga seni rupa.</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a class="stretched-link">Workshop dan Edukasi</a></h4>
              <p>Ikuti workshop kreatif yang mengajarkan seni tradisional Lampung dan cara melestarikannya.</p>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a class="stretched-link">Pengalaman Virtual Museum</a></h4>
              <p>Jelajahi museum Lampung secara virtual, memberikan pengalaman interaktif yang menyenangkan untuk semua usia.</p>
            </div>
          </div><!-- End Service Item -->
          
        </div>

      </div>

    </section><!-- /Services Section -->
    
<!-- Pricing Section -->
<section id="pricing" class="pricing section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Jam Buka & Harga Tiket</h2>
    <p>Informasi jam buka dan harga tiket masuk Museum Lampung</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 gx-lg-5">

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Tiket Dewasa</h3>
          <h4>Rp5.000</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Tiket Anak-anak</h3>
          <h4>Rp1.000</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Tiket Mahasiswa</h3>
          <h4>Rp2.000</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Jam Buka</h3>
          <h4>Selasa - Jumat: 09:00 - 17:00</h4>
        </div>
      </div><!-- End Pricing Item -->
    </div>
  </div>
</section><!-- /Pricing Section -->
</main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="social-links d-flex justify-content-center">
        <a href="https://twitter.com/museumlampung" class="twitter" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/MuseumLampung" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/museumlampung" class="instagram" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="/asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/asset/assets/vendor/php-email-form/validate.js"></script>
  <script src="/asset/assets/vendor/aos/aos.js"></script>
  <script src="/asset/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/asset/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/asset/assets/js/main.js"></script>
</body>
</html>