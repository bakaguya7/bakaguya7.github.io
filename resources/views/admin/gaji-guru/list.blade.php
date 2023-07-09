@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Gaji Guru</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Gaji Guru</li>
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
                    <h3>Gaji Guru</h3>
                    <a href="{{ route('gaji-guru.create') }}" class="btn">
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
                            <th class="col-custom">NAMA</th>
                            <th>NOMINAL</th> 
                            <th>KETERANGAN</th>
                            <th>FITUR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($GajiGuru->count() > 0)
                            @foreach($GajiGuru as $guru)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle col-custom">{{ $guru->nama }}</td>
                                <td class="align-middle">{{ $guru->nominal }}</td>
                                <td class="align-middle">{{ $guru->keterangan }}</td>
                                <td class="px-0 py-0">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('gaji-guru.edit', $guru->id) }}" class="btn">
                                            <i class="bi bi-pen-fill svg-custom svg1" style="font-size: 1.3rem;"></i>
                                        </a>
                                        <form action="{{ route('gaji-guru.destroy', $guru->id) }}" class="" method="POST" type="button" onsubmit="return confirm('Delete?'">
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