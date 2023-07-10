@extends('guru.guru')

<!-- ======= BAGIAN PAGES ======= -->
@section('guru')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Jadwal Mengajar</h1>
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
                            <th>TANGGAL</th> 
                            <th>JAM</th> 
                            <th>MAPEL</th>
                            <th>KELAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($Jadwal->count() > 0)
                            @foreach($Jadwal as $jadwal)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $jadwal->tgl }}</td>
                                <td class="align-middle">{{ $jadwal->jam }}</td>
                                <td class="align-middle">{{ $jadwal->mapel }}</td>
                                <td class="align-middle">{{ $jadwal->kelas }}</td>
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