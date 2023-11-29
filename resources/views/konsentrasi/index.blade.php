@extends('layouts.main')
@section('content')
<div class="services-area ">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70" data-aos="zoom-out-right">
                    <span>SMK KESUMA MARGOYOSO PATI</span>
                    <h2>Bidang Keahlian</h2>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center mt-4" id="linkContainer" data-aos="zoom-out">
            <div class="col-lg-auto col-md-auto col-3 text-center mb-4">
                <a href="{{ route('app.konsentrasi') }}" class="btn btn-custom">ALL</a>
            </div>
            <div class="col-lg-auto col-md-auto col-3 text-center mb-4">
                <a href="{{ route('konsentrasi.category', 'AKUNTANSI') }}" class="btn btn-custom">AKUNTANSI</a>
            </div>
            <div class="col-lg-auto col-md-auto col-3 text-center mb-4">
                <a href="{{ route('konsentrasi.category', 'TEKNIK ALAT BERAT') }}" class="btn btn-custom">TAB</a>
            </div>
            <div class="col-lg-auto col-md-auto col-3 text-center mb-4">
                <a href="{{ route('konsentrasi.category', 'TEKNIK AUDIO VISUAL') }}" class="btn btn-custom">TAV</a>
            </div>
            <div class="col-lg-auto col-md-auto col-3 text-center mb-4">
                <a href="{{ route('konsentrasi.category', 'TEKNIK KOMPUTER JARINGAN') }}" class="btn btn-custom">TKJ</a>
            </div>
            <div class="col-lg-auto col-md-auto col-3 text-center mb-4">
                <a href="{{ route('konsentrasi.category', 'TEKNIK SEPEDA MOTOR') }}" class="btn btn-custom">TSM</a>
            </div>
            <div class="col-lg-auto col-md-auto col-3 text-center mb-4">
                <a href="{{ route('konsentrasi.category', 'TEKNIK KENDARAAN RINGAN') }}" class="btn btn-custom">TKR</a>
            </div>
        </div>
        <div class="row" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom">
        @foreach ($konsentrasi as $ks)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <a class="image-link" href="{{ $ks->image_url }}">
                            <img src="{{ $ks->image_url }}" class="img-fluid" alt="">
                </a>
                <h4><b>{{ $ks->nama }}</b></h4>
            <h6>{{ $ks->jurusan }}</h6>
            <p>{{ $ks->desc }}</p>
            </div>
                {{-- <div class="team-caption">
                    <span>{{ $p->judul }}</span>
                </div> --}}
                @endforeach
            </div>
            </div>
        </div>
<style>
    .btn-custom {
        background-color: white; /* Warna latar belakang putih */
        color: black; /* Warna teks hitam */
        border-color: gray; /* Warna border abu-abu */
    }

    .btn-custom:hover, 
    .btn-custom:focus,
    .btn-custom:active {
        background-color: gray; /* Warna latar belakang abu-abu saat hover/fokus/click */
        color: white; /* Warna teks putih */
    }
</style>
<style>
    .btn-custom {
        background-color: white; /* Warna latar belakang putih */
        color: black; /* Warna teks hitam */
        border-color: gray; /* Warna border abu-abu */
    }

    .btn-custom:hover, 
    .btn-custom:focus,
    .btn-custom:active {
        background-color: gray; /* Warna latar belakang abu-abu saat hover/fokus/click */
        color: white; /* Warna teks putih */
    }
</style>
@endsection