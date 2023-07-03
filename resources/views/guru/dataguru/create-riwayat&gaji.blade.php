@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
@section('main')
    <main id="main" class="main">
        <!-- page -->
        <div class="pagetitle">
            <h1>Riwayat & Gaji</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Data Guru</li>
                    <li class="breadcrumb-item">Riwayat & Gaji</li>
                    <li class="breadcrumb-item active">Buat Data</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-3">
                <form action="" method="POST">
                    <div class="row d-flex justify-content-center">
                        @csrf
                        <!-- + Pangkat Golongan
                + No. SK
                + Tanggal SK
                + Gaji Pokok -->
                        <div class="col-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="pangkatgolongan">Pangkat Golongan</label>
                                <input type="text" id="Pangkat Golongan" class="form-control form-control-sm"
                                    placeholder="Pangkat Golongan" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="nomorsk">Nomor SK</label>
                                <input type="text" id="Nomor SK" class="form-control form-control-sm"
                                    placeholder="Nomor SK" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="tanggalsk">Tanggal SK</label>
                                <input type="text" id="tanggalsk" class="form-control form-control-sm"
                                    placeholder="Tanggal SK" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="gajipokok">Gaji Pokok</label>
                                <input type="text" id="gajipokok" class="form-control form-control-sm"
                                    placeholder="Gaji Pokok" />
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
