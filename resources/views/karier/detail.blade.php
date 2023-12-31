@extends('layouts.main')
@section('content')
<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex mb-3">
                    <a href="/"> Home </a> / <a href="/Lowongan-Kerja"> Karier </a> / {{ $karier->judul }}
                </div>
            </div>
            <div class="col-12">
                <img src="{{ $karier->image_url }}" alt="" class="img-fluid mb-3" width="100%">
            </div>
            <div class="col-12">
                <div class="services-area section-padding3">
                    <p class="mb-3 text-secondary">{{ $karier->created_at }}</p>
                    <h4 class="fw-bold mb-3">{{ $karier->judul }}</h4>
                    <p class="text-secondary">{!! $karier->desc !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
