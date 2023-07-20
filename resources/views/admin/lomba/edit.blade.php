@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Program Lomba</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Program Lomba</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="{{ route('lomba.update', $Lomba->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $Lomba->judul }}" placeholder="Judul">
                        </div>
                        <div class="col">
                            <label for="image">Upload Gambar</label>
                            <input type="text" name="image" class="form-control" value="{{ $Lomba->image }}" placeholder="Upload Gambar">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{ $Lomba->deskripsi }}" placeholder="Deskripsi">
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