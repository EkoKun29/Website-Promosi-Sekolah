<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <div class="logo-container">
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
                                            <li><a href="contact.html">KONSENTRASI</a></li>
                                            <li><a href="contact.html">HUBUNGI KAMI</a></li>
                                            <li><a href="contact.html">KARIER</a></li>
                                        </ul>
                                        <div class="d-flex">
                                            @auth
                                             <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" id="loginBtn" class="btn btn-dark">Logout</button>
                                            </form>   
                                            @else
                                            <button class="btn btn-danger" id="loginBtn" onclick="changeColor()" >Register</button>
                                            @endauth
                                          </div>
                                    </nav>
                                </div>
                            </div>
                        </div> 
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