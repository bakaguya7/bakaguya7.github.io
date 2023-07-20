@extends('layout.landing-home')

{{-- MAIN HOME --}}
@section('isi-halaman')
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th class="col-custom">NO</th>
            <th>JUDUL</th>
            <th>GAMBAR</th> 
            <th>DESKRIPSI</th>
            <th>FITUR</th>
        </tr>
    </thead>
    <tbody>
        @if($Praktikum->count() > 0)
            @foreach($Praktikum as $praktik)
            <tr>                             
                <td class="align-middle col-custom">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $praktik->judul }}</td>
                <td class="align-middle"><img src="{{ asset('storage/' . $praktik->image) }}" alt="">
                    
                    {{-- <img width="150px" src="{{ asset('storage/' . gambar) }}" 
                    alt="{{ $gambar->category->judul }}" ></td> --}}
                <td class="align-middle">{{ $praktik->deskripsi }}</td>
                <td class="px-0 py-0">
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
                </td>                            
            </tr>
            @endforeach
        @else
        <tr>
            <td colspan="5" class="text-center">DATA KOSONG</td>
        </tr>
        @endif
    </tbody>
</table>

@endsection