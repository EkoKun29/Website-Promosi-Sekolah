@extends('layouts.main')
@section('content')
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">
        <h4 class="fw-bold mb-3">Halaman Berita</h4>
        <p>Selamat datang di halaman dashboard admin</p>
        
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0" >
                    <img src="{{ asset('assets/img/NASKAH/li-1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Blog Berita</h5>
                      <p class="card-text">Jumlah peserta didik dalam setiap konsentrasi keahlian.</p>
                      <a href="{{ route('berita') }}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0" >
                    <img src="{{ asset('assets/img/TAB/tab1.JPG') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Photo Kegiatan</h5>
                      <p class="card-text">Kegiatan bidang Teknik Alat Berat SMK Kesuma Pati.</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

@endsection