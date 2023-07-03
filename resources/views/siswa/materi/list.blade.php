@extends('siswa.siswa')

<!-- ======= BAGIAN PAGES ======= -->
@section('siswa')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>MATERI</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Materi Pelajaran</li>
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
                    <h3>Materi</h3>
                    <a href="/data-guru-create" class="btn">
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