@extends('layouts.main')
@section('content')
<div class="services-area section-padding3">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70">
                    <span>SMK KESUMA MARGOYOSO PATI</span>
                    <h2>Foto Kegiatan</h2>
                </div> 
            </div>
        </div>
        <div class="row">
            @foreach ($photo as $p)
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('storage/photo/'.$p->image) }}">
                <img src="{{ asset('storage/photo/'.$p->image) }}" class="img-fluid" alt="">
            </a>
            <p>{{ $p->judul }}</p>
            </div>
                
            @endforeach
        </div>
        

@endsection