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
            <!-- @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif -->
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Register Siswa</h3>
                </div>  
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="col-custom">NO</th>
                            <th class="col-custom">NIS</th>
                            <th>NAMA LENGKAP</th>
                            <th class="">AKTIFKAN AKUN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($DataSiswa->count() > 0)
                            @foreach($DataSiswa as $siswa)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle col-custom">{{ $siswa->nis }}</td>
                                <td class="align-middle">{{ $siswa->nama }}</td>
                                
                                <td class="d-flex justify-content-center px-0 py-0">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('register-siswa.edit', $siswa->id) }}" class="btn">
                                            <i class="bi bi-check-circle-fill svg4" style="font-size: 1.3rem;"></i>
                                        </a>
                                    </div>
                                </td>
                                
                            </tr>
                            
                            @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center">Book not found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </section>
</main>

@endsection 