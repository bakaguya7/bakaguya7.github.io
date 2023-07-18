@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Wali Siswa</h1>
            <!-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Register Siswa dan Guru</li>
                </ol>
            </nav> -->
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
                    <h3>Data Wali Siswa</h3>
                    <a href="{{ route('data-wali-siswa.create') }}" class="btn">
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
                            <th>NAMA SISWA</th>
                            <th>NAMA AYAH</th>
                            <th>NAMA IBU</th>
                            <th>FITUR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($WaliSiswa->count() > 0)
                            @foreach($WaliSiswa as $wali)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $wali->namasiswa }}</td>
                                <td class="align-middle">{{ $wali->namaayah }}</td>
                                <td class="align-middle">{{ $wali->namaibu }}</td>
                                <td class="px-0 py-0">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('data-wali-siswa.show', $wali->id) }}" class="btn">
                                            <i class="bi bi-bar-chart-fill svg3" style="font-size: 1.3rem;"></i>
                                        </a>
                                        <a href="{{ route('data-wali-siswa.edit', $wali->id) }}" class="btn">
                                            <i class="bi bi-pen-fill svg-custom svg1" style="font-size: 1.3rem;"></i>
                                        </a>
                                        <form action="{{ route('data-wali-siswa.destroy', $wali->id) }}" class="" method="POST" type="button" onsubmit="return confirm('Delete?'">
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