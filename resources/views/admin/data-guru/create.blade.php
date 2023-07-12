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
                                <label for="nig">Nomor Induk Guru</label>
                                <input type="text" name="nig" class="form-control" placeholder="Nomor Induk Guru">
                            </div>
                            <div class="col">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="row mb-3 text-dark">
                            <div class="col">
                                <label for="pendidikan">Pendidikan</label>
                                <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan">
                            </div>
                            <div class="col">
                                <label for="kelas">Mata Pelajaran</label>
                                <input type="text" name="matapelajaran" class="form-control" placeholder="Mata Pelajaran">
                            </div>
                        </div>
                        <div class="row mb-3 text-dark">
                            <div class="col">
                                <label for="notelp">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
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