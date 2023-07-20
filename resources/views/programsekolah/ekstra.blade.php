@extends('layout.landing-home')

{{-- MAIN HOME --}}
@section('isi-halaman')
 <div class="container p-5">
    <section class="section dashboard">
        <div class="container bg-white rounded p-5">
        <!-- @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif -->
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h3>Program Ekstrakurikuler</h3>
                <a href="/praktikum-create" class="btn">
                    <i class="bi bi-plus-circle-fill svg4" style="font-size: 1.8rem;"></i>
                </a>
            </div>  
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th class="col-custom">NO</th>
                        <th>JUDUL</th>
                        <th>GAMBAR</th> 
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    @if($Ekskul->count() > 0)
                        @foreach($Ekskul as $praktik)
                        <tr>                             
                            <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $praktik->judul }}</td>
                            <td class="align-middle"><img src="{{ asset('storage/' . $praktik->image) }}" alt="">
                                
                                {{-- <img width="150px" src="{{ asset('storage/' . gambar) }}" 
                                alt="{{ $gambar->category->judul }}" ></td> --}}
                            <td class="align-middle">{{ $praktik->keterangan }}</td>
                            {{-- <td class="px-0 py-0">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('praktikum.edit', $praktik->id) }}" class="btn">
                                        <i class="bi bi-pen-fill svg1" style="font-size: 1.3rem;"></i>
                                    </a>
                                    <form action="{{ route('praktikum.destroy', $praktik->id) }}" class="" method="POST" type="button" onsubmit="return confirm('Delete?'">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn"><i class="bi bi-trash3-fill svg2" style="font-size: 1.3rem;"></i></button>
                                    </form>
                                </div>
                            </td>                             --}}
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="text-center">DATA KOSONG</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            
        </div>
    </section>
</div>
@endsection