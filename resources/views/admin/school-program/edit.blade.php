@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Program Sekolah</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Program Sekolah</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="/school-program" method="POST">
                    @csrf
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $SchoolProgram->judul }}" placeholder="Judul Program">
                        </div>
                        <div class="col">
                            <label for="tag">Tag</label>
                            <input type="text" name="tag" class="form-control" value="{{ $SchoolProgram->tag }}" placeholder="Tag">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="uploadgambar">Upload Gambar</label>
                            <input type="file" name="upload gambar" class="form-control" value="{{ $SchoolProgram->uploadgambar }}" placeholder="Upload Gambar">
                        </div>
                        <div class="col">
                            <label for="isikonten">Isi Konten</label>
                            <input type="text" name="isi konten" class="form-control" value="{{ $SchoolProgram->isikonten }}" placeholder="Isi Konten">
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