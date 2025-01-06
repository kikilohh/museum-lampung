<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>projek</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

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
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Gallery Single</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Gallery Details Section -->
    <section id="gallery-details" class="gallery-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>

        <div class="text-center">
        <img src="{{ asset('asset/assets/img/gallery/IMG_20241031_105658.jpg') }}" 
         style="width: 550px; height: 500px;" 
         alt="Gambar Gallery"> </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>This is an example of portfolio details</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
              <p>
                Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="asset/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>

              <p>
                Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.
              </p>

              <p>
                Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
              </p>

            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> Web design</li>
                <li><strong>Client</strong> ASU Company</li>
                <li><strong>Project date</strong> 01 March, 2020</li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Gallery Details Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="social-links d-flex justify-content-center">
        <a href="https://twitter.com/museumlampung" class="twitter" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/MuseumLampung" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/museumlampung" class="instagram" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
      </div>
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