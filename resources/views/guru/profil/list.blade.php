@extends('guru.guru')

<!-- ======= BAGIAN PAGES ======= -->
@section('guru')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>PROFIL GURU</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Profil Guru</li>
                </ol>
            </nav>
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
                    <h3 class="text-center">{{ $DataGuru->namalengkap }}</h3>
                </div>
                <table class="table table-hover mt-5">
                    <tbody class="">
                         <tr>
                            <td class="col-custom">NOMOR INDUK GURU</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataGuru->nig }}</td>
                         </tr>
                         <tr>
                            <td class="col-custom">PENDIDIKAN</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataGuru->pendidikan }}</td>
                         </tr>
                         <tr>
                            <td class="col-custom">MATA PELAJARAN</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataGuru->matapelajaran }}</td>
                         </tr>
                         <tr>
                            <td class="col-custom">ALAMAT</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataGuru->alamat }}</td>
                         </tr>
                         <tr>
                            <td class="col-custom">NOMOR TELEPON</td>
                            <td class="col-custom">:</td>
                            <td>{{ $DataGuru->notelp }}</td>
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
                        PROFIL GURU
                    </h3>
                </div>
                @endif
            </div>
        </section>
</main>

@endsection 