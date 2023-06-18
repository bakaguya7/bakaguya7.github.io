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
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

{{-- bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<!-- CSS Files -->

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
 <link rel="stylesheet" href="css/style.css">
<!-- END CSS Files -->
</head>

<body>

<!-- ======= BAGIAN HEADER ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <i class="bi bi-list toggle-sidebar-btn"></i>

    {{-- logo --}}
    <div class="d-flex align-items-center p-5">
      <a href="/dashboard" class="d-flex align-items-center">
        <img src="img/lg.png" alt="" width="50px" height="50px">
        <span class="d-none d-lg-block">DASHBOARD GURU</span>
      </a>
    </div>
    {{-- end logo --}}

    <nav class="header-nav ms-auto">
      <div class="search-bar">
        <form class="search-form d-flex" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </nav><!-- End Icons Navigation -->

  </header>
<!-- End HEADER -->

<!-- ======= BAGIAN SIDEBAR ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Bagian Data Guru -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Guru</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/data-guru">
              <i class="bi bi-circle"></i><span>Data Guru</span>
            </a>
          </li>
          <li>
            <a href="/jadwal">
              <i class="bi bi-circle"></i><span>Data Jadwal</span>
            </a>
          </li>
          <li>
            <a href="/riwayat-gaji">
              <i class="bi bi-circle"></i><span>Data Riwayat dan Gaji </span>
            </a>
          </li>
          <li>
            <a href="/mapel">
              <i class="bi bi-circle"></i><span>Data Mapel</span>
            </a>
          </li>
        </ul>
      </li>
      
      <!-- Bagian Data Siswa -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Data Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/data-siswa">
              <i class="bi bi-circle"></i><span>Data Siswa</span>
            </a>
          </li>
          <li>
            <a href="/wali-siswa">
              <i class="bi bi-circle"></i><span>Data Wali Siswa</span>
            </a>
          </li>
          <li>
            <a href="/pembayaran">
              <i class="bi bi-circle"></i><span>Data Pembayaran</span>
            </a>
          </li>
          <li>
            <a href="/data-kelas">
              <i class="bi bi-circle"></i><span>Data Kelas</span>
            </a>
          </li>
        </ul>
      </li>
            
      <!-- Bagian Program Sekolah -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Program Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/pembangunan">
              <i class="bi bi-circle"></i><span>Pembangunan</span>
            </a>
          </li>
          <li>
            <a href="/program-praktikum">
              <i class="bi bi-circle"></i><span>Program Praktikum</span>
            </a>
          </li>
          <li>
            <a href="/program-lomba">
              <i class="bi bi-circle"></i><span>Program Lomba</span>
            </a>
          </li>
          <li>
            <a href="/kunjungan-industri">
              <i class="bi bi-circle"></i><span>Kunjungan Industri</span>
            </a>
          </li>
          <li>
            <a href="/program-ekskul">
              <i class="bi bi-circle"></i><span>Program Ekskul</span>
            </a>
          </li>
          <li>
            <a href="/kerja-sama">
              <i class="bi bi-circle"></i><span>Program Kerja Sama</span>
            </a>
          </li>
          <li>
            <a href="/program-magang">
              <i class="bi bi-circle"></i><span>Program Magang</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- Bagian Profil Sekolah -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <!-- Bagian Login -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/login">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>

    </ul>

  </aside>
<!-- End SIDEBAR-->

<!-- ======= BAGIAN PAGES ======= -->
  <main id="main" class="main">
    @yield('main')
  </main>
<!-- End PAGES -->

<!-- ======= BAGIAN FOOTER ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sobat Baku Hantam</span></strong>. All Rights Reserved
    </div>
  </footer>
<!-- End FOOTER -->

<!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
<!-- END Vendor JS Files -->

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>