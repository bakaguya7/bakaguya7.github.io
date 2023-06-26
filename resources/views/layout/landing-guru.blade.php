<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-School | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icons title-->
  <link href="img/lg.png" rel="icon">

{{-- bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- CSS Files -->

  <!-- Vendor CSS ICONS  Files -->
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

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
      <a href="/dashboard-guru" class="d-flex logo align-items-center">
        <img src="img/lg.png" alt="">
        <span class="judul d-none d-lg-block p-2">DASHBOARD GURU</span>
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
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Dashboard Guru") ? 'active' : 'collapsed' }} " href="/dashboard-guru">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    <!-- Bagian Data Guru -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Data Guru") ? 'active' : 'collapsed' }}" href="/data-guru">
          <i class="bi bi-menu-button-wide"></i>
          <span>Data Guru</span>
        </a>
      </li>
    <!-- END Data Guru -->

    <!-- Bagian Data Jadwal -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Jadwal") ? 'active' : 'collapsed' }}" href="/jadwal">
          <i class="bi bi-calendar-week"></i>
          <span>Jadwal Mengajar</span>
        </a>
      </li>
    <!-- END Data Jadwal -->

    <!-- Bagian Data Materi -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Materi") ? 'active' : 'collapsed' }}" href="/materi-guru">
          <i class="bi bi-journal-text"></i>
          <span>Materi Pembelajaran</span>
        </a>
      </li>
    <!-- END Data Materi -->

    <!-- Bagian Presensi -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Data Presensi") ? 'active' : 'collapsed' }}" href="/presensi">
          <i class="bi bi-clipboard-check"></i>
          <span>Data Presensi</span>
        </a>
      </li>
    <!-- END Presensi -->

    <!-- Bagian Data Gaji -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Riwayat & Gaji") ? 'active' : 'collapsed' }}" href="/riwayat-gaji">
          <i class="bi bi-cash-coin"></i>
          <span>Riwayat & Gaji</span>
        </a>
      </li>
    <!-- END Data Gaji -->
      
    <!-- Bagian Login -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/login-guru">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>
    <!-- END Login -->
    </ul>
  </aside>
<!-- End SIDEBAR-->

<!-- ======= BAGIAN PAGES ======= -->
  <main id="main" class="main">
    @yield('main')
  </main>
<!-- End PAGES -->

<!-- ======= BAGIAN FOOTER ======= -->
  {{-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sobat Baku Hantam</span></strong>. All Rights Reserved
    </div>
  </footer> --}}
<!-- End FOOTER -->

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>
</html>