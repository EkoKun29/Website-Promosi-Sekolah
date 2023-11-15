@extends('layouts.main')
@section('content')
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">
        <h3 class="fw-bold mb-3">Halaman Management Berita</h3>
        <p>Atur dan kelola berita kegiatan SMK Kesuma Margoyoso Pati.</p>

        <div class="d-flex">
            <a href="{{ route('dashboard') }}">Home</a>
            <div class="mx-1">/</div>
            <a href="{{ route('dashboard') }}">Berita</a>
        </div>
        
    </div>
</section>

@endsection