@extends('layouts.main')
@section('content')

<div class="services-area w-padding2">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12 col-lg-3 rectangle">
                <!-- Section Tittle -->
                <div class="section-tittle mb-50" data-aos="zoom-out-right">
                    <span><h2>Kabar Berita</h2></span>
                    
                </div> 
            </div>
        </div>

    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
  
          <div class="row">
            @foreach($berita as $item)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
              <div class="member blue-background shadow">
                <div class="member-img">
                  <img src="{{ url('storage/artikel/' . basename($item->image_url)) }}" class="img-fluid alt="">

                  {{-- <img src="{{ $item->image_url }}" class="img-fluid" alt=""> --}}
                  <div class="social">
                    <a href="{{ route('app.slug', $item->slug) }}">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>

                  </div>
                </div>
                <div class="member-info hero-text">
                    <span><b>{{ $item->created_at }}</b></span>
                  <h4>{{ $item->judul }}</h4>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    
</div>
</div>
@endsection