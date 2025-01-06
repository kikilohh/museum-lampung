<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Projek</title>
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

<body class="about-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1>Lampung Virtual Tour</h1>
      </a>

      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
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

    <!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Tentang Kami</h1>
          <p class="mb-0">
            Museum Lampung adalah lembaga budaya yang didedikasikan untuk melestarikan dan memamerkan warisan sejarah, seni, serta kebudayaan Lampung. 
            Didirikan sebagai upaya untuk menjaga identitas lokal, museum ini menjadi pusat edukasi dan hiburan bagi masyarakat dan wisatawan.
            Dengan berbagai koleksi artefak, seni tradisional, dan dokumentasi sejarah, kami berkomitmen untuk memperkenalkan keindahan dan kekayaan budaya Lampung kepada dunia.
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li class="current">Tentang Kami</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Page Title -->


<!-- About Section -->
<section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center align-items-start">
      <div class="col-lg-7">
        <img src="/asset/assets/img/gallery/IMG_20241031_110443.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-5 content">
        <h2>Sejarah Pendirian Museum Lampung</h2>
        <p class="fst-italic py-3">
          Museum Lampung didirikan pada tahun 1977 untuk melestarikan dan memamerkan warisan budaya serta sejarah provinsi Lampung.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Pendirian:</strong> <span class="span-align">1977</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Lokasi:</strong> <span class="span-align">Bandar Lampung, Indonesia</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Jenis Koleksi:</strong> <span class="span-align">Artefak, Keramik, Patung, dan lebih banyak lagi</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Fungsi:</strong> <span class="span-align">Pelestarian dan Pendidikan Sejarah</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Visi:</strong> <span class="span-align">Menjadi pusat informasi dan pelestarian budaya Lampung</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Kontak:</strong> <span class="span-align">museum@lampung.go.id</span></li>
            </ul>
          </div>
        </div>
        <p class="py-3">
          Museum Lampung didirikan untuk mengedukasi masyarakat mengenai sejarah dan budaya Lampung melalui berbagai koleksi yang mencakup peninggalan zaman prasejarah, kerajaan, hingga era kolonial. Museum ini memiliki berbagai jenis koleksi yang dipamerkan untuk menunjukkan kekayaan budaya daerah Lampung.
        </p>
        <p class="m-0">
          Pendirian Museum Lampung bertujuan untuk memperkenalkan sejarah dan keanekaragaman budaya Lampung kepada masyarakat luas. Melalui berbagai pameran dan program edukasi, museum ini terus berperan dalam melestarikan warisan budaya bagi generasi mendatang.
        </p>
      </div>
    </div>

  </div>

</section><!-- /About Section -->


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimoni Pengunjung</h2>
    <p>Apa kata pengunjung tentang Museum Lampung</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 1
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              "Museum Lampung adalah tempat yang luar biasa untuk mengeksplorasi sejarah dan budaya Lampung. Pameran yang sangat informatif dan interaktif membuat kami lebih memahami warisan daerah ini."
            </p>
            <div class="profile mt-auto">
              <img src="/asset/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Aditya Pratama</h3>
              <h4>Pengunjung</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              "Pengalaman yang sangat mengesankan! Saya sangat terkesan dengan bagaimana museum ini menyajikan cerita sejarah Lampung secara menyeluruh. Cocok untuk keluarga dan anak-anak."
            </p>
            <div class="profile mt-auto">
              <img src="/asset/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Echa</h3>
              <h4>Mahasiswa</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              "Koleksi artefak di Museum Lampung sangat beragam dan menarik. Saya belajar banyak tentang sejarah dan budaya Lampung yang belum saya ketahui sebelumnya."
            </p>
            <div class="profile mt-auto">
              <img src="/asset/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Elizabeth</h3>
              <h4>Wisatawan</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              "Saya mengunjungi Museum Lampung bersama keluarga, dan kami semua terkesan dengan pemandu yang sangat informatif. Tempat ini memberikan pengalaman edukatif yang menyenangkan!"
            </p>
            <div class="profile mt-auto">
              <img src="/asset/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Falih Arya</h3>
              <h4>Karyawan</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              "Museum Lampung menyajikan koleksi yang sangat berharga dan pameran yang sangat terorganisir. Saya sangat merekomendasikan tempat ini bagi siapa saja yang ingin mengenal Lampung lebih dalam."
            </p>
            <div class="profile mt-auto">
              <img src="/asset/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Andi Wijaya</h3>
              <h4>Pengusaha</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->


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