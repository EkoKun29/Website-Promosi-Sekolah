@extends('layouts.main')
@section('content')
<div class="row py-5" data-aos="flip-up">
    @foreach($berita as $item)
    <div class="col-lg-6 col-md-6 col-sm-10">
        <div class="single-services mb-100">
            <div class="services-img">
                <img src="{{ asset('storage/artikel/' . $item->image) }}" alt="">
                </div>
                <div class="services-caption">
                <span>Strategy planing</span>
                <p><a href="#">Within the construction industry as their overdraft</a></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection