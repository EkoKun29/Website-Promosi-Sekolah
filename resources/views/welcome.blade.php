@extends('layouts.main')
@section('content')
<section id="hero" class="px-0">
    <div class="container text-center text-white">
        <div class="hero-title" data-aos="fade-up">
        <div class="hero-text">Selamat Datang <br> Di Website SMK Kesuma Margoyoso</div>
        <br>
          <h4>Tidak ada yang lebih baik dari hari ini untuk memulai kesuksesan masa depanmu.
             Awali dengan langkah dan tempat yang baik.
          </h4>
          <a href="{{ route('login') }}" class="btn-get-started animate__animated animate__fadeInUp">LOGIN</a>
          <a href="https://pppdb.smkkesumamargoyoso.sch.id/" class="btn-get-started animate__animated animate__fadeInUp">DAFTAR SEKARANG</a>
        </div>
    </div>
</section>

    <!-- slider Area End-->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70" data-aos="fade-right">
                        <span style="color: #3EB489;">Jumlah Peserta</span>
                        <h2>Konsentrasi Keahlian</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/akn.png') }}">
                        </div>
                        <div class="cat-cap">
                            <h5><a><u>AKUNTANSI</u></a></h5>
                            <p><b>374 Peserta</b></p>
                            <p>Mendidik siswa dibidang akuntansi yang berhubungan dengan transaksi keuangan. Transaksi keuangan tersebut antara lain adalah mencatat, mengelompokkan, mengolah, menyajikan data yang berhubungan dengan keuangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/tkj.png') }}">
                        </div>
                        <div class="cat-cap">
                            <h5><a><u>TJKT</u></a></h5>
                            <p><b>369 Peserta</b></p>
                            <p>Mendidik siswa dalam teknik jaringan komputer dan telekomunikasi yang berkaitan dengan kemampuan algoritma, dan pemrogaman komputer, perakitan komputer, perakitan jaringan komputer, pengoperasian perangkat lunak, dan internet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/av.png') }}">
                        </div>
                        <div class="cat-cap">
                            <h5><a><u>TAV</u></a></h5>
                            <p><b>123 Peserta</b></p>
                            <p>Mendidik siswa dengan pengetahuan, sikap dan keterampilan di bidang elektronika, khususnya dalam pembuatan, perawatan, perbaikan, instalasi, dan pengolahan sistem audio dan video. Siswa diarahkan khusus menjadi sosok dibalik layar produksi film.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/tab.png') }}">
                        </div>
                        <div class="cat-cap">
                            <h5><a><u>TAB</u></a></h5>
                            <p><b>248 Peserta</b></p>
                            <p>Mendidik dan membekali siswa dengan keterampilan, pengetahuan dan sikap agar kompeten melaksanakan repair and maintenance Alat Berat, Remove and instal kelistrikan dan sistem control Alat Berat, Remove and instal powertrain alat berat undercarriage Alat Berat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/tsm.png') }}" height="64" width="64">
                        </div>
                        <div class="cat-cap">
                            <h5><a><u>TSM</u></a></h5>
                            <p><b>481 Peserta</b></p>
                            <p>Para siswa akan di didik dalam kompetensi keahlian pada Bidang Studi Keahlian Teknologi dan Rekayasa Program Studi Keahlian Teknik Otomotif yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua pada bidang pekerjaan yang dikelola badan, instansi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <img src="{{ asset('assets/img/tkr.png') }}">
                        </div>
                        <div class="cat-cap">
                            <h5><a><u>TKR</u></a></h5>
                            <p><b>496 Peserta</b></p>
                            <p>Membekali siswa dengan ilmu kendaraan ringan agar mampu melaksanakan perawatan dan perbaikan komponen komponen mobil secara mandiri, merawat dan memperbaiki mobil sesuai dengan standar yang ditentukan oleh pabrik, memperbaiki mobil pada bengkel atau perusahaan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Area Start-->
    <div class="support-company-area pt-50  section-bg fix" data-background="{{ asset ('assets/img/gallery/section_bg02.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pt-100 ">
                    <div class="support-location-img" data-aos="zoom-in">
                        <img src="{{ asset ('assets/img/siswa.JPG')}}" alt="">
                        <br>
                        <br>
                        <img src="{{ asset ('assets/img/guru.JPG')}}" alt="">
                        <br>
                        <br>
                        <img src="{{ asset ('assets/img/li-photo.JPG')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                            <span>Mengapa</span>
                            <h2>SMK Kesuma Margoyoso Pati</h2>
                        </div>
                        <div class="support-caption">
                            <div class="col-lg-15">
                                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center" data-aos="zoom-in-up">
                                  <div>
                                    <h5><b> <u>FASILITAS </u> </b> <br> 
                                        Fasilitas penunjang pembelajaran lengkap dan nyaman. Laboratorium, bengkel, akses internet dan provider</h5>
                                  </div>
                                  <img src="{{ asset('assets/img/building.png') }}" height="70" width="70" alt="">
                                </div>
                                <br>
                                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center" data-aos="zoom-in-up">
                                    <div>
                                      <h5><b> <u>PRESTASI </u> </b> <br> 
                                        Aktif menjuarai Lomba Kompetensi Siswa Nasional (LKSN) dan berbagai ajang lomba lainnya. baik tingkat provinsi maupun nasional.</h5>
                                    </div>
                                    <img src="{{ asset('assets/img/award.png') }}" height="70" width="70" alt="">
                                  </div>

                                <br>
                                <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center" data-aos="zoom-in-up">
                                    <div>
                                      <h5><b> <u>KURIKULUM </u> </b> <br> 
                                        Sebagai Sekolah Pusat Keunggulan, menerapkan Kurikulum Merdeka dan terintegrasi pada jurusan, serta mengimplementasikan Gerakan Sekolah Menyenangkan.</h5>
                                    </div>
                                    <img src="{{ asset('assets/img/books.png') }}" height="70" width="70" alt="">
                                  </div>

                                  <br>
                                  <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center" data-aos="zoom-in-up">
                                    <div>
                                      <h5><b> <u>KERJASAMA </u> </b> <br> 
                                        Menjalin kerjasama dengan berbagai lembaga dan perusahaan multinasional.</h5>
                                    </div>
                                    <img src="{{ asset('assets/img/kerjasama.png') }}" height="70" width="70" alt="">
                                  </div>

                                  <br>
                                  <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center" data-aos="zoom-in-up">
                                    <div>
                                      <h5><b> <u>DIGITAL MARKETING </u> </b> <br> 
                                        Pionir dalam penerapan Digital Marketing di sekolah.</h5>
                                    </div>
                                    <img src="{{ asset('assets/img/globe.png') }}" height="70" width="70" alt="">
                                  </div>

                                  <br>
                                  <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center" data-aos="zoom-in-up">
                                    <div>
                                      <h5><b> <u>KEWIRAUSAHAAN </u> </b> <br> 
                                        Mengembangkan program pembelajaran kewirausahaan dan mendukung aktivitas wirausaha siswa.</h5>
                                    </div>
                                    <img src="{{ asset('assets/img/chart.png') }}" height="70" width="70" alt="">
                                  </div>
                            <br>
                            {{-- <a href="about.html" class="btn post-btn">More About Us</a> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Area End-->
    <!--? Services Ara Start -->
    {{-- <div class="services-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our Portfolios of cases</span>
                        <h2>Featured Case Study</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services1.png" alt="">
                            </div>
                            <div class="services-caption">
                            <span>Strategy planing</span>
                            <p><a href="#">Within the construction industry as their overdraft</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services2.png" alt="">
                            </div>
                            <div class="services-caption">
                            <span>Strategy planing</span>
                            <p><a href="#">Within the construction industry as their overdraft</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services3.png" alt="">
                            </div>
                            <div class="services-caption">
                            <span>Strategy planing</span>
                            <p><a href="#">Within the construction industry as their overdraft</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services4.png" alt="">
                            </div>
                            <div class="services-caption">
                            <span>Strategy planing</span>
                            <p><a href="#">Within the construction industry as their overdraft</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services Ara End -->
    <!--? Testimonial Start -->
    {{-- <div class="testimonial-area testimonial-padding" data-background="assets/img/gallery/section_bg04.jpg">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
    <!-- Coun Down Start -->
    {{-- <div class="count-down-area pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">8705</span>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter active text-center">
                        <span class="counter">480</span>
                        <p> Active Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">626</span>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">9774</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Coun Down End -->
    <!-- Team Start -->
    {{-- <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our Professional members </span>
                        <h2>Our Team Mambers</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Ethan Welch</a></h3>
                            <span>UX Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Ethan Welch</a></h3>
                            <span>UX Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Ethan Welch</a></h3>
                            <span>UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->
    <!-- Want To work -->
    {{-- <section class="wantToWork-area w-padding2 section-bg" data-background="assets/img/gallery/section_bg03.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Are you Searching<br> For a First-Class Consultant?</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="#" class="btn btn-black f-right">More About Us</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Want To work End -->
    <!-- Blog Area Start -->
    {{-- <div class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-100">
                        <span>Recent News of us</span>
                        <h2>Our Recent Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home_blog1.png" alt="">
                                <ul>
                                    <li>By Admin   -   October 27, 2020</li>
                                </ul>
                            </div>
                            <div class="blog-cap">
                                <h3><a href="blog_details.html">16 Easy Ideas to Use in  Everyday</a></h3>
                                <p>Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnua Quis ipsum suspendisse ultrices gra.</p>
                                <a href="blog_details.html" class="more-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/home_blog2.png" alt="">
                                <ul>
                                    <li>By Admin   -   October 27, 2020</li>
                                </ul>
                            </div>
                            <div class="blog-cap">
                                <h3><a href="blog_details.html">16 Easy Ideas to Use in  Everyday</a></h3>
                                <p>Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnua Quis ipsum suspendisse ultrices gra.</p>
                                <a href="blog_details.html" class="more-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
    <!-- Brand Area Start -->
    <div class="brand-area pb-140">
        <div class="container">
            <div class="brand-active brand-border pb-40">
                <div class="single-brand">
                    <img src="assets/img/gallery/brand1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/gallery/brand2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/gallery/brand3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/gallery/brand4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/gallery/brand2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/gallery/brand5.png" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Brand Area End -->
</main>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>  
@endsection