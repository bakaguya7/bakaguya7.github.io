@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Wali Siswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Data Wali Siswa</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="/data-wali-siswa-store" method="POST">
                    @csrf
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="namasiswa">Nama Siswa</label>
                            <select class="form-control" name="namasiswa">
                                @foreach($DataSiswa as $data)
                                    <option value="{!! $data->nama !!}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="namaayah">Nama Ayah</label>
                            <input type="text" name="namaayah" class="form-control" placeholder="Nama Ayah">
                        </div>
                        <div class="col">
                            <label for="namaibu">Nama Ibu</label>
                            <input type="text" name="namaibu" class="form-control" placeholder="Nama Ibu">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="pekerjaanayah">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaanayah" class="form-control" placeholder="Pekerjaan Ayah">
                        </div>
                        <div class="col">
                            <label for="pekerjaanibu">Pekerjaan Ibu</label>
                            <input type="text" name="pekerjaanibu" class="form-control" placeholder="Pekerjaan Ibu">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="noteleponayah">Nomor Telepon Ayah</label>
                            <input type="text" name="noteleponayah" class="form-control" placeholder="Nomor Telepon Ayah">
                        </div>
                        <div class="col">
                            <label for="pekerjaanibu">Nomor Telepon Ibu</label>
                            <input type="text" name="noteleponibu" class="form-control" placeholder="Nomor Telepon Ibu">
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