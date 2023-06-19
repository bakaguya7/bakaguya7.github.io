@extends('layout.landing-home')

{{-- MAIN HOME --}}
@section('isi-halaman')
    <div class="home">
    <!-- TITLE -->
        <div class="jumbotron jumbotron-fluid">
            <section id="hero-animated" class="hero-animated d-flex align-items-center">
                <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
                    <img src="img/lg.png" class="img-fluid animated" width="250">
                    <h2>Selamat Datang Di</h2>
                    <h1>SMA NEGERI YOGYAKARTA</h1>
                    <p></p>
                </div>
            </section>
        </div>
        <hr class="garis">
    <!-- END TITLE -->
    <!-- ======= PROFIL SEKOLAH ======= -->
        <section id="profil" class="profil p-2">
            <div class="container p-5">
                <div class="section-header p-4">
                    <p></p>
                    <p></p>
                    <p></p>
                    <h1 class="title">PROFIL SEKOLAH</h1>
                </div>

                <div class="row g-lg-5">
                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="img/sma_bck.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row g-4 col-lg-7">
                        <h3>isi</h3>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae tempora voluptatibus, harum, quidem deleniti et repellendus accusamus fugit sit soluta facere architecto? At inventore necessitatibus rerum in dolor assumenda commodi!</p>
                                <div class="d-flex align-items-center mt-4">
                                </div>
                            </div><!-- End Tab 1 Content -->
                        </div>
                    </div>
             

                    <div class="col-lg-5">
                        <div class="profil-img">
                            <img src="img/sma_bck.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row g-4 col-lg-7">
                        <h3>isi</h3>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae tempora voluptatibus, harum, quidem deleniti et repellendus accusamus fugit sit soluta facere architecto? At inventore necessitatibus rerum in dolor assumenda commodi!</p>
                                <div class="d-flex align-items-center mt-4">
                                </div>
                            </div><!-- End Tab 1 Content -->
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="profil-img">
                            <img src="img/sma_bck.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3>isi</h3>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae tempora voluptatibus, harum, quidem deleniti et repellendus accusamus fugit sit soluta facere architecto? At inventore necessitatibus rerum in dolor assumenda commodi!</p>
                                <div class="d-flex align-items-center mt-4">
                                </div>
                            </div><!-- End Tab 1 Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End PROFIL -->
    <!-- JURUSAN SEKOLAH -->
        <section id="jurusan" class="jurusan p-5">
            <div class="section-header p-4">
                <p></p>
                <p></p>
                <p></p>
                <h1 class="title">JURUSAN SEKOLAH</h1>
            </div>
            <div class="container">
                <div class="card">
                    <div class="frmt">
                        <img src="img/sma_bck.jpg" alt="">
                        <h2>MIPA</h2> 
                    </div>
                    <div class="isi">                       
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus perferendis iure reiciendis incidunt. Saepe, voluptas adipisci corporis molestiae natus ducimus unde, aut odit quisquam recusandae temporibus laborum deserunt debitis at.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="frmt">
                        <img src="img/sma_bck.jpg" alt="">
                        <h2>IPS</h2> 
                    </div>
                    <div class="isi">                       
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus perferendis iure reiciendis incidunt. Saepe, voluptas adipisci corporis molestiae natus ducimus unde, aut odit quisquam recusandae temporibus laborum deserunt debitis at.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="frmt">
                        <img src="img/sma_bck.jpg" alt="">
                        <h2>SASTRA</h2> 
                    </div>
                    <div class="isi">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus perferendis iure reiciendis incidunt. Saepe, voluptas adipisci corporis molestiae natus ducimus unde, aut odit quisquam recusandae temporibus laborum deserunt debitis at.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- End JURUSAN -->
    <!-- PROGRAM SEKOLAH -->
        <hr class="garis">
        <div class="program">
            <div class="jumbotron jumbotron-fluid">
                <section id="hero-animated" class="hero-animated d-flex align-items-center">
                    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
                        <h1 class="title">PROGRAM SEKOLAH</h1>
                    </div>
                </section>
            </div>
        <!-- PEMBANGUNAN -->
            <section id="pembangunan" class="pembangunan p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <p></p>
                        <p></p>
                        <p></p>
                        <h1 class="title">PEMBANGUNAN</h1>
                    </div>
                </div>
            </section>
        <!-- End PEMBANGUNAN -->

        <!-- PRAKTIKUM -->
            <section id="praktikum" class="praktikum p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <p></p>
                        <p></p>
                        <p></p>
                        <h1 class="title">PRAKTIKUM</h1>
                    </div>
                </div>
            </section>
        <!-- End PRAKTIKUM -->

        <!-- LOMBA -->
            <section id="lomba" class="lomba p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <p></p>
                        <p></p>
                        <p></p>
                        <h1 class="title">LOMBA - LOMBA</h1>
                    </div>
                </div>
            </section>
        <!-- End LOMBA -->

        <!-- KUNJUNGAN INDUSTRI -->
            <section id="kunjungan" class="kunjungan p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <p></p>
                        <p></p>
                        <p></p>
                        <h1 class="title">KUNJUNGAN INDUSTRI</h1>
                    </div>
                </div>
            </section>
        <!-- End KUNJUNGAN -->

        <!-- EKSTRAKURIKULER -->
            <section id="ekstrakurikuler" class="ekstrakurikuler p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <h1 class="title">EKSTRAKURIKULER</h1>
                    </div>
                    
                    <div class="row g-3 g-lg-5">
                        <div class="col-sm-4">
                            <a class="btn eks1" href="">
                                <h2 class="card-title ">Pramuka</h2>
                            </a>
                        </div>
                        <div class="col col-sm-4">
                            <a class="btn eks2" href="">
                                <h2 class="card-title ">Karya Ilmiah</h2>
                            </a>
                        </div>  
                        <div class="col-sm-4">
                            <a class="btn eks3" href="">
                                <h2 class="card-title ">Kesenian</h2>
                            </a>
                        </div>  
                        <div class="col-sm-4">
                            <a class="btn eks4" href="">
                                <h2 class="card-title">Keolahragaan</h2>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn eks5" href="">
                                <h2 class="card-title">Keagamaan</h2>
                            </a>
                        </div>  
                        <div class="col-sm-4">
                            <a class="btn eks6" href="">
                                <h2 class="card-title">Entrepreneur</h2>
                            </a>
                        </div> 
                        <div class="col-sm-4">
                            <a class="btn eks4" href="">
                                <h2 class="card-title">Keolahragaan</h2>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn eks5" href="">
                                <h2 class="card-title">Keagamaan</h2>
                            </a>
                        </div>  
                        <div class="col-sm-4">
                            <a class="btn eks6" href="">
                                <h2 class="card-title">Entrepreneur</h2>
                            </a>
                        </div>  
                    </div>
                </div>
            </section>
        <!-- End EKSKUL -->

        <!-- KERJA SAMA -->
            <section id="kerja_sama" class="kerja_sama p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <h1 class="title">KERJA SAMA</h1>
                    </div>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/sma_bck.jpg" class="d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/sma_bck.jpg" class="d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/sma_bck.jpg" class="d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </section>
        <!-- End KERJA SAMA -->

        <!-- MAGANG -->
            <section id="magang" class="magang p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <h1 class="title">MAGANG</h1>
                    </div>
                </div>
            </section>
        <!-- End MAGANG -->
        </div>
    <!-- End PROGRAM SEKOLAH -->
    </div>
@endsection
<!-- End #main -->