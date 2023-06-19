@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
@section('main')
<main id="main" class="main">
      <!-- page -->
      <div class="pagetitle">
      <h1>Data Siswa</h1>
      <nav>
      <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Data Siswa</li>
              <li class="breadcrumb-item">Data Siswa</li>
              <li class="breadcrumb-item active">Buat Data</li>
          </ol>
      </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="container bg-white rounded p-3">
        <form action="" method="POST">
            <div class="row d-flex justify-content-center">
                @csrf
                <!-- + Nomor Induk Guru
+ Nama Lengkap
+ Pendidikan
+ Mata Pelajaran
+ Alamat
+ No. Telepon -->
                <div class="col-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="nis">NIS</label>
                        <input type="text" id="nis" class="form-control form-control-sm"
                            placeholder="00101011" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="kelas">Kelas</label>
                        <input type="text" id="kelas" class="form-control form-control-sm"
                            placeholder="11B" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="noteleponsiswa">No. Telepon</label>
                        <input type="text" id="noteleponsiswa" class="form-control form-control-sm"
                            placeholder="082398887871" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="namalengkapsiswa">Nama Lengkap Siswa</label>
                        <input type="text" id="namalengkapsiswa" class="form-control form-control-sm"
                            placeholder="Sawi wal Kangkung" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" id="alamat" class="form-control form-control-sm"
                            placeholder="Jl. Juragan No. 22" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="asalsekolah">Asal Sekolah</label>
                        <input type="text" id="asalsekolah" class="form-control form-control-sm"
                            placeholder="SMPN 1 Yogyakarta" />
                    </div>
                </div>
                <div class="d-flex justify-content-center text-center text-lg-start mt-4">
                    <button name="submit" type="submit" class="btn btn-sm bg-primary btn-custom">SUBMIT</button>
                </div>
            </div>
        </form>
        </div>
    </section>
</main>
  @endsection