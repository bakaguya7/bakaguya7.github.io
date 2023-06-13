<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-School | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/lg.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor-home/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor-home/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor-home/aos/aos.css" rel="stylesheet">
  <link href="vendor-home/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor-home/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="css/variables.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/main.css">

</head>

<body>

<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
              <img src="img/lg.png" alt="">
              <H3><span>SMA NEGERI 1 YOGYAKARTA</span></H3>
        </a>
            
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#profil">Profil Sekolah</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Jurusan</a></li>
          <li class="dropdown"><a href="#"><span>Program Sekolah</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Pembangunan</a></li>
              <li><a href="#">Program Praktikum</a></li>
              <li><a href="#">Program Lomba</a></li>
              <li><a href="#">Kunjungan Industri</a></li>
              <li><a href="#">Program Ekskul</a></li>
              <li><a href="#">Program Kerja sama</a></li>
              <li><a href="#">Program Magang</a></li>
            </ul>
          </li>
          <li class="dropdown btn-getstarted"><a href="#login"><span>LOGIN</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/dashboard">Login Sebagai Guru</a></li>
              <li><a href="/login-siswa">Login Sebagai Siswa</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- End Header -->

{{-- MAIN --}}
<main id="main-home">
    @yield('main-home')
</main>
<!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-2" >
            <div class="footer-info">
              <h3>SMA NEGER1 YOGYAKARTA</h3>
              <p>
                Abdul Khoir <br>
                pasar concat, Sleman<br><br>
                <strong>Phone:</strong>###########<br>
                <strong>Email:</strong> khoirkhoir@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#profil">Profil Sekolah</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Jurusan</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Program Sekolah</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#login">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container ">
        <div class="text-center">
          <div class="copyright">
            &copy; Copyright <strong><span>Sobat Baku Hantam</span></strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="vendor-home/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor-home/aos/aos.js"></script>
  <script src="vendor-home/glightbox/js/glightbox.min.js"></script>
  <script src="vendor-home/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor-home/swiper/swiper-bundle.min.js"></script>
  <script src="vendor-home/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main-home.js"></script>

</body>

</html>