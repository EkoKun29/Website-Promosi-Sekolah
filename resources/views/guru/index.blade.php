@extends('layouts.main')
@section('content')
<div class="services-area section-padding3">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70">
                    <span>SMK KESUMA MARGOYOSO PATI</span>
                    <h2>Guru</h2>
                </div> 
            </div>
        </div>
    
    <div class="container">
        <div class="row">
            @foreach ($guru as $g)
            <div class="col-lg-6">
                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                  <img src="{{ asset('storage/guru/'.$g->image) }}" height="200" width="200" alt="">
                  <div class="py-3 ms-3">
                    <h5 class="text-start"> <b> {{ $g->name }} </b> </h5>
                    <h6 class="text-start"> {{ $g->bidang }}</h6>
                    <p class="text-start"> {{ $g->desc }}</p>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection