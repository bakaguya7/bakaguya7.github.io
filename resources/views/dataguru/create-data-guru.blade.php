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
              <li class="breadcrumb-item">Data Guru</li>
              <li class="breadcrumb-item active">Buat Data</li>
          </ol>
      </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="container bg-white rounded p-3">
        <form action="/login/siswa" method="POST">
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
                        <label class="form-label" for="nomorindukguru">Nomor Induk Guru</label>
                        <input type="text" id="nomorindukguru" class="form-control form-control-sm"
                            placeholder="00001" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pendidikan">Pendidikan</label>
                        <input type="text" id="pendidikan" class="form-control form-control-sm"
                            placeholder="S1 Teknik Tidur Ohio" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" id="alamat" class="form-control form-control-sm"
                            placeholder="Jl. Bangkai No. 33" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="namalengkapguru">Nama Lengkap Guru</label>
                        <input type="text" id="namalengkapguru" class="form-control form-control-sm"
                            placeholder="Sawi wal Kangkung" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="matapelajaran">Mata Pelajaran</label>
                        <input type="text" id="matapelajaran" class="form-control form-control-sm"
                            placeholder="Pendidikan Radikal" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="notelepon">No. Telepon</label>
                        <input type="text" id="notelepon" class="form-control form-control-sm"
                            placeholder="08 yang lain kapan2" />
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