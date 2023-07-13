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
                <!-- </form> -->
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="col-custom">NO</th>
                            <th>NAMA SISWA</th>
                            <th>NAMA AYAH</th>
                            <th>NAMA IBU</th>
                            <th>PEKERJAAN AYAH</th>
                            <th>PEKERJAAN IBU</th>
                            <th>NOMOR TELEPON AYAH</th>
                            <th>NOMOR TELEPON IBU</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="align-middle col-custom">{{ $WaliSiswa->iteration }}</td>
                                <td class="align-middle">{{ $WaliSiswa->namasiswa }}</td>
                                <td class="align-middle">{{ $WaliSiswa->namaayah }}</td>
                                <td class="align-middle">{{ $WaliSiswa->namaibu }}</td>
                                <td class="align-middle">{{ $WaliSiswa->pekerjaanayah }}</td>
                                <td class="align-middle">{{ $WaliSiswa->pekerjaanibu }}</td>
                                <td class="align-middle">{{ $WaliSiswa->noteleponayah }}</td>
                                <td class="align-middle">{{ $WaliSiswa->noteleponibu }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
            
        </section>
</main>

@endsection 