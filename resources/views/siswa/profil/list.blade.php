@extends('siswa.siswa')

<!-- ======= BAGIAN PAGES ======= -->
@section('siswa')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>PROFIL SISWA</h1>
            <!-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Profil Guru</li>
                </ol>
            </nav> -->
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                @if($Data->count() > 0)
                <div class="isi profil">
                    <div class="row justify-content-center text-center">
                        <i class="bi bi-person-circle" style="font-size: 4rem;"></i>
                        <!-- <img class="img-min" src="img/lg.png" alt=""> -->
                    </div>
                    <h3 class="text-center">
                        {{ $DataSiswa->nama }}
                    </h3>
                </div>
                <table class="table table-hover mt-5">
                    <tbody class="">
                        <tr>
                            <td class="col-custom">NOMOR INDUK SISWA</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataSiswa->nis }}</td>
                        </tr>
                        <tr>
                            <td class="col-custom">TANGGAL LAHIR</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataSiswa->tgllahir }}</td>
                        </tr>
                        <tr>
                            <td class="col-custom">KELAS</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataSiswa->kelas }}</td>
                        </tr>
                        <tr>
                            <td class="col-custom">NOMOR TELEPON</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataSiswa->notelp }}</td>
                        </tr>
                        <tr>
                            <td class="col-custom">ASAL SEKOLAH</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataSiswa->asalsekolah }}</td>
                        </tr>
                    </tbody>
                </table>
                @else
                <div class="isi profil">
                    <div class="row justify-content-center text-center">
                        <i class="bi bi-person-circle" style="font-size: 4rem;"></i>
                        <!-- <img class="img-min" src="img/lg.png" alt=""> -->
                    </div>
                    <h3 class="text-center">
                        PROFIL SISWA
                    </h3>
                </div>
                @endif
            </div>
        </section>
</main>

@endsection 