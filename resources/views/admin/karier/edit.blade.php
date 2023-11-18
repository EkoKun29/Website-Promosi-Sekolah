@extends('layouts.main')
@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8 ">
        <div class="d-flex">
            <a href="{{ route('karier') }}">Berita</a>
            <div class="mx-1"> . </div>
            <a href="">Edit Loker</a>
        </div>
        <h4>Halaman Edit Karier</h4>

        <form action="{{ route('karier.update', $karier->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="">Masukkan Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                value="{{ old('judul', $karier->judul) }}">
    
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <div class="form-group mb-4">
                <label for="">Pilih Foto </label>
                <div class="col-lg-4">
                    <img src="{{ asset('storage/karier/' . $karier->image) }}" height="150" alt="">
                </div>
                <input type="hidden" name="old_image" value="{{ $karier->image }}">
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
    
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="form-group mb-4">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control" id="summernote" name="desc">{!! isset($previousDesc) ? $previousDesc : $karier->desc !!}</textarea>
            
                <script>
                    $('#summernote').summernote({
                        placeholder: 'Hello Bootstrap 4',
                        tabsize: 2,
                        height: 100
                    });
                </script>
                
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