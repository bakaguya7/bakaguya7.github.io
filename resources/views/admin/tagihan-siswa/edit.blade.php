@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tagihan Siswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Tagihan Siswa</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="{{ route('data-siswa.update', $DataSiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" class="form-control" value="{{ $DataSiswa->nis }}" placeholder="Nomor Induk Siswa">
                        </div>
                        <div class="col">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="{{ $DataSiswa->nama }}" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="tgllahir">Tanggal Lahir</label>
                            <input type="date" name="tgllahir" class="form-control" value="{{ $DataSiswa->tgllahir }}" placeholder="Tanggal Lahir">
                        </div>
                        <div class="col">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{ $DataSiswa->kelas }}" placeholder="Kelas">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="notelp">Asal Sekolah</label>
                            <input type="text" name="asalsekolah" class="form-control" value="{{ $DataSiswa->asalsekolah }}" placeholder="Asal Sekolah">
                        </div>
                        <div class="col">
                            <label for="notelp">No. Telepon</label>
                            <input type="text" name="notelp" class="form-control" value="{{ $DataSiswa->notelp }}" placeholder="No. Telepon">
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