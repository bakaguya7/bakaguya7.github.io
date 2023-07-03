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
      <a href="/dashboard-siswa" class="d-flex logo align-items-center">
        <img src="img/lg.png" alt="">
        <span class="judul d-none d-lg-block p-2">DASHBOARD SISWA</span>
      </a>
    </div>
    {{-- end logo --}}


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
        <a class="nav-link {{ ( $title === "Dashboard Siswa") ? 'active' : 'collapsed' }} " href="/siswa">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    <!-- Bagian Profil -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Profil Siswa") ? 'active' : 'collapsed' }}" href="/profil_sis">
          <i class="bi bi-person-circle"></i>
          <span>Profil</span>
        </a>
      </li>
    <!-- END Profil -->

    <!-- Bagian MATERI -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Materi Siswa") ? 'active' : 'collapsed' }}" href="/materi_sis">
          <i class="bi bi-book"></i>
          <span>Materi</span>
        </a>
      </li>
    <!-- END Materi -->

    <!-- Bagian Pembayaran -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Tagihan") ? 'active' : 'collapsed' }}" href="/tagihan">
          <i class="bi bi-cash-coin"></i>
          <span>Tagihan</span>
        </a>
      </li>
    <!-- END Pembayaran -->

    <!-- Bagian Login -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/login-guru">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log Out</span>
        </a>
      </li>
    
    <!-- END Login -->

    </ul>
  </aside>
<!-- End SIDEBAR-->

<!-- ======= BAGIAN PAGES ======= -->
  <main id="main" class="main">
    @yield('siswa')
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