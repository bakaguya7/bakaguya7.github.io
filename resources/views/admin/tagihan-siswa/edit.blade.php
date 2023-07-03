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
                <form action="{{ route('tagihan-siswa.update', $Tagihan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" class="form-control" value="{{ $Tagihan->nis }}" placeholder="Nomor Induk Siswa">
                        </div>
                        <div class="col">
                            <label for="namasiswa">Nama Lengkap</label>
                            <input type="text" name="namasiswa" class="form-control" value="{{ $Tagihan->namasiswa }}" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="norek">Nomor Rekening</label>
                            <input type="text" name="norek" class="form-control" value="{{ $Tagihan->norek }}" placeholder="Nomor Rekening">
                        </div>
                        <div class="col">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="{{ $Tagihan->keterangan }}" placeholder="Keterangan">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" value="{{ $Tagihan->jumlah }}" placeholder="jumlah">
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