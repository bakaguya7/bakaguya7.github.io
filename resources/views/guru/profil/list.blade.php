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
                <div class="isi profil">
                    <div class="row justify-content-center ">
                        <img class="img-min" src="img/lg.png" alt="">
                    </div>
                    <h3 class="text-center">?</h3>
                </div>
                <table class="table table-hover mt-5">
                    <tbody class="">
                         <tr>
                            <td class="col-custom">NOMOR INDUK GURU</td>
                            <td class="col-custom">:</td>
                            <td>?</td>
                         </tr>
                         <tr>
                            <td class="col-custom">NAMA LENGKAP</td>
                            <td class="col-custom">:</td>
                            <td>?</td>
                         </tr>
                         <tr>
                            <td class="col-custom">PENDIDIKAN</td>
                            <td class="col-custom">:</td>
                            <td>?</td>
                         </tr>
                         <tr>
                            <td class="col-custom">MATA PELAJARAN</td>
                            <td class="col-custom">:</td>
                            <td>?</td>
                         </tr>
                         <tr>
                            <td class="col-custom">ALAMAT</td>
                            <td class="col-custom">:</td>
                            <td>?</td>
                         </tr>
                         <tr>
                            <td class="col-custom">NOMOR TELEPON</td>
                            <td class="col-custom">:</td>
                            <td>?</td>
                         </tr>
                    </tbody>
                </table>
            </div>
        </section>
</main>

@endsection 