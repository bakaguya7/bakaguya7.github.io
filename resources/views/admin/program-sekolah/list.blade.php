@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Program Sekolah</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Program Sekolah</li>
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
                    <h3>Program Sekolah</h3>
                    <a href="/program-sekolah-create" class="btn btn-primary">
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
                            <th>JUDUL</th>
                            <th>TAG</th>
                            <th>UPLOAD GAMBAR</th> 
                            <th>ISI KONTEN</th>
                            <th>FITUR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($ProgramSekolah->count() > 0)
                            @foreach($ProgramSekolah as $program)
                            <tr>
                                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $program->judul }}</td>
                                <td class="align-middle">{{ $program->tag }}</td>
                                <td class="align-middle">{{ $program->uploadgambar }}</td>
                                <td class="align-middle">{{ $program->isikonten }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('program-sekolah.edit', $program->id) }}" class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                            alt=""></a>
                                    <form action="{{ route('program-sekolah.destroy', $program->id) }}" class="" method="POST" type="button" onsubmit="return confirm('Delete?'">
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