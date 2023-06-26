@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Siswa dan Guru</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Data Siswa dan Guru</li>
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
                    <h3>Data Siswa</h3>
                    <a href="/data-siswa-create" class="btn btn-primary">
                        <img src="img/icon/plus-square-fill.svg" class="svg-custom svg0" alt="">
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
                            <th>NO INDUK SISWA</th>
                            <th>NAMA LENGKAP</th>
                            <th>KELAS</th> 
                            <th>FITUR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($DataSiswa->count() > 0)
                            @foreach($DataSiswa as $siswa)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $siswa->nis }}</td>
                                <td class="align-middle">{{ $siswa->nama }}</td>
                                <td class="align-middle">{{ $siswa->kelas }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('data-siswa.edit', $siswa->id) }}" class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                            alt=""></a>
                                    <form action="{{ route('data-siswa.destroy', $siswa->id) }}" class="" method="POST" type="button" onsubmit="return confirm('Delete?'">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn"><img src="img/icon/trash-fill.svg"
                                                class="svg-custom svg2" alt=""></button>
                                    </form>
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