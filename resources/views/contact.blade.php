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

<body class="contact-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Lampung Virtual Tour</h1>
      </a>

      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('about') }}">about</a></li>
        <li><a href="{{ route('virtualtour') }}">Virtual Tour</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('contact') }}"class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
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
          <h1>Hubungi Kami</h1>
          <p class="mb-0">Kami siap membantu! Apakah Anda memiliki pertanyaan, masukan, atau sekadar ingin menyapa? Kami senang mendengarnya. Tim kami siap memberikan bantuan dan informasi yang Anda butuhkan agar Anda mendapatkan pengalaman terbaik. Jangan ragu untuk menghubungi kami!</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li class="current">Hubungi Kami</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Page Title -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.292852693059!2d105.24091779999999!3d-5.3722347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dab5d8b8ddfb%3A0xb2235987d49dad2f!2sMuseum%20Lampung!5e0!3m2!1sid!2sid!4v1731922062820!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Location</h3>
                  <p> Jl. ZA. Pagar Alam No.64, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call</h3>
                  <p>0721-783688</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>museumlpg@gmail.com</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

          </div>
        </div>

        <form action="{{ route('comment.store') }}" method="POST" data-aos="fade-up" data-aos-delay="300">
    @csrf
    <div class="row gy-4">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
        </div>
        <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-dark btn-lg">Send Message</button>
      </div>
    </div>
  </form>
    </div>
    </form>
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
  <script src="/asset/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/asset/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/asset/assets/js/main.js"></script>
  <script src="validate.js"></script>
  <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
</body> 
</html>