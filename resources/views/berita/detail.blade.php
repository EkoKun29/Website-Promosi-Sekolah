@extends('layouts.main')
@section('content')
<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex mb-3">
                    <a href="/"> Home </a> / <a href="/Kabar-Berita"> Berita </a> / {{ $berita->judul }}
                </div>
            </div>
            <div class="col-12">
                <img src="{{ $berita->image_url }}" alt="" class="img-fluid mb-3" width="100%">
            </div>
            <div class="col-12">
                <div class="services-area section-padding3">
                    <p class="mb-3 text-secondary">{{ $berita->created_at }}</p>
                    <h4 class="fw-bold mb-3">{{ $berita->judul }}</h4>
                    <p class="text-secondary">{!! $berita->desc !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
