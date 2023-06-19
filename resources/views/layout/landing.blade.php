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
  <header id="header" class="header fixed-top d-flex align-items-center header-custom hcolor-custom">

    <i class="bi bi-list toggle-sidebar-btn"></i>

    {{-- logo --}}
    <div class="d-flex align-items-center p-5">
      <a href="/dashboard" class="d-flex logo align-items-center">
        <img class="" src="img/lg.png" alt="">
        <span class="judul p-2">DASHBOARD GURU</span>
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
  <aside id="sidebar" class="sidebar hcolor-custom">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Dashboard") ? 'active' : 'collapsed' }} " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Bagian Data Guru -->
        <li class="nav-item">
          <a class="nav-link 
          {{ ( $title === "Data Guru" || $title === "Jadwal" || $title === "Riwayat & Gaji" || $title === "Data Mapel") ? 'active' : 'collapsed' }} " 
          data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Data Guru</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse dropdown-custom" data-bs-parent="#sidebar-nav">
            <li>
              <a href="/data-guru" class="{{ ( $title === "Data Guru") ? 'active' : '' }}">  
                <i class="bi bi-circle"></i><span>Data Guru</span>
              </a>
            </li>
            <li>
              <a href="/jadwal" class="{{ ( $title === "Jadwal") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Data Jadwal</span>
              </a>
            </li>
            <li>
              <a href="/riwayat-gaji" class="{{ ( $title === "Riwayat & Gaji") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Data Riwayat dan Gaji </span>
              </a>
            </li>
            <li>
              <a href="/mapel" class="{{ ( $title === "Data Mapel") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Data mapel</span>
              </a>
            </li>
          </ul>
        </li>
      <!-- End Data Guru -->
      
      <!-- Bagian Data Siswa -->
        <li class="nav-item">
          <a class="nav-link {{ ( $title === "Data Siswa" || $title === "Data Wali Siswa" || $title === "Pembayaran" || $title === "Data Kelas") ? 'active' : 'collapsed' }}" 
          data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Data Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse dropdown-custom" data-bs-parent="#sidebar-nav">
            <li>
              <a href="/data-siswa" class="{{ ( $title === "Data Siswa") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Data Siswa</span>
              </a>
            </li>
            <li>
              <a href="/data-wali-siswa" class="{{ ( $title === "Data Wali Siswa") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Data Wali Siswa</span>
              </a>
            </li>
          </ul>
        </li>
      <!-- End Data Siswa -->
            
      <!-- Bagian Program Sekolah -->
        <li class="nav-item">
          <a class="nav-link {{ ( $title === "Pengembangan" || $title === "Program Praktikum" || $title === "Program Lomba" || $title === "Kunjungan Industri" ||  $title === "Program Ekskul" ||  $title === "Kerja Sama" ||  $title === "Program Magang") ? 'active' : 'collapsed' }}" 
          data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bar-chart"></i><span>Program Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="charts-nav" class="nav-content collapse dropdown-custom" data-bs-parent="#sidebar-nav">
            <li>
              <a href="/pengembangan" class="{{ ( $title === "Pengembangan") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Pengembangan</span>
              </a>
            </li>
            <li>
              <a href="/program-praktikum" class="{{ ( $title === "Program Praktikum") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Program Praktikum</span>
              </a>
            </li>
            <li>
              <a href="/program-lomba" class="{{ ( $title === "Program Lomba") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Program Lomba</span>
              </a>
            </li>
            <li>
              <a href="/kunjungan-industri" class="{{ ( $title === "Kunjungan Industri") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Kunjungan Industri</span>
              </a>
            </li>
            <li>
              <a href="/program-ekskul" class="{{ ( $title === "Program Ekskul") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Program Ekskul</span>
              </a>
            </li>
            <li>
              <a href="/kerja-sama" class="{{ ( $title === "Kerja Sama") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Program Kerja Sama</span>
              </a>
            </li>
            <li>
              <a href="/program-magang" class="{{ ( $title === "Program Magang") ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Program Magang</span>
              </a>
            </li>
          </ul>
        </li>
      <!-- End Profil Sekolah -->

      <!-- Bagian Profil Sekolah -->
      <li class="nav-item">
        <a class="nav-link {{ ( $title === "Profil Sekolah") ? 'active' : 'collapsed' }}" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profile Sekolah</span>
        </a>
      </li>

      <!-- Bagian Login -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/login-guru">
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