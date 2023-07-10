@extends('guru.guru')

<!-- ======= BAGIAN PAGES ======= -->
@section('guru')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Riwayat Gaji</h1>
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
                            <th>NAMA</th> 
                            <th>NOMINAL</th> 
                            <th>KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($Gaji->count() > 0)
                            @foreach($Gaji as $gaji)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $gaji->nama }}</td>
                                <td class="align-middle">{{ $gaji->nominal }}</td>
                                <td class="align-middle">{{ $gaji->keterangan }}</td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">DATA KOSONG</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                
            </div>
        </section>
</main>

@endsection 