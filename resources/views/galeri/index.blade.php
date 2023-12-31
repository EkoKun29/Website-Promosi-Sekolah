@extends('layouts.main')
@section('content')
<section id="hero-satu" class="px-0">
    <div class="container text-center text-white">
        <div class="hero-title" data-aos="fade-up">
        <div class="hero-text">Galeri <br> SMK Kesuma Margoyoso Pati</div>
        </div>
    </div>
</section>

<div class="services-area ">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70"  data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <span><h2>Foto Kegiatan</h2></span>
                    
                </div> 
            </div>
        </div>
        <!-- Baris dengan 4 tombol berdekatan -->
        <div class="row justify-content-center mt-4" id="linkContainer" data-aos="zoom-out">
        <div class="col-lg-auto col-md-auto col-12 text-center mb-4">
        <a href="{{ route('app.photo') }}" class="btn btn-custom">ALL</a>
        </div>
        <div class="col-lg-auto col-md-auto col-12 text-center mb-4">
        <a href="{{ route('photo.category', 'kegiatan') }}" class="btn btn-custom">KEGIATAN</a>
        </div>
        <div class="col-lg-auto col-md-auto col-12 text-center mb-4">
        <a href="{{ route('photo.category', 'prestasi') }}" class="btn btn-custom">PRESTASI</a>
        </div>
        <div class="col-lg-auto col-md-auto col-12 text-center mb-4">
        <a href="{{ route('photo.category', 'fasilitas') }}" class="btn btn-custom">FASILITAS</a>
        </div>
        </div>

        <div class="row" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
            @foreach ($photo as $p)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                <a class="image-link" href="{{ $p->image_url }}">
                    <img src="{{ $p->image_url }}" class="img-fluid" alt="">
                    
                </a>
                    </div>
                <!--<div class="team-caption">-->
                <!--    <span>{{ $p->judul }}</span>-->
                <!--</div>-->
                
            </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .btn-custom {
        background-color: white; /* Warna latar belakang putih */
        color: black; /* Warna teks hitam */
        border-color: #3EB489; /* Warna border abu-abu */
    }

    .btn-custom:hover, 
    .btn-custom:focus,
    .btn-custom:active {
        background-color: #3EB489; /* Warna latar belakang abu-abu saat hover/fokus/click */
        color: white; /* Warna teks putih */
    }
</style>
@endsection
