@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Register Siswa dan Guru</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Register Siswa dan Guru</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="{{ route('data-wali-siswa.update', $WaliSiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="namasiswa">Nama Siswa</label>
                            <input type="text" name="namasiswa" class="form-control" value="{{ $WaliSiswa->namasiswa }}" placeholder="Nama Siswa">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="namaayah">Nama Ayah</label>
                            <input type="text" name="namaayah" class="form-control" value="{{ $WaliSiswa->namaayah }}" placeholder="Nama Ayah">
                        </div>
                        <div class="col">
                            <label for="namaibu">Nama Ibu</label>
                            <input type="text" name="namaibu" class="form-control" value="{{ $WaliSiswa->namaibu }}" placeholder="Nama Ibu">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="pekerjaanayah">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaanayah" class="form-control" value="{{ $WaliSiswa->pekerjaanayah }}" placeholder="Pekerjaan Ayah">
                        </div>
                        <div class="col">
                            <label for="pekerjaanibu">Pekerjaan Ibu</label>
                            <input type="text" name="pekerjaanibu" class="form-control" value="{{ $WaliSiswa->pekerjaanibu }}" placeholder="Pekerjaan Ibu">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="noteleponayah">Nomor Telepon Ayah</label>
                            <input type="text" name="noteleponayah" class="form-control" value="{{ $WaliSiswa->noteleponayah }}" placeholder="Nomor Telepon Ayah">
                        </div>
                        <div class="col">
                            <label for="pekerjaanibu">Nomor Telepon Ibu</label>
                            <input type="text" name="noteleponibu" class="form-control" value="{{ $WaliSiswa->noteleponibu }}" placeholder="Nomor Telepon Ibu">
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