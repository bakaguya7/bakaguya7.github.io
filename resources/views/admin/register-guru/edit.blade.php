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
                <form action="{{ route('register-guru.update', $RegisGuru->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="name">Nomor Induk Guru</label>
                            <input type="text" name="nig" class="form-control" value="{{ $RegisGuru->nig }}" placeholder="Nomor Induk Siswa">
                        </div>
                        <div class="col">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="{{ $RegisGuru->nama }}" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $RegisGuru->email }}" placeholder="guru@gmail.com">
                        </div>
                        <div class="col">
                            <label for="nama">Password</label>
                            <input type="password" name="password" class="form-control" value="{{ $RegisGuru->password }}" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid">
                            <button class="btn btn-warning">SUBMIT</button>
                        </div>
                    </div>
                </form>

                
            </div>
        </section>
</main>

@endsection 