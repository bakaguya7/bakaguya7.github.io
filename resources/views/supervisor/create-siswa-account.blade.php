@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
  @section('main')
    <main id="main" class="main">
      <!-- page -->
      <div class="pagetitle">
        <h1>Data pembayaran siswa</h1>
        <nav>
        <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Supervisor</li>
                <li class="breadcrumb-item active">Hak Akses</li>
                <li class="breadcrumb-item active">Create Siswa Account</li>
            </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="container bg-white p-4 rounded">
        <form method="POST" action="/hak-akses">
            <div class="row">
                <div class="col-6">
                    <div class="formg-custom">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap Siswa">
                    </div>
                    <div class="formg-custom">
				        <label for="password">Password</label>
			    	    <input type="password" class="form-control" id="password" placeholder="Password">
			        </div>
                </div>
                <div class="col-6">
                    <div class="formg-custom">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="siswa@students.school.ac.id">
                    </div>
                    <!-- <div class="formg-custom">
				        <label for="password">Konfirmasi Password</label>
			    	    <input type="password" class="form-control" id="password" placeholder="Konfirmasi Password">
			        </div> -->
                </div>
            </div>
            <div class="row">
                <div class="formg-custom d-flex justify-content-center">
                    <button name="submit" type="submit" class="btn btn-primary btn-custom">SUBMIT</button>
                </div>
            </div>
		</form>
        </div>
	  	
      </section>

    </main>
  @endsection
<!-- End PAGES -->