@extends('admin.admin')

<!-- ======= BAGIAN PAGES ======= -->
@section('admin')
{{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Vendor CSS ICONS  Files -->
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<main id="main" class="main">
    <div class="pagetitle ">
        <h1 >Jadwal Mengajar</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">ADMIN</li> -->
                    <li class="breadcrumb-item active">Jadwal Mengajar</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="container bg-white rounded p-5">
                <form action="/jadwal-mengajar-store" method="POST">
                    @csrf
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="tgl">Tanggal</label>
                            <input type="date" name="tgl" class="form-control" placeholder="Tanggal">
                        </div>
                        <div class="col">
                            <label for="jam">Jam</label>
                            <input type="text" name="jam" class="form-control" placeholder="09.20">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="mapel">Mapel</label>
                            <input type="text" name="mapel" class="form-control" placeholder="Mata Pelajaran">
                        </div>
                        <div class="col">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                        </div>
                    </div>
                    <div class="row mb-3 text-dark">
                        <div class="col">
                            <label for="namaguru">Nama Guru</label>
                            <select class="form-control" name="namaguru">
                                @foreach($DataGuru as $data)
                                    <option value="{!! $data->namalengkap !!}">{{ $data->namalengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid">
                            <button class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </section>
</main>

{{-- css --}}
<style>

    .pagetitle {
        text-align: center;
    }
    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/
    :root {
    scroll-behavior: smooth;
    }

    body {
    font-family: "Open Sans", sans-serif;
    background: #f6f9ff;
    color: #444444;
    }

    a {
    color: #4154f1;
    text-decoration: none;
    }

    a:hover {
    color: #717ff5;
    text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
    font-family: "Nunito", sans-serif;
    }
    /* custom */
    .login-custom {
    background-color: white;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    padding: 8%;
    }
    .login-custom button {
    color: white;
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #012970;
    }

    .logo-login {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
    }
    .logo-login {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
    }
    @keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
    }

    .formg-custom {
    padding: 10px;
    margin-bottom: 15px;
    }

    .btn-custom {
    width: 250px;
    font-weight: bold;
    color: white;
    }


    /* .hcolor-custom {
    background-color: #513483 !important;
    }

    .header-custom {
    border-bottom: 3px solid #a2aaa6e3;
    }

    .hcolor-custom ul li {
    background-color: #513483 !important;
    } */

    .dropdown-custom li a span, .dropdown-custom li a i {
    color: white;
    }

    .judul {
    font-size: 20px !important;
    color: white !important;
    }

    .img-max{
    max-width: 300px;
    max-height: 300px;
    height: 100%;
    width: 100%;
    }

    .img-min{
    max-width: 150px;
    max-height: 150px;
    height: 100%;
    width: 100%;
    }
    /* custom */

    /*--------------------------------------------------------------
    # Main
    --------------------------------------------------------------*/
    #main {
    margin-top: 35px;
    padding: 20px 30px;
    transition: all 0.3s;
    }

    @media (max-width: 1199px) {
    #main {
        padding: 20px;
    }
    }

    /*--------------------------------------------------------------
    # Page Title
    --------------------------------------------------------------*/
    .pagetitle {
    margin-bottom: 10px;
    }

    .pagetitle h1 {
    font-size: 24px;
    margin-bottom: 0;
    font-weight: 600;
    color: #012970;
    }

    .header {
    transition: all 0.5s;
    z-index: 997;
    height: 60px;
    box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
    background-color: #513483;
    padding-left: 20px;
        /* Toggle Sidebar Button */
    /* Search Bar */
    }


    /*--------------------------------------------------------------
    # Sidebar
    --------------------------------------------------------------*/
    .sidebar {
    position: fixed;
    top: 60px;
    left: 0;
    bottom: 0;
    width: 300px;
    z-index: 996;
    transition: all 0.3s;
    padding: 20px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #aab7cf transparent;
    box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
    background-color: #9177be;
    }

    @media (max-width: 1199px) {
    .sidebar {
        left: -300px;
    }
    }

    .sidebar::-webkit-scrollbar {
    width: 5px;
    height: 8px;
    background-color: #fff;
    }

    .sidebar::-webkit-scrollbar-thumb {
    background-color: #aab7cf;
    }

    @media (min-width: 1200px) {

    #main,
    #footer {
        margin-left: 150px;
    }
    }

    @media (max-width: 1199px) {
    .toggle-sidebar .sidebar {
        left: 0;
    }
    }

    @media (min-width: 1200px) {

    .toggle-sidebar #main,
    .toggle-sidebar #footer {
        margin-left: 0;
    }

    .toggle-sidebar .sidebar {
        left: -300px;
    }
    }

    .sidebar-nav {
    padding: 0;
    margin: 0;
    list-style: none;
    }

    .sidebar-nav li {
    padding: 0;
    margin: 0;
    list-style: none;
    }

    .sidebar-nav .nav-item {
    margin-bottom: 5px;
    }

    .sidebar-nav .nav-heading {
    font-size: 11px;
    text-transform: uppercase;
    color: #899bbd;
    font-weight: 600;
    margin: 10px 0 5px 15px;
    }

    .sidebar-nav .nav-link {
    display: flex;
    align-items: center;
    font-size: 15px;
    font-weight: 600;
    color: #041dff;
    transition: 0.3;
    background: #f6f9ff;
    padding: 10px 15px;
    border-radius: 4px;
    }

    .sidebar-nav .nav-link i {
    font-size: 16px;
    margin-right: 10px;
    color: #0019f8;
    }

    .sidebar-nav .nav-link.collapsed {
    color: #012970;
    background: #fff;
    }

    .sidebar-nav .nav-link.collapsed i {
    color: #899bbd;
    }

    .sidebar-nav .nav-link:hover {
    color: #4154f1;
    background: #f6f9ff;
    }

    .sidebar-nav .nav-link:hover i {
    color: #050820;
    }

    .sidebar-nav .nav-link .bi-chevron-down {
    margin-right: 0;
    transition: transform 0.2s ease-in-out;
    }

    .sidebar-nav .nav-link:not(.collapsed) .bi-chevron-down {
    transform: rotate(180deg);
    }

    .sidebar-nav .nav-content {
    padding: 5px 0 0 0;
    margin: 0;
    list-style: none;
    }

    .sidebar-nav .nav-content a {
    display: flex;
    align-items: center;
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    transition: 0.3;
    padding: 10px 0 10px 40px;
    transition: 0.3s;
    }

    .sidebar-nav .nav-content a i {
    font-size: 6px;
    margin-right: 8px;
    line-height: 0;
    border-radius: 50%;
    }

    .sidebar-nav .nav-content a:hover,
    .sidebar-nav .nav-content a.active {
    color: #bfc5fc;
    }

    .sidebar-nav .nav-content a.active i {
    background-color: #4154f1;
    }


    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    .footer {
    padding: 20px 0;
    font-size: 14px;
    transition: all 0.3s;
    border-top: 1px solid #cddfff;
    }

    .footer .copyright {
    text-align: center;
    color: #012970;
    }

    .footer .credits {
    padding-top: 5px;
    text-align: center;
    font-size: 13px;
    color: #012970;
    }


    </style>
{{-- end css --}}

@endsection 