@extends('layouts.main')
@section('content')
<section style="margin-top: 30px">
    <div class="container col-xxl-8 py-5">
        <h4 class="fw-bold mb-3">DASHBOARD</h4>
        <p>Selamat Datang di Halaman Dashboard</p>
        
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0" >
                    <img src="{{ asset('assets/img/NASKAH/li-1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">HALAMAN BERITA</h5>
                      <p class="card-text">Halaman Upload Beita Terbaru</p>
                      <a href="{{ route('berita') }}" class="btn btn-primary">Upload</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0" >
                    <img src="{{ asset('assets/img/TAB/tab1.JPG') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">FOTO KEGIATAN</h5>
                      <p class="card-text">Halaman Upload Foto Kegiatan</p>
                      <a href="{{ route('photo') }}" class="btn btn-primary">Upload</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
              <div class="card shadow-sm rounded-3 border-0" >
                  <img src="{{ asset('assets/img/TAB/tab1.JPG') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">FOTO GURU</h5>
                    <p class="card-text">Halaman Upload Foto Guru</p>
                    <a href="{{ route('guru') }}" class="btn btn-primary">Upload</a>
                  </div>
                </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow-sm rounded-3 border-0" >
                <img src="{{ asset('assets/img/TAB/tab1.JPG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">KONSENTRASI KEAHLIAN</h5>
                  <p class="card-text">Halaman Upload Foto Konsentrasi Keahlian</p>
                  <a href="{{ route('konsentrasi') }}" class="btn btn-primary">Upload</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow-sm rounded-3 border-0" >
              <img src="{{ asset('assets/img/TAB/tab1.JPG') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">KARIR</h5>
                <p class="card-text">Halaman Upload Karir</p>
                <a href="{{ route('karier') }}" class="btn btn-primary">Upload</a>
              </div>
            </div>
      </div>
        </div>
    </div>
</section>

@endsection