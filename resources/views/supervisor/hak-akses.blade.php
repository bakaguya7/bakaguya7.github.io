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
            </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
		<a href="/create-siswa-account" class="btn btn-primary">Create</a>
	  	<!-- <form>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form> -->
      </section>

    </main>
  @endsection
<!-- End PAGES -->