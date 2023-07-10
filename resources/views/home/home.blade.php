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

                <section class="section dashboard">
                    <div class="profil-sekolah text-center p-3">
                      <h2>SEJARAH SEKOLAH</h2>
                      <img src="img/profile sekolah.jpg" alt="" width="700px">
                      <div class="visi p-3">
                        <h2>Visi</h2>
                        <p>Terwujudnya sekolah yang mampu menghasilkan keluaran yang berakar budaya bangsa, berwawasan kebangsaan dan lingkungan hidup serta bercakrawala global</p>
                      </div>
                      <div class="misi">
                        <h2>Misi</h2>
                        <ol>
                          <li>Mengembangkan kemampuan akademik berstandar internasional dengan menerapkan dan mengembangkan kurikulum lokal, nasional, maupun internasional,</li>
                          <li>Mengembangkan kedisiplinan, kepemimpinan serta ketakwaan melalui berbagai kegiatan kesiswaan baik dalam organisasi siswa intrasekolah ,   ekstrakurikuler, kegiatan keagamaan, maupun kegiatan lain yang berakar budaya bangsa,</li>
                          <li>Mengembangkan sikap berkompetisi yang positif melalui berbagai bidang dan kesempatan dengan mengedepankan semangat kebangsaan</li>
                          <li>Menanamkan nilai keteladanan dan budi pekerti luhur melalui pengembangan kultur sekolah yang sesuai dengan norma keagamaan, sosial kemasyarakatan, kebangsaan serta berwawasan lingkungan.</li>
                        </ol>
                      </div>
          
                      <div>
                        <H2>PEMBANGUNAN SEKOLAH</H2>
                        <p class="pembangunan">Setelah perang kemerdekaan usai, dibenahilah sistem pendidikan di sekolah menegah atas, sekolah yang sudah ada adalah SMA Bagian A ( Sastra) dan SMA bagian B (Eksakta) . Sekolah ini awalnya didirikan untuk menutupi kekurangan tenaga pamong praja di negara bagian Yogyakarta pada tahun 1950. Mengingat sejak Jakarta ditetapkan menjadi Ibu Kota RIS pada tahun 1949, maka kegiatan pemerintah pusat berangsur-angsur dipindahkan dari Yogyakarta ke Jakarta, bersama-sama dengan pegawai pamong prajanya. Untuk mengatasi kekurangan atau bahkan kekosongan pegawai ini, digelar pertemuan antara tokoh-tokoh UGM dengan para pendidik yang ada, merumuskan upaya apa yang tepat dan apa yang dapat dilaksanakan, untuk mengisi kekosongan formasi pamong praja tersebut. Dari hasil rapat itu, diputuskan untuk mendirikan sebuah sekolah.
          
                          <br>Asal mula berdirinya SMA Negeri 6 Yogyakarta tidak dapat dipisahkan dengan SMA Bagian A (Sastra) yang terletak di Jalan C.Simanjuntak 2 ( dahulu jalan Jati no 1) yang pada waktu itu dipimpin bapak R. DS Hadiwidjono. Atas prakarsa bapak R.DS Hadiwidjono bersama-sama bapak Jurjanal, Prof.Ir.Harjono, Prof.Ir.Supardi dan Prof.Suhardi, S.H didirikanlah sekolah menengah umum atas negeri bagian C ( Yuridis Ekonomis) pada tanggal 17 September 1949 dan ditunjuk selaku direkturnya bapak R.DS Haqdiwidjono yang pada saat itu juga menjabat sebagai direktur SMA bagian A (Sastra) Yogyakarta.
                        <br>Pada awalnya sekolah baru ini dinamai SMA Yuridis Ekonomi. Siswanya diambil dari pegawai-pegawai yang berijazah SMP/SLTP dan ex-TP (Tentara Pelajar). Karena pada saat itu jenis SMA yang ada adalah SMA/A dan SMA/B maka akhirnya SMA Yuridis Ekonomi berubah nama menjadi SMA/C, sesuai dengan SK Pendirian (Instillingen Besluit) yang diterbitkan oleh Menteri Pendidikan, Pengajaran dan Kebudayaan pada 1 Juli 1950. Pada saat itu, SMA Negeri C terbagi menjadi 2 sekolah yaitu SMA IC masuk siang dan SMA IIC masuk pagi dalam satu lokasi yang sama.
          
                        Adanya kedua jenis sekolah menengah atas tersebut belum dapat memenuhi kebutuhan masyarakat, karena itu dibuka jurusan baru yang mempunyai dasar sosial ekonomi yuridis yang kemudian diberi nama SMA bagian C.
                        </p>
                      </div>
                    </div>
                </section>
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
                        <img src="img/jurusan/mipa.jpeg" alt="">
                        <h2>MIPA</h2> 
                    </div>
                    <div class="isi">                       
                        <p>
                            Jurusan MIPA (Matematika dan Ilmu Pengetahuan Alam) merupakan salah satu jurusan yang fokus pada pemahaman dan penerapan ilmu pengetahuan alam, matematika, dan teknologi.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="frmt">
                        <img src="img/jurusan/ips.png" alt="">
                        <h2>IPS</h2> 
                    </div>
                    <div class="isi">                       
                        <p>
                            Jurusan IPS (Ilmu Pengetahuan Sosial) bertujuan untuk mengembangkan pemahaman siswa tentang berbagai aspek sosial, ekonomi, dan politik dalam masyarakat.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="frmt">
                        <img src="img/jurusan/sastra.jpg" alt="">
                        <h2>SASTRA</h2> 
                    </div>
                    <div class="isi">
                        <p>
                            Jurusan Sastra di SMA adalah program studi yang berfokus pada pemahaman dan pengapresiasian karya sastra dalam berbagai bentuknya, seperti puisi, prosa, drama, dan karya sastra lainnya.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- End JURUSAN -->
    <!-- PROGRAM SEKOLAH -->
        <div class="program">
            {{-- <div class="jumbotron jumbotron-fluid">
                <section id="hero-animated" class="hero-animated d-flex align-items-center">
                    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
                        <h1 class="title">PROGRAM SEKOLAH</h1>
                    </div>
                </section>
            </div> --}}
        <!-- PEMBANGUNAN -->
            <section id="pembangunan" class="pembangunan p-2">
                <div class="container p-5">
                    <div class="section-header p-4">
                        <p></p>
                        <p></p>
                        <p></p>
                        <h1 class="title">PEMBANGUNAN</h1>
                    </div>
                    <!-- Carousel wrapper -->
                        <div id="carouselExampleDark" class="carousel carousel-light slide" data-mdb-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                            <!-- Inner -->
                            <div class="carousel-inner">
                            <!-- Single item -->
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/pembangunan/one.jpeg" class="d-block w-100" />
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Tahun .....</h5>
                                    {{-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> --}}
                                    </div>
                                </div>
                            
                                <!-- Single item -->
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="img/pembangunan/two.jpg" class="d-block w-100" />
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Tahun ...</h5>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                                    </div>
                                </div>
                            
                                <!-- Single item -->
                                <div class="carousel-item">
                                    <img src="img/pembangunan/tree.jpg" class="d-block w-100" />
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>SMA Sekarang</h5>
                                    {{-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Inner -->
                        
                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                        <!-- Carousel wrapper -->
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

                        <div class="row g-5 g-sm-1">

                            <div class="col-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                              <div class="service-item">
                                <div class="img">
                                  <img src="img/praktikum/biologi.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="details position-relative">
                                  <a href="#" class="stretched-link">
                                    <h3>BIOLOGI</h3>
                                  </a>
                                </div>
                              </div>
                            </div><!-- End Service Item -->
                  
                            <div class="col-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="service-item">
                                  <div class="img">
                                    <img src="img/praktikum/kimia.jpg" class="img-fluid" alt="">
                                  </div>
                                  <div class="details position-relative">
                                    <a href="#" class="stretched-link">
                                      <h3>KIMIA</h3>
                                    </a>
                                  </div>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="service-item">
                                  <div class="img">
                                    <img src="img/praktikum/fisika.jpeg" class="img-fluid" alt="" height="100px">
                                  </div>
                                  <div class="details position-relative">
                                    <a href="#" class="stretched-link">
                                      <h3>FISIKA</h3>
                                    </a>
                                  </div>
                                </div>
                              </div><!-- End Service Item -->
                    
                              <div class="col-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                  <div class="service-item">
                                    <div class="img">
                                      <img src="img/praktikum/geo.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="details position-relative">
                                      <a href="#" class="stretched-link">
                                        <h3>GEOGRAFI</h3>
                                      </a>
                                    </div>
                                  </div>
                              </div><!-- End Service Item -->
                  
                          </div>
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

                        <div class="card">
                            <div class="card-item " >
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="img/sma_bck.jpg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="card-item " >
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="img/sma_bck.jpg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="card-item " >
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="img/sma_bck.jpg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="card-item " >
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="img/sma_bck.jpg" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
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
                    <div class="ekskul">
                        <div class="row g-3 g-lg-5" data-aos="zoom-in" data-aos-delay="200">
                            <div class="col-sm-4">
                                <a class="btn eks1" href="">
                                    <h2 class="card-title ">PRAMUKA</h2>
                                </a>
                            </div>
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks2" href="">
                                    <h2 class="card-title ">KARYA ILMIAH</h2>
                                </a>
                            </div>  
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks3" href="">
                                    <h2 class="card-title ">KESENIAN</h2>
                                </a>
                            </div>  
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks4" href="">
                                    <h2 class="card-title">BASKET</h2>
                                </a>
                            </div>
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks5" href="">
                                    <h2 class="card-title">SEPAK BOLA</h2>
                                </a>
                            </div>  
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks6" href="">
                                    <h2 class="card-title">TENIS MEJA</h2>
                                </a>
                            </div> 
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks7" href="">
                                    <h2 class="card-title">BULU TANGKIS</h2>
                                </a>
                            </div>
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks8" href="">
                                    <h2 class="card-title">TATA RIAS</h2>
                                </a>
                            </div>  
                            <div class="col col-sm-4" data-aos="zoom-in" data-aos-delay="200">
                                <a class="btn eks9" href="">
                                    <h2 class="card-title">KEAGAMAAN</h2>
                                </a>
                            </div>  
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
                    <div class="card">
                        <div class="card-item " >
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/kerja_sama/astra.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-up"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="card-item " >
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/sma_bck.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-up"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="card-item " >
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/sma_bck.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-up"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="card-item " >
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/sma_bck.jpg" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-up"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>
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
                    <div class="row g-1 g-lg-5">
                        <div class="col-md-4 ">
                            <div class="card" style="width: 18rem;">
                                <img src="img/sma_bck.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="img/sma_bck.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="img/sma_bck.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="card" style="width: 18rem;">
                                <img src="img/sma_bck.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="img/sma_bck.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="img/sma_bck.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!-- End MAGANG -->
        </div>
    <!-- End PROGRAM SEKOLAH -->
    </div>
@endsection
<!-- End #main -->