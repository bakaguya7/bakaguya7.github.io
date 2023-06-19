@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
@section('main')
    <main id="main" class="main">
        <!-- page -->
        <div class="pagetitle">
            <h1>Data Mapel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Data Guru</li>
                    <li class="breadcrumb-item active">Data Mapel</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <!-- Page Content -->
        <section class="section-dashboard">
            <div class="container bg-white rounded-3">
                <div class="row">
                    <form>
                        <div class="row">
                            <div class="col">Kelas
                                <input type="text" class="form-control" placeholder="Kelas" aria-label="Kelas">
                            </div>
                            <div class="col">Materi
                                <input type="text" class="form-control" placeholder="Materi" aria-label="Materi">
                            </div>
                            <div class="col">Pertemuan
                                <input type="number" class="form-control" placeholder="Pertemuan Ke-"
                                    aria-label="Pertemuan">
                            </div>
                            <div class="mb-3">
                                <label for="ExampleUploadMateri1" class="form-label">Upload Materi</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <div class="d-flex justify-content-center text-center text-lg-start mt-4">
                                <button name="submit" type="submit"
                                    class="btn btn-sm bg-primary btn-custom">SUBMIT</button>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    @endsection
    <!-- End PAGES -->
