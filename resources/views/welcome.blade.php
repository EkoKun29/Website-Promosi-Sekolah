<style>
    .brand-area {
            margin-bottom: 5px; /* Ubah sesuai kebutuhan */
        }
        .single-brand {
            display: inline-block;
            margin: 10px; /* Sesuaikan jarak jika perlu */
            text-align: center;
        }
        .single-brand img {
            max-width: 100%;
            height: auto;
        }
    </style>
    
    @extends('layouts.main')
    @section('content')
    <section id="hero" class="px-0">
      
    
    
      
      
      
        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
            <div class="hero-text">Selamat Datang <h2> di Website SMK KESUMA MARGOYOSO PATI</h2> 
           <div class="text-4xl lg:text-5xl font-bold pt-8">
              <h5> tidak ada yang lebih baik dari hari ini untuk memulai kesuksesan masa depanmu
              </h5>
              <a href="{{ route('login') }}" class="btn-get-started animate__animated animate__fadeInUp">LOGIN</a>
              <a href="https://pppdb.smkkesumamargoyoso.sch.id/" class="btn-get-started animate__animated animate__fadeInUp">DAFTAR SEKARANG</a>
            </div>
        </div>
        </div>
    </section>
    
    
                      <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                               <div class="single-brand">
                     <img src="assets/img/halamanutama/Selamat Tahun Baru Website.png" height="800px" width="2200px" alt="">
                    </div
                            <div class="cat-cap">
                                <!--<h5><a><u>TAB</u></a></h5>-->
                                <!--<p><b>248 Peserta</b></p>-->
                              
                            </div>
                        </div>
    
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
                                <h5><a>AKUNTANSI</a></h5>
                                <p><b>374 Peserta</b></p>
                                <p>Sebagai lulusan yang yang berkarakter, profesional, ahli dan terampil dalam mengoperasikan komputer akuntansi, pratikum akuntansi perusahaan jasa dagang manufakturing, Perpajakan, perbankan dasar, sistem keuangan pemerintah, serta kewirausahaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/tkj.png') }}">
                            </div>
                            <div class="cat-cap">
                                <h5><a>TEKNIK KOMPUTER DAN JARINGAN</a></h5>
                                <p><b>369 Peserta</b></p>
                                <p>Sebagai teknisi yang berkarakter, profesional, ahli dan terampil dalam Komputer dan Jaringan era Pemprogaman, Administrasi Infrastruktur Jaringan, Simulasi dan Komunikasi Digital, Web dan Desain Grafis, Teknologi Layanan Jaringan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/av.png') }}">
                            </div>
                            <div class="cat-cap">
                                <h5><a>TEKNIK AUDIO VIDEO</a></h5>
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
                                <h5><a>TEKNIK ALAT BERAT</a></h5>
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
                                <h5><a>TEKNIK SEPEDA MOTOR</a></h5>
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
                                <h5><a>TEKNIK KENDARAAN RINGAN</a></h5>
                                <p><b>496 Peserta</b></p>
                                <p>Membekali siswa dengan ilmu kendaraan ringan agar mampu melaksanakan perawatan dan perbaikan komponen komponen mobil secara mandiri, merawat dan memperbaiki mobil sesuai dengan standar yang ditentukan oleh pabrik, memperbaiki mobil pada bengkel atau perusahaan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="categories-area section-padding">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70" data-aos="fade-right">
                        <span><h2>BERITA KEGIATAN SEKOLAH</h2></span>
                        <div class="row">
                            @foreach($berita as $item)
                                <div class="col-lg-4">
                                    <div class="single-brand">
                                        <img src="{{ $item->image_url }}" height="100px" width="300px" alt="{{ $item->judul }}">
                                        <h3>{{ $item->judul }}</h3>
                                    </div>
                                    <div class="social">
                                        <a href="{{ route('app.slug', $item->slug) }}">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    
                                      </div>
                                </div>
                            @endforeach
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
                            <img src="{{ asset ('assets/img/guru1.JPG')}}" alt="">
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
    
    
    
    
    
    
     <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70" data-aos="fade-right">
                            <span style="color: #3EB489;">Mitra Kerja</span>
                            <h2>Industri</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                               <img src="assets/img/mitra/m1.png" height="50px" width="200px" alt="">
                    </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>AKUNTANSI</u></a></h5>-->
                                <!--<p><b>374 Peserta</b></p>-->
    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                 <img src="assets/img/mitra/m2.png" height="50px" width="190px" alt="">
                    </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TJKT</u></a></h5>-->
                                <!--<p><b>369 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                  <img src="assets/img/mitra/m3.png" height="50px" width="270px" alt="">
                    </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TAV</u></a></h5>-->
                                <!--<p><b>123 Peserta</b></p>-->
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                               <div class="single-brand">
                     <img src="assets/img/mitra/m4.png" height="60px" width="120px" alt="">
                    </div
                            <div class="cat-cap">
                                <!--<h5><a><u>TAB</u></a></h5>-->
                                <!--<p><b>248 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/mitra/m5.png" height="50px" width="150px" alt="">
                    </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TSM</u></a></h5>-->
                                <!--<p><b>481 Peserta</b></p>-->
                     
                            </div>
                        </div>
                    </div>
                    
                    
                 
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                               <img src="assets/img/mitra/m6.png" height="50px" width="190px" alt="">
                    </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TKR</u></a></h5>-->
                                <!--<p><b>496 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                    
               
                    
                  
                  
                  
                  
                  
                  
                  
                    <!--<div class="row">-->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                               <img src="assets/img/mitra/m7.png" height="50px" width="200px" alt="">
                    </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>AKUNTANSI</u></a></h5>-->
                                <!--<p><b>374 Peserta</b></p>-->
    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                               <img src="assets/img/mitra/m8.png" height="50px" width="136px" alt="">
                </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TJKT</u></a></h5>-->
                                <!--<p><b>369 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                     <img src="assets/img/mitra/m16.png" height="50px" width="290px" alt="">
                </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TAV</u></a></h5>-->
                                <!--<p><b>123 Peserta</b></p>-->
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                               <div class="single-brand">
                     <img src="assets/img/mitra/m12.png" height="100px" width="120px" alt="">
                    </div
                            <div class="cat-cap">
                                <!--<h5><a><u>TAB</u></a></h5>-->
                                <!--<p><b>248 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                        <img src="assets/img/mitra/m13.png" height="100px" width="120px" alt="">
                   </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TSM</u></a></h5>-->
                                <!--<p><b>481 Peserta</b></p>-->
                     
                            </div>
                        </div>
                    </div>
                    
                    
                 
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            <img src="assets/img/mitra/m14.png" height="100px" width="120px" alt="">
                  </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TKR</u></a></h5>-->
                                <!--<p><b>496 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                       
                  
                  
                  
                  
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                        <img src="assets/img/mitra/m15.png" height="100px" width="120px" alt="">
                </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TSM</u></a></h5>-->
                                <!--<p><b>481 Peserta</b></p>-->
                     
                            </div>
                        </div>
                    </div>
                    
                    
                 
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                          <img src="assets/img/mitra/m9.png" height="100px" width="170px" alt="">
                   </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TKR</u></a></h5>-->
                                <!--<p><b>496 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                       
                  
                  
                  
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                            <img src="assets/img/mitra/m11.png" height="100px" width="170px" alt="">
                  </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TKR</u></a></h5>-->
                                <!--<p><b>496 Peserta</b></p>-->
                              
                            </div>
                        </div>
                    </div>
                       
                  
                  
                  
                  
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                        <img src="assets/img/mitra/m10.png" height="100px" width="190px" alt="">
                </div>
                            <div class="cat-cap">
                                <!--<h5><a><u>TSM</u></a></h5>-->
                                <!--<p><b>481 Peserta</b></p>-->
                     
                            </div>
                        </div>
                    </div>
                    
                    
                 
                    
                   <!-- <div class="col-lg-4 col-md-6 col-sm-6">-->
                   <!--     <div class="single-cat text-center mb-50">-->
                   <!--         <div class="cat-icon">-->
                   <!--       <img src="assets/img/mitra/m16.png" height="50px" width="290px" alt="">-->
                   <!--</div>-->
                   <!--         <div class="cat-cap">-->
                                <!--<h5><a><u>TKR</u></a></h5>-->
                                <!--<p><b>496 Peserta</b></p>-->
                              
                   <!--         </div>-->
                   <!--     </div>-->
                   <!-- </div>-->
                       
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                    
                        </div> 
                </div>
            </div>
        </div>
                
    
    
                
                
    <!--<div class="categories-area section-padding30">-->
    
        <!--<div class="categories-area section-padding30">-->
        <!--    <div class="container">-->
        <!--        <div class="col-lg-12">-->
                    <!-- Section Tittle -->
        <!--            <div class="section-tittle mb-70" data-aos="fade-right">-->
        <!--                <span style="color: #3EB489;"><h3>Mitra Kerja</h3></span>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--<div class="brand-area pb-140">-->
        <!--    <div class="container">-->
        <!--        <div id="heroCarousel" class="brand-active brand-border pb-40 owl-carousel owl-theme">-->
                    
        <!--            <div class="single-brand">-->
        <!--                <img src="assets/img/mitra/m16.png" height="100px" width="290px" alt="">-->
        <!--            </div>-->
        <!--        </div>-->
                  
          <!--<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">-->
          <!--  <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>-->
          <!--</a>-->
    
          <!--<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">-->
          <!--  <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>-->
          <!--</a>-->
        <!--    </div>-->
        <!--</div>-->
        <!--    </div>-->
        <!--</div>-->
    
    </main>
    
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div> 
    @endsection