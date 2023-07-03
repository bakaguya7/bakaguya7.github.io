@extends('siswa.siswa')

<!-- ======= BAGIAN PAGES ======= -->
@section('siswa')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>PROFIL SISWA</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Profil Siswa</li>
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

                <div class="isi profil">
                    <div class="row justify-content-center ">
                        <img class="img-max" src="img/lg.png" alt="" width="200px" height="200px">
                    </div>
                    <h1 class="text-center">Nama Siswa</h1>
                </div>  
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="/data-guru-create" class="btn ">
                        <i class="bi bi-plus-circle-fill svg4" style="font-size: 1.8rem;"></i>
                    </a>
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
                            <th>NO INDUK GURU</th>
                            <th>NAMA LENGKAP</th>
                            <th>MATA PELAJARAN</th> 
                            <th>FITUR</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    
                         <tr>
                            <h1>hallo</h1>
                         </tr>
                    </tbody>
                </table>
                
            </div>
        </section>
</main>

@endsection 