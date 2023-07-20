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

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
 
                    <div class="form-group">
                        <b>File Gambar</b><br/>
                        <input type="file" name="file">
                    </div>
 
                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-control" name="keterangan"></textarea>
                    </div>
 
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
                
            </div>
        </section>
</main>

@endsection 