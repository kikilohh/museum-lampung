<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Virtual Tour - Lampung Virtual Tour</title>
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


<body class="contact-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Lampung Virtual Tour</h1>
      </a>

      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('index') }}">home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('virtualtour') }}" class="{{ request()->routeIs('virtualtour') ? 'active' : '' }}">virtual tour</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
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
    <div class="container text-center">
          <h1>Virtual Tour & Museum</h1>
          <p class="mb-0">Jelajahi keindahan alam, budaya, dan warisan Lampung melalui tur virtual interaktif dan museum kami.</p>
          </div>
        </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{route ('index') }}">Home</a></li>
            <li class="current">Virtual Tour & Museum</li>
          </ol>
        </div>
      </nav>
    </div>

   <!-- Virtual Museum Section -->
<section id="virtual-museum" class="virtual-museum section">
  <div class="container-lg pt-5">
    <div class="row">
      
      <!-- Card 1 -->
      <div class="col-md-4 mb-5">
        <div class="card text-center">
          <div class="card-body">
            <h2 class="card-title">Area Lantai 1 Kiri</h2>
            <iframe src="https://momento360.com/e/u/6b1a1b97c9914644b60fd812d5ebc8f1?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true" frameborder="0" class="virtual-tour-frame"></iframe>
          </div>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="col-md-4 mb-5">
        <div class="card text-center">
          <div class="card-body">
            <h2 class="card-title">Area Lantai 1 Kanan</h2>
            <iframe src="https://momento360.com/e/u/9bc97d6d27184aad990de208b5ee1020?utm_campaign=embed&utm_source=other&heading=-117.2&pitch=-14.9&field-of-view=75&size=medium&display-plan=true" frameborder="0" class="virtual-tour-frame"></iframe>
          </div>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="col-md-4 mb-5">
        <div class="card text-center">
          <div class="card-body">
            <h2 class="card-title">Area Lantai 2 Kanan</h2>
            <iframe src="https://momento360.com/e/u/a060c6e0792a4c88b81a5c52fc754cee?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true" frameborder="0" class="virtual-tour-frame"></iframe>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4 mb-5">
        <div class="card text-center">
          <div class="card-body">
            <h2 class="card-title">Area Lantai 2 Kiri</h2>
            <iframe src="https://momento360.com/e/u/b8b98bccbf694bf79d0e05c50b131177?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true" frameborder="0" class="virtual-tour-frame"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .virtual-tour-frame {
    width: 100%;
    height: 300px;
    border-radius: 10px;
    border: none;
  }
  .card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s;
    background-color: #9A7E6F; 
    color: #fff; 
  }
  .card:hover {
    transform: scale(1.05);
  }
  .card-title {
    font-size: 1.5rem;
    margin-bottom: 1rem; 
  }
</style>


  <!-- Footer -->
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
  <script src="/asset/assets/vendor/aos/aos.js"></script>
  <script src="/asset/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/asset/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/asset/assets/js/main.js"></script>
</body>
</html>
