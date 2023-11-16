@extends('layouts.main')
@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8 ">
        <div class="d-flex">
            <a href="{{ route('berita') }}">Berita</a>
            <div class="mx-1"> . </div>
            <a href="">Edit Berita</a>
        </div>
        <h4>Halaman Edit Berita</h4>

        <form action="{{ route('berita.update', $berita->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="">Masukkan Judul Berita</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                value="{{ old('judul', $berita->judul) }}">
    
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="form-group mb-4">
                <label for="">Pilih Foto Berita</label>
                <input type="hidden" name="old_image" value="{{ $berita->image }}">
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
    
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group mb-4">
                <label for="desc">Artikel Berita</label>
                <textarea class="form-control" id="summernote" name="desc">{{ !! $berita->desc !! }}</textarea>
            
                @error('desc')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        
    </div>
</section>

@endsection