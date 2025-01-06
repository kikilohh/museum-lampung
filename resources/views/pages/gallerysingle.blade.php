<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>projek</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/asset/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/asset/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/asset/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/asset/assets/css/main.css" rel="stylesheet">
</head>

<body class="gallery-single-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Lampung Virtual Tour</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index') }}">Home</a></li>
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

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Galleri Tunggal</h1>
              <p class="mb-0">Temukan warisan budaya dan sejarah yang terjaga di setiap sudut. Jelajahi cerita-cerita masa lampau, artefak unik, dan karya seni yang menginspirasi perjalanan kita menuju masa depan.</p>
            </div>
          </div>
        </div>
      </div>  
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route ('index') }}">Home</a></li>
            <li class="current">Gallery Single</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Gallery Details Section -->
    <section id="gallery-details" class="gallery-details section">
      <div class="container" data-aos="fade-up">

        <div class="text-center">
          <img src="{{ asset('asset/assets/img/gallery/WhatsApp Image 2024-11-18 at 14.24.34_861cda3a.jpg') }}" 
            style="width: 550px; height: 500px;" 
            alt="Gambar Gallery">
        </div>

        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>talo balak</h2>
              <p>
              Talo Balak adalah  <strong> simbol kekayaan budaya </strong>dan tradisi masyarakat Lampung. Alat musik ini tidak hanya berfungsi sebagai pengiring musik, tetapi juga sebagai penjaga nilai-nilai luhur dan identitas etnis. Melestarikan Talo Balak berarti menjaga warisan budaya yang berharga dan memastikan bahwa tradisi ini tetap hidup dan dihormati oleh generasi mendatang.
              </p>
              <h2>Desain dan struktur</h2>
              <p>
              Talo Balak memiliki ukuran yang cukup besar dengan panjang sekitar 1 meter dan diameter mencapai 30 cm. Alat musik ini terbuat dari kayu yang dilubangi dan dilapisi dengan kulit hewan, biasanya kulit kambing, di kedua sisinya. Kayu yang digunakan biasanya adalah kayu nangka atau kayu cempedak, yang dikenal memiliki kualitas baik dan mampu menghasilkan suara yang kuat dan jelas.
              </p>
              <h2>cara memainkan</h2>
              <p>
              Untuk memainkan Talo Balak, pemain menggunakan kedua tangan dengan teknik khusus. Bagian tengah dan tepi kulit gendang dipukul secara bergantian untuk menghasilkan berbagai nada dan ritme. Pemain yang terampil mampu menciptakan variasi bunyi yang kompleks, sesuai dengan kebutuhan musik atau upacara yang sedang berlangsung.
              </p>
              <h2>Pelestarian dan pembangunan</h2>
              <p>
              Meskipun banyak alat musik modern yang mulai mendominasi, Talo Balak tetap dijaga kelestariannya oleh masyarakat Lampung. Berbagai upaya dilakukan untuk memperkenalkan dan mengajarkan cara memainkan Talo Balak kepada generasi muda, melalui sekolah-sekolah dan komunitas budaya. Festival dan pertunjukan seni juga sering menampilkan Talo Balak untuk memastikan alat musik ini tetap dikenal dan dihargai.
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project Information</h3>
              <ul>
                <li><strong>Category:</strong> Alat Musik Tradisional</li>
                <li><strong>Region:</strong> Lampung, Indonesia</li>
                <li><strong>Project Date:</strong> 18 November, 2024</li>
                <li><strong>Lokasi:</strong> Museum Lampung</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>
<!-- /Gallery Details Section -->

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
