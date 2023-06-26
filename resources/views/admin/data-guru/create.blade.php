@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Siswa dan Guru</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Data Siswa dan Guru</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="/data-guru-store" method="POST">
                    @csrf
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="nig">NIG</label>
                            <input type="text" name="nig" class="form-control" placeholder="Nomor Induk Siswa">
                        </div>
                        <div class="col">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="tgllahir">Tanggal Lahir</label>
                            <input type="date" name="tgllahir" class="form-control" placeholder="Tanggal Lahir">
                        </div>
                        <div class="col">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="notelp">Asal Sekolah</label>
                            <input type="text" name="asalsekolah" class="form-control" placeholder="Asal Sekolah">
                        </div>
                        <div class="col">
                            <label for="notelp">No. Telepon</label>
                            <input type="text" name="notelp" class="form-control" placeholder="No. Telepon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid">
                            <button class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </section>
</main>

@endsection 