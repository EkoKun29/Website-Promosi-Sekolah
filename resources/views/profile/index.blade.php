@extends('layouts.main')
@section('content')
<main>
    <section id="hero-satu" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title">
            <div class="hero-text">Profile <br> SMK Kesuma Margoyoso Pati</div>
            </div>
        </div>
    </section>
    
    <!-- Testimonial End -->
    <section id="program" style="margin-top: -50px">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                <img src="{{ asset('assets/img/iso.png') }}" height="70" width="70" alt="">
                <div>
                  <h5> <b> Manajemen Mutu ISO 9001:2015 </b> </h5>
                  <h6>Telah menerapkan Standart Manajemen Mutu</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                <img src="{{ asset('assets/img/sekolah.png') }}" height="70" width="70" alt="">
                <div>
                  <h5> <b> Sekolah Swasta dan Terakreditasi </b> </h5>
                  <h6>Sekolah Swasta Yang Telah Terakreditasi</h6>
                </div>
              </div>
            </div>
        </section>

    <section class="features">

        <div class="categories-area section-padding30">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-tittle mb-70">
            <span><h2>Tentang Sekolah</h2></span>
                </div>
          </div>
      
          <div class="row" data-aos="fade-up">
            <div class="col-md-5 pt-5">
              <img src="{{ asset ('assets/img/bersinergi.png') }}" class="img-fluid pt-5" alt="">
            </div>
            <div class="col-md-7 pt-4">
              <h3> 
              <p class="fst-italic">
               VISI
              </p></h3>
              <ul>
                <li><i class="fa fa-check"></i> Bersinergi </li>
              </ul>
              <h3> 
                <p class="fst-italic">
                 MISI
                </p></h3>
                <ul>
                  <li><i class="fa fa-check"></i> Meningkatkan Muatan Keagamaan </li>
                  <li><i class="fa fa-check"></i> Meningkatkan Pelatihan Fisik Dan Mental </li>
                  <li><i class="fa fa-check"></i> Pembiasaan Budaya Industri Di Sekolah </li>
                  <li><i class="fa fa-check"></i> Melaksanakan Peringatan Hari Besar Nasional </li>
                  <li><i class="fa fa-check"></i> Meningkatkan Keikutsertaan Dalam Kegiatan Lomba </li>
                </ul>
            </div>
          </div>
      
          <div class="row" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2 pt-5">
              <img src="{{ asset ('assets/img/LOGO_KESUMA.png') }}" height="200" width="200" class="img-fluid pt-5" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1">
              <h3>SEJARAH SMK KESUMA</h3>
              <p>
                Dibawah naungan Yayasan Kesejahteraan Masyarakat Margoyoso, SMK Kesuma Margoyoso telah berdiri sejak tahun 2003.
              </p>
              <p>
                SMK Kesuma Margoyoso merupakan sebuah lembaga pendidikan kejuruan yang memiliki visi dan misi yang strategis sesuai dengan arus perkembangan teknologi.
              </p>
              <p>
                20 tahun sudah SMK Kesuma Margoyoso berkiprah membentuk karakter bangsa dan berbakti kepada Negara Kesatuan Republik Indonesia.
              </p>
            </div>
          </div>
      
          <div class="row" data-aos="fade-up">
            <div class="col-md-5 pt-3">
              <img src="{{ asset ('assets/img/asli.png') }}" height="400" width="400" class="img-fluid pt-3" alt="">
            </div>
            <div class="col-md-7 pt-5">
              <h3>SMK KESUMA SAAT INI</h3>
              <p>Sebagai salah satu SMK terbesar dan unggulan di Kabupaten Pati, saat ini SMK Kesuma Margoyoso Pati terus menjaga
                komitmen untuk terus berinovasi dalam membentuk karakter peserta didik di tengah cepatnya arus keterbukaan informasi
                dan transformasi di dunia digital.
              </p>
              <p>Prioritas terhadap pengembangan karakter, hard skill dan soft skill serta membentuk kualitas lulusan, telah menjadikan SMK Kesuma
                Margoyoso Pati dipercaya masyarakat dalam mengemban amanah mendidik putra putrinya.
              </p>
            </div>
          </div>
      
        </div>
      </section><!-- End Features Section -->

    <!-- Services Ara End -->
    <!--? Testimonial Start -->
    
</main>
@endsection