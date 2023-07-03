@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
@section('main')
    <main id="main" class="main">
        <!-- page -->
        <div class="pagetitle">
            <h1>Riwayat & Gaji</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Data Guru</li>
                    <li class="breadcrumb-item active">Riwayat & Gaji</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-3">
                <div class="row">

                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="search" id="form1" placeholder="Cari Riwayat & Gaji"
                                                class="form-control" />
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary btn-search">
                                                    <!--  -->
                                                    <img src="img/icon/search-heart-fill.svg" class="svg-custom svg0"
                                                        alt="">
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- <button type="button" class="btn btn-primary add-new"> </button> -->
                                        <a href="/buat-data-guru" class="btn btn-primary add-new">
                                            <img src="img/icon/plus-square-fill.svg" class="svg-custom svg0" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered ">
                                <thead class="text-center">
                                    <tr>
                                        <th>Nama Guru</th>
                                        <th>Pangkat/Gol.</th>
                                        <th>Nomor SK</th>
                                        <th>Tanggal SK</th>
                                        <th>Gaji Pokok</th>
                                        <th>Fitur</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>Susi Maharani</td>
                                        <td>III/A</td>
                                        <td>0001</td>
                                        <td>2023/05/17</td>
                                        <td>3012000</td>
                                        <td>
                                            <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                                    alt=""></button>
                                            <button class="btn"><img src="img/icon/trash-fill.svg"
                                                    class="svg-custom svg2" alt=""></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Susi Maharani</td>
                                        <td>III/A</td>
                                        <td>0001</td>
                                        <td>2023/05/17</td>
                                        <td>3012000</td>
                                        <td>
                                            <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                                    alt=""></button>
                                            <button class="btn"><img src="img/icon/trash-fill.svg"
                                                    class="svg-custom svg2" alt=""></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Susi Maharani</td>
                                        <td>III/A</td>
                                        <td>0001</td>
                                        <td>2023/05/17</td>
                                        <td>3012000</td>
                                        <td>
                                            <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                                    alt=""></button>
                                            <button class="btn"><img src="img/icon/trash-fill.svg"
                                                    class="svg-custom svg2" alt=""></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Susi Maharani</td>
                                        <td>III/A</td>
                                        <td>0001</td>
                                        <td>2023/05/17</td>
                                        <td>3012000</td>
                                        <td>
                                            <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                                    alt=""></button>
                                            <button class="btn"><img src="img/icon/trash-fill.svg"
                                                    class="svg-custom svg2" alt=""></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Susi Maharani</td>
                                        <td>III/A</td>
                                        <td>0001</td>
                                        <td>2023/05/17</td>
                                        <td>3012000</td>
                                        <td>
                                            <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                                    alt=""></button>
                                            <button class="btn"><img src="img/icon/trash-fill.svg"
                                                    class="svg-custom svg2" alt=""></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Susi Maharani</td>
                                        <td>III/A</td>
                                        <td>0001</td>
                                        <td>2023/05/17</td>
                                        <td>3012000</td>
                                        <td>
                                            <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1"
                                                    alt=""></button>
                                            <button class="btn"><img src="img/icon/trash-fill.svg"
                                                    class="svg-custom svg2" alt=""></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
<!-- End PAGES -->
