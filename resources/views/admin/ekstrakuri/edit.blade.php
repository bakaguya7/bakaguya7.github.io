@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Program Ekstrakurikuler</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Program Ekstrakurikuler</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="{{ route('ekskul.update', $Ekskul->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $Ekskul->judul }}" placeholder="Judul">
                        </div>
                        <div class="col">
                            <label for="image">Upload Gambar</label>
                            <input type="text" name="image" class="form-control" value="{{ $Ekskul->image }}" placeholder="Upload Gambar">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="Keterangan">Keterangan</label>
                            <input type="text" name="Keterangan" class="form-control" value="{{ $Ekskul->deskripsi }}" placeholder="Deskripsi">
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