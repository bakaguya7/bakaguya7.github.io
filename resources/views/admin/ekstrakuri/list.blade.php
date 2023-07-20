@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Program Praktikum</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Program Praktikum</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <div class="row">
            <div class="container">
     
                <h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
                
                <div class="col-lg-8 mx-auto my-5">	
     
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif
     
                    
                    
                    <h4 class="my-5">Data</h4>
     
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">File</th>
                                <th>Keterangan</th>
                                <th width="1%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gambar as $g)
                            <tr>
                                <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                                <td>{{$g->keterangan}}</td>
                                <td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>

@endsection 