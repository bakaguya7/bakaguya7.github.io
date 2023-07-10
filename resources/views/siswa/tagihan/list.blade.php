@extends('siswa.siswa')

<!-- ======= BAGIAN PAGES ======= -->
@section('siswa')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tagihan Siswa</h1>
            <!-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Tagihan Siswa</li>
                </ol>
            </nav> -->
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <div class="d-flex align-items-center justify-content-between mb-3">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="col-custom">NO</th>
                            <th>REKENING</th> 
                            <th>KETERANGAN</th> 
                            <th>JUMLAH</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($Tagihan->count() > 0)
                            @foreach($Tagihan as $siswa)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $siswa->norek }}</td>
                                <td class="align-middle">{{ $siswa->keterangan }}</td>
                                <td class="align-middle">{{ $siswa->jumlah }}</td>
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