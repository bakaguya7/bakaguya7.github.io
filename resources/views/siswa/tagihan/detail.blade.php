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
                            <th>NO INDUK GURU</th>
                            <th>NAMA LENGKAP</th>
                            <th>PENDIDIKAN</th>
                            <th>MATA PELAJARAN</th>
                            <th>ALAMAT</th>
                            <th>NO. TELEPON</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="align-middle col-custom">{{ $DataGuru->iteration }}</td>
                                <td class="align-middle">{{ $DataGuru->nig }}</td>
                                <td class="align-middle">{{ $DataGuru->namalengkap }}</td>
                                <td class="align-middle">{{ $DataGuru->pendidikan }}</td>
                                <td class="align-middle">{{ $DataGuru->matapelajaran }}</td>
                                <td class="align-middle">{{ $DataGuru->alamat }}</td>
                                <td class="align-middle">{{ $DataGuru->notelp }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
            
        </section>
</main>

@endsection 