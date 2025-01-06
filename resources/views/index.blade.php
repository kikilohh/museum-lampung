<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index</title>
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

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Lampung Virtual Tour</h1>
      </a>

      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('virtualtour') }}">Virtual Tour</a></li>
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

  <!-- Hero Section -->
  <section id="hero" class="hero section">
   <div class="container"> 
     <div class="row justify-content-center">
       <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
         <h2><span>Selamat</span><span> Datang</span> di<span> Website Resmi Museum Lampung</span></h2>
         <p>Nikmati perjalanan menelusuri sejarah, budaya, dan keindahan Lampung melalui koleksi dan informasi yang kami sajikan. Temukan warisan leluhur yang kaya, belajar dari masa lalu, dan inspirasi masa depan Anda bersama kami.</p>
       </div>
     </div>
   </div>
</section>
<!-- /Hero Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">

        <div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.34_861cda3a.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'WhatsApp Image 2024-11-18 at 14.24.34_861cda3a.jpg']) }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
<!-- End Gallery Item -->

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.39_290a60b9.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'WhatsApp Image 2024-11-18 at 14.24.39_290a60b9.jpg']) }}" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle2') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
<!-- End Gallery Item -->

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.42_77616365.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'WhatsApp Image 2024-11-18 at 14.24.42_77616365.jpg']) }}" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle3') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
<!-- End Gallery Item -->

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.49_516dd64f.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'WhatsApp Image 2024-11-18 at 14.24.49_516dd64f.jpg']) }}" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle4') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
<!-- End Gallery Item -->

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.54_4c0c2fa2.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'WhatsApp Image 2024-11-18 at 14.24.54_4c0c2fa2.jpg']) }}" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle5') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
<!-- End Gallery Item -->

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.56_521636b7.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'WhatsApp Image 2024-11-18 at 14.24.56_521636b7.jpg']) }}" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle6') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
<!-- End Gallery Item -->

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.58_573b37de.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'WhatsApp Image 2024-11-18 at 14.24.58_573b37de.jpg']) }}" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle7') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
<!-- End Gallery Item -->

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="gallery-item h-100">
        <img src="{{ asset('asset/assets/img/gallery/IMG_20241031_105658.jpg') }}" class="img-fluid" alt="">
        <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ route('gallery.image', ['image' => 'IMG_20241031_105658.jpg']) }}" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            <a href="{{ route('gallerysingle8') }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>
    </div>
      </div>
       </section>
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
  <script src="/asset/asset/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/asset/asset/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/asset/assets/js/main.js"></script>
</body>
</html>