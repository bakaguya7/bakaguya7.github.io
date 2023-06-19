@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
  @section('main')
    <main id="main" class="main">
      <!-- page -->
      <div class="pagetitle">
      <h1>Data Siswa</h1>
      <nav>
      <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Data Siswa</li>
              <li class="breadcrumb-item active">Data Siswa</li>
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
                              <input type="search" id="form1" placeholder="Cari Data Siswa" class="form-control" />
                              <div class="input-group-append">
                                <button type="button" class="btn btn-primary btn-search">
                                <!--  -->
                                  <img src="img/icon/search-heart-fill.svg" class="svg-custom svg0" alt="">
                                </button>
                              </div>
                              
                            </div>
                          </div>
                          <div class="col-sm-4">
                              <!-- <button type="button" class="btn btn-primary add-new"> </button> -->
                                <a href="/buat-data-siswa" class="btn btn-primary add-new">
                                    <img src="img/icon/plus-square-fill.svg" class="svg-custom svg0" alt="">
                                </a>
                          </div>
                      </div>
                  </div>
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>NIS</th>
                              <th>Nama Lengkap</th>
                              <th>Kelas</th>
                              <th>Alamat</th>
                              <th>No. Telepon</th>
                              <th>Asal Sekolah</th>
                              <th>Fitur</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1011001</td>
                              <td>Ahmad Ridho</td>
                              <td>11A</td>
                              <td>Jl. Parangtritis No. 9</td>
                              <td>082399853244</td>
                              <td>SMPN 2 Yogyakarta</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>1011001</td>
                              <td>Ahmad Ridho</td>
                              <td>11A</td>
                              <td>Jl. Parangtritis No. 9</td>
                              <td>082399853244</td>
                              <td>SMPN 2 Yogyakarta</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>1011001</td>
                              <td>Ahmad Ridho</td>
                              <td>11A</td>
                              <td>Jl. Parangtritis No. 9</td>
                              <td>082399853244</td>
                              <td>SMPN 2 Yogyakarta</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>1011001</td>
                              <td>Ahmad Ridho</td>
                              <td>11A</td>
                              <td>Jl. Parangtritis No. 9</td>
                              <td>082399853244</td>
                              <td>SMPN 2 Yogyakarta</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>1011001</td>
                              <td>Ahmad Ridho</td>
                              <td>11A</td>
                              <td>Jl. Parangtritis No. 9</td>
                              <td>082399853244</td>
                              <td>SMPN 2 Yogyakarta</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>1011001</td>
                              <td>Ahmad Ridho</td>
                              <td>11A</td>
                              <td>Jl. Parangtritis No. 9</td>
                              <td>082399853244</td>
                              <td>SMPN 2 Yogyakarta</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
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