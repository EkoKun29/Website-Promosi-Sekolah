<style>
    .search-bar {
    float: right;
    /*background-color:  #3EB489;*/
    padding: 7px;
    border-radius: 5px;
}

.search-input {
    padding: 8px; /* Memperbesar padding untuk tampilan yang lebih baik di seluler */
    width: 200px; /* Lebar input default */
}

.search-button {
    padding: 8px 15px; /* Memperbesar padding untuk tampilan yang lebih baik di seluler */
    background-color:  #3EB489;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

/* Gaya untuk tampilan handphone */
@media (max-width: 600px) {
    .search-bar {
        float: none;
        text-align: center;
    }

    .search-input,
    .search-button {
        width: 100%;
        margin-bottom: 10px;
    }
}
</style>
@extends('layouts.main')
@section('content')
<section id="hero-second" class="px-0">
    <div class="container text-center text-white">
        <div class="hero-title" data-aos="fade-up">
        <div class="hero-text">Pendidik dan Tenaga Kependidikan</div>
        </div>
    </div>
</section>

<div class="search-bar">
    <form action="{{ route('guru.search') }}" method="GET">
        <input type="text" name="search" placeholder="Cari Guru" class="search-input">
        <button type="submit" class="search-button">CARI</button>
    </form>
</div>


<div class="services-area ">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <span><h2>Semua Guru</h2></span>
                    
                </div> 
            </div>
        </div>
    
    <div class="container">
        <div class="row">
            @foreach ($guru as $g)
            <div class="col-lg-6">
                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                  <img src="{{ $g->image_url }}" height="200" width="200" alt="">
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
<div class="card-footer clearfix">
    {!! $guru->links('pagination::bootstrap-4') !!}

</div>
@endsection