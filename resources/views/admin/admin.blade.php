<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>E-School</title>

  <title>E-School </title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <
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
      <a href="/admin" class="d-flex align-items-center">
        {{-- <img class="" src="img/lg.png" alt="" width="50px" height="50px"> --}}
        <span class="p-2 text-white">DASHBOARD ADMIN</span>
      </a>
    </div>
    {{-- end logo --}}

  </header>
<!-- End HEADER -->

<!-- ======= BAGIAN SIDEBAR ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      {{-- HOME --}}
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li>

        <!-- Bagian Dashboard -->
      <li class="nav-item">
        <a class="nav-link " href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Bagian Profil Sekolah -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Register Siswa dan Guru</span>
        </a>
      </li> -->

      {{-- Data siswa dan guru --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i>
            <span>Data Siswa dan Guru</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav2" class="nav-content collapse dropdown-custom " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/data-siswa" >
              <i class="bi bi-circle"></i><span>Data Siswa</span>
            </a>
          </li>
          <li>
            <a href="/data-guru" >
              <i class="bi bi-circle"></i><span>Data Guru</span>
            </a>
          </li>
        </ul>
      </li>

      {{-- register siswa dan guru --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i>
            <span>Register Siswa dan Guru</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/register-siswa">
              <i class="bi bi-circle"></i><span>Register Siswa</span>
            </a>
          </li>
          <li>
            <a href="/register-guru">
              <i class="bi bi-circle"></i><span>Register Guru</span>
            </a>
          </li>
        </ul>
      </li>

      {{-- Tagihan dan gaji --}}
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cash-stack"></i>
              <span>Tagihan dan Gaji</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/tagihan-siswa">
                <i class="bi bi-circle"></i><span>Tagihan Siswa</span>
              </a>
            </li>
            <li>
              <a href="/gaji-guru">
                <i class="bi bi-circle"></i><span>Gaji Guru</span>
              </a>
            </li>
          </ul>
        </li>
      {{-- end tagihan --}}

      <!-- Bagian Program blog sekolah -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
            <i class="bi bi-grid"></i><span>Program Blog Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/ekstrakurikuler">
                <i class="bi bi-circle"></i><span>Ekskul</span>
              </a>
            </li>
            <li>
              <a href="/praktikum">
                <i class="bi bi-circle"></i><span>Praktikum</span>
              </a>
            </li>
            <li>
              <a href="/lomba">
                <i class="bi bi-circle"></i><span>Lomba</span>
              </a>
            </li>
          </ul>
        </li>
      {{-- end program blog sekolah --}}


        <li class="nav-item">
          <a class="nav-link collapsed" href="/data-wali-siswa">
            <i class="bi bi-people-fill"></i>
            <span>Data Wali Siswa</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="/jadwal-mengajar">
            <i class="bi bi-calendar-date-fill"></i>
            <span>Jadwal Mengajar</span>
          </a>
        </li>
      



      {{-- program sekolah --}}
        {{-- <li class="nav-item">
          <a class="nav-link collapsed" href="/school-program">
            <i class="bi bi-grid"></i>
            <span>Profil</span>
          </a>
        </li> --}}
      {{-- end program --}}

      
      
      
        <!-- Bagian Data Siswa -->
        <!-- <li class="nav-item">
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
        </li> -->
            
      <!-- Bagian Program Sekolah -->
        <!-- <li class="nav-item">
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
        </li> -->

      

      <!-- Bagian Login -->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="/login">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
          </a>
        </li> -->

    </ul>

  </aside>
<!-- End SIDEBAR-->

<!-- ======= BAGIAN PAGES ======= -->
  <main id="main" class="main">
    @yield('admin')
  </main>
<!-- End PAGES -->

<!-- ======= BAGIAN FOOTER ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sobat Baku Hantam</span></strong>. All Rights Reserved
    </div>
  </footer>
<!-- End FOOTER -->

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>
</html>