@extends('guru.guru')

<!-- ======= BAGIAN PAGES ======= -->
@section('guru')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>DATA MATERI</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Data Materi</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3>Data Materi</h3>
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
                        @if($DataMateri->count() > 0)
                                @foreach($DataMateri as $materi)
                                <tr>
                                    <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                    <td class="align-middle col-custom">{{ $materi->kelas }}</td>
                                    <td class="align-middle">{{ $materi->matapelajaran }}</td>
                                    <td class="align-middle">{{ $materi->materi }}</td>
                                    <td class="align-middle">{{ $materi->pertemuan }}</td>
                                    <td class="px-0 py-0">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('data-materi.edit', $siswa->id) }}" class="btn">
                                                <i class="bi bi-pen-fill svg-custom svg1" style="font-size: 1.3rem;"></i>
                                            </a>
                                            <form action="{{ route('data-materi.destroy', $siswa->id) }}" class="" method="POST" type="button" onsubmit="return confirm('Delete?'">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn"><i class="bi bi-trash3-fill svg-custom svg2" style="font-size: 1.3rem;"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">DATA KOSONG</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                
            </div>
        </section>
</main>

@endsection 