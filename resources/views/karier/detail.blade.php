@extends('layouts.main')
@section('content')
<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3">
           <a href="/"> Home </a> / <a href="/Kabar-Berita"> Berita </a> / {{ $karier->judul }}
        </div>
        <img src="{{ asset('storage/karier/' . $karier->image) }}" alt="" class="image-fluid mb-3"
         width="1110">
        <div class="services-area section-padding3">
            <p class="mb-3 text-secondary">{{ $karier->created_at }}</p>
            <h4 class="fw-bold mb-3">{{ $karier->judul }}</h4>
            <p class="text-secondary">{!! $karier->desc !!}</p>
        </div>
    </div>
</section>
@endsection