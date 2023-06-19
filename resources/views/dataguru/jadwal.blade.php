@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
@section('main')
    <main id="main" class="main">
        <!-- page -->
        <div class="pagetitle">
            <h1>Data Guru</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Data Guru</li>
                    <li class="breadcrumb-item active">Jadwal Mengajar</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section-dashboard">
            <div class="container bg-white rounded-3">
                <div class="row">
                    <div class="mb-3">
                        <label for="ExampleUploadMateri1" class="form-label">Jadwal Pelajaran MIPA Tahun Ajaran
                            2023/2024</label>
                        <div class="badge bg-primary text-wrap" style="width: 6rem;">
                            Download
                        </div>
                    </div>
                    <div class="mb-3">
                      <label for="ExampleUploadMateri1" class="form-label">Jadwal Pelajaran IPS Tahun Ajaran
                          2023/2024</label>
                      <div class="badge bg-primary text-wrap" style="width: 6rem;">
                          Download
                      </div>
                  </div>
                  <div class="mb-3">
                    <label for="ExampleUploadMateri1" class="form-label">Jadwal Pelajaran Sastra Tahun Ajaran
                        2023/2024</label>
                    <div class="badge bg-primary text-wrap" style="width: 6rem;">
                        Download
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>
@endsection
<!-- End PAGES -->
