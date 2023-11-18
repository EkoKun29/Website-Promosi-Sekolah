<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        @auth
                        @if(Auth::user()->id_role == 1)
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <div class="logo-container" data-aos="fade-down">
                                        <img src="{{ asset('assets/img/LOGO_KESUMA.png')}}" height="70" width="55" alt="">
                                       <h6><b>HALAMAN ADMIN</b></h6>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                        <div class="col-xl-10 col-lg-3">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                          
                                            {{-- <li><a href="{{ route('_profile') }}">PROFILE</a></li> --}}
                                            <li><a href="{{ route('berita') }}">BERITA</a></li>
                                            <li><a href="{{ route('photo') }}">GALERI</a></li>
                                            <li><a href="{{ route('guru') }}">GURU</a></li>
                                            <li><a href="{{ route('konsentrasi') }}">KONSENTRASI</a></li>
                                            <li><a href="contact.html">HUBUNGI KAMI</a></li>
                                            <li><a href="{{ route('karier') }}">KARIER</a></li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" id="loginBtn" class="btn btn-dark">Logout</button>
                                                </form>
                                            </li>
                                        
                                        </ul>
                                      
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        @else
                        <div class="col-xl-2 col-lg-2" data-aos="fade-right">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <div class="logo-container" >
                                        <img src="{{ asset('assets/img/LOGO_KESUMA.png')}}" height="70" width="55" alt="">
                                       <h6><b>SMK KESUMA MARGOYOSO PATI</b></h6>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                        <div class="col-xl-10 col-lg-3">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                          
                                            <li><a href="{{ route('_profile') }}">PROFILE</a></li>
                                            <li><a href="{{ route('app.berita') }}">BERITA</a></li>
                                            <li><a href="{{ route('app.photo') }}">GALERI</a></li>
                                            <li><a href="{{ route('app.guru') }}">GURU</a></li>
                                            <li><a href="{{ route('app.konsentrasi') }}">KONSENTRASI</a></li>
                                            <li><a href="contact.html">HUBUNGI KAMI</a></li>
                                            <li><a href="{{ route('app.karier') }}">KARIER</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        @endif
                        @else
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo bg-light p-3"> <!-- Tambahkan kelas bg-light dan p-3 untuk latar belakang terang -->
                                <a href="{{ route('home') }}">
                                    <div class="logo-container">
                                        <img src="{{ asset('assets/img/LOGO_KESUMA.png')}}" height="70" width="55" alt="">
                                        <h6><b>SMK KESUMA MARGOYOSO PATI</b></h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-3">
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-aos="fade-left">
                                <div class="container">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('_profile') }}">PROFILE</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('app.berita') }}">BERITA</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('app.photo') }}">GALERI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('app.guru') }}">GURU</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('app.konsentrasi') }}">KONSENTRASI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.html">HUBUNGI KAMI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('app.karier') }}">KARIER</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        
                        @endauth
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
