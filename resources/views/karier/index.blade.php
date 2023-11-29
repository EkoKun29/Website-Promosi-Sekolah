@extends('layouts.main')
@section('content')

<div class="services-area ">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70" data-aos="zoom-out-right">
                    <span></span>
                    <h2>Lowongan Kerja</h2>
                </div> 
            </div>
        </div>
        
        <div class="row py-5" data-aos="flip-up">
            @foreach($karier as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ $item->image_url }}" alt="">
                    <div class="services-img">
                        
                        </div>
                        <div class="services-caption">
                            <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
                            <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                            <a href="{{ route('app.slugkarier', $item->slug) }}"
                                class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
    @endforeach
</div>
</div>
@endsection