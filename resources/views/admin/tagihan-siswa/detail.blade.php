@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tagihan Siswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Tagihan Siswa</li>
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
                            <th>NO INDUK SISWA</th>
                            <th>NAMA LENGKAP</th>
                            <th>TANGGAL LAHIR</th>
                            <th>KELAS</th>
                            <th>ASAL SEKOLAH</th>
                            <th>NO. TELEPON</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="align-middle col-custom">{{ $DataSiswa->id }}</td>
                                <td class="align-middle">{{ $DataSiswa->nis }}</td>
                                <td class="align-middle">{{ $DataSiswa->nama }}</td>
                                <td class="align-middle">{{ $DataSiswa->tgllahir }}</td>
                                <td class="align-middle">{{ $DataSiswa->kelas }}</td>
                                <td class="align-middle">{{ $DataSiswa->asalsekolah }}</td>
                                <td class="align-middle">{{ $DataSiswa->notelp }}</td> 
                            </tr>
                    </tbody>
                </table>
            </div>
            
        </section>
</main>

@endsection 