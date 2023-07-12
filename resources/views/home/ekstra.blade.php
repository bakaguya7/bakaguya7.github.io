@extends('layout.landing-home')

@section('isi-halaman')
    <div class="home">
        <div class="ekskul">
            <div class="container p-5">
                @if($Data->count() > 0)
                <div class="card">
                    <div class="card-item " >
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/kerja_sama/astra.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{ $DataGuru->namalengkap }}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-up"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card-item " >
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="img/kerja_sama/gameloft.jpg" class="img-fluid rounded-start" alt="...">
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
                        <img src="img/kerja_sama/gmedia.jpeg" class="img-fluid rounded-start" alt="...">
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
                            <img src="img/kerja_sama/shopee.jpg" class="img-fluid rounded-start" alt="...">
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
                    <img src="img/kerja_sama/shopee.jpg" class="img-fluid rounded-start" alt="...">
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
    </div>
@endsection