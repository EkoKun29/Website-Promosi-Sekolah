<footer>
    @auth
    @if(Auth::user()->id_role == 1)
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="{{ asset ('assets/img/gallery/footer_bg.jpg')}}">
      
    <div class="footer-copy-right">
    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <atarget="_blank">SMK KESUMA MARGOYOSO PATI</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                       
        <!-- Footer End-->
    @else
     <!--? Footer Start-->
     <div class="footer-area section-bg" data-background="{{ asset ('assets/img/gallery/footer_bg.jpg')}}">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="{{ route('home') }} "><img src="{{ asset('assets/img/LOGO_KESUMA.png')}}" height="70" width="55"  alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Sekolahmu adalah langkah awal menuju cita-citamu. Segera daftarkan dirimu, kami siap melayani!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>SOSIAL MEDIA </h4>
                                <ul>
                                    <li><a href="https://smkkesuma@gmail.com"><i class="fa fa-envelope"></i>&ensp;E-Mail</a></li>
                                    <li><a href="https://www.facebook.com/smkksmpati"><i class="fab fa-facebook-f"></i>&ensp;Facebook</a></li>
                                    <li><a href="https://www.instagram.com/smkkesumamargoyoso/"><i class="fab fa-instagram"></i>&ensp;Instagram</a></li>
                                    <li><a href="https://www.youtube.com/@smkkesumamargoyoso1039"><i class="fab fa-youtube"></i>&ensp;Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>HUBUNGI KAMI</h4>
                                <ul>
                                    <li><a href="#">Jl. Pati - Tayu Km.20 Margoyoso Pati</a></li>
                                    <li><a href="#">smkkesuma@gmail.com</a></li>
                                    <li><a href="#">(0295)4150556</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a target="_blank">SMK KESUMA MARGOYOSO PATI</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @else
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="{{ asset ('assets/img/gallery/footer_bg.jpg')}}">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="{{ route('home') }} "><img src="{{ asset('assets/img/LOGO_KESUMA.png')}}" height="70" width="55"  alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Sekolahmu adalah langkah awal menuju cita-citamu. Segera daftarkan dirimu, kami siap melayani!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>SOSIAL MEDIA </h4>
                                <ul>
                                    <li><a href="https://smkkesuma@gmail.com"><i class="fa fa-envelope"></i>&ensp;E-Mail</a></li>
                                    <li><a href="https://www.facebook.com/smkksmpati"><i class="fab fa-facebook-f"></i>&ensp;Facebook</a></li>
                                    <li><a href="https://www.instagram.com/smkkesumamargoyoso/"><i class="fab fa-instagram"></i>&ensp;Instagram</a></li>
                                    <li><a href="https://www.youtube.com/@smkkesumamargoyoso1039"><i class="fab fa-youtube"></i>&ensp;Youtube</a></li>
                                    <li><a href="https://www.tiktok.com/@smkkesuma?is_from_webapp=1&sender_device=pc"><i class="fab fa-tiktok"></i>&ensp;Tiktok</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                <h4>HUBUNGI KAMI</h4>
                                <ul>
                                    
                                    <li>Jl. Pati - Tayu Km.20 Margoyoso Pati</li>
                                    <li><a href="https://wa.me/6281127012222" class="btn btn-success btn-lg mb-2"><h6 class="fab fa-whatsapp">&ensp;Kirim Pesan</h6></a></li>
                                    <li>(0295)4150556</li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a target="_blank">EKO SEPTYO NUGROHO</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
    <!-- Footer End-->
    </footer>