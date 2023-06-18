@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
  @section('main')
    <main id="main" class="main">
      <!-- page -->
      <div class="pagetitle">
      <h1>Data Guru</h1>
      <nav>
      <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Data Guru</li>
              <li class="breadcrumb-item active">Data Guru</li>
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
                          <div class="col-sm-8"><h2>Data Guru</h2></div>
                          <div class="col-sm-4">
                              <!-- <button type="button" class="btn btn-primary add-new"> </button> -->
                                <a href="/buat-data-guru" class="btn btn-primary add-new">
                                    <img src="img/icon/plus-square-fill.svg" class="svg-custom svg0" alt="">
                                </a>
                          </div>
                      </div>
                  </div>
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>No. Guru</th>
                              <th>Nama Lengkap</th>
                              <th>Mapel 1</th>
                              <th>Mapel 2</th>
                              <th>Alamat</th>
                              <th>No. Telepon</th>
                              <th>Fitur</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>0001</td>
                              <td>Susi Maharani</td>
                              <td>Kimia</td>
                              <td>Biologi</td>
                              <td>Jl. Kacau no. 32</td>
                              <td>082277819800</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>0001</td>
                              <td>Susi Maharani</td>
                              <td>Kimia</td>
                              <td>Biologi</td>
                              <td>Jl. Kacau no. 32</td>
                              <td>082277819800</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>0001</td>
                              <td>Susi Maharani</td>
                              <td>Kimia</td>
                              <td>Biologi</td>
                              <td>Jl. Kacau no. 32</td>
                              <td>082277819800</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>0001</td>
                              <td>Susi Maharani</td>
                              <td>Kimia</td>
                              <td>Biologi</td>
                              <td>Jl. Kacau no. 32</td>
                              <td>082277819800</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>0001</td>
                              <td>Susi Maharani</td>
                              <td>Kimia</td>
                              <td>Biologi</td>
                              <td>Jl. Kacau no. 32</td>
                              <td>082277819800</td>
                              <td>
                                    <button class="btn"><img src="img/icon/pen-fill.svg" class="svg-custom svg1" alt=""></button>
                                    <button class="btn"><img src="img/icon/trash-fill.svg" class="svg-custom svg2" alt=""></button>
                              </td>
                          </tr>
                          <tr>
                              <td>0001</td>
                              <td>Susi Maharani</td>
                              <td>Kimia</td>
                              <td>Biologi</td>
                              <td>Jl. Kacau no. 32</td>
                              <td>082277819800</td>
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