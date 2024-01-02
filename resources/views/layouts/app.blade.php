<!DOCTYPE html>
<html lang="{{app('lang')}}" dir="{{app('lang')=="ar"?"rtl":"ltr"}}">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Esperance</title>
</head>

<body>
    <!--==================== Header ====================-->
   
    @if(Request::url() != '/')
    

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                             <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" alt="#" style="height: 100px;width:180px;" /></a>
                            </div>
                            <div class="col-md-9 d-flex align-items-end">
                                <ul class="ml-auto">
                                    <li>
                                        <img src="{{asset('images/mail-icon.png')}}" alt="#">
                                        <div>
                                            <span>@lang('Email')</span>
                                            <h4>{{Page::option('contact')->email}}</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('images/call-icon.png')}}" alt="#">
                                        <div>
                                            <span>@lang('Téléphone')</span>
                                            <h4>{{Page::option('contact')->telephone}}</h4>
                                            <h4>{{Page::option('contact')->telephone_2}}</h4>
                                        </div>
                                    </li>
                                    <li class="appointment-btn">
                                        <a href="/contact" class="btn btn-primary">@lang('Rendez-vous')</a>
                                      
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End top bar -->
    <div class="light nav-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav menu -->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto nav-sub">
                                <li class="nav-item ">
                                    <a class="nav-link " href="/" id="navbarDropdown3"
                                        role="button"  aria-haspopup="true"
                                        aria-expanded="false"> @lang('Accueil') </a>

                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link " href="/blog" id="navbarDropdown3"
                                        role="button"  aria-haspopup="true"
                                        aria-expanded="false"> @lang('Blog')  </a>

                                </li>


                                <li class="nav-item ">
                                    <a class="nav-link " href="/services" id="navbarDropdown3"
                                        role="button"  aria-haspopup="true"
                                        aria-expanded="false"> @lang('Services')  </a>

                                </li>


                                <li class="nav-item ">
                                    <a class="nav-link " href="/contact" id="navbarDropdown3"
                                        role="button"  aria-haspopup="true"
                                        aria-expanded="false"> @lang('Contact')  </a>

                                </li>
                             
                               
                            </ul>
                            <ul class="nav-icon-wrap">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Page::option('contact')->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Page::option('contact')->tiktok}}" target="_blank"><i class="fab fa-tiktok"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Page::option('contact')->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                              
                               
                            </ul>
                        </div>
                    </nav>
                    <!--//End Nav menu -->
                </div>
            </div>
        </div>
    </div>
    @endif

    @yield('content')

    <section class="counter">
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter1.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>60+</h2>
                            <p>Medecins experts</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter2.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>1000+</h2>
                            <p>Opérations </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter3.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>150+</h2>
                            <p>Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="counter-btn_block">
                        <a href="/contact" class="btn btn-success">@lang('Réserver')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="foot-contact-block">
                        <img src="{{asset('images/logo-blanc.png')}}" class="img-fluid" alt="#" />
                        <p>
                            Bienvenue à la Clinique Ophtalmologique l'Espérance, où votre vision est notre priorité, alliant expertise médicale et soins personnalisés.
                        </p>
                        <a href="tel:31234567890">
                            <h4><i class="fas fa-phone"></i>{{Page::option('contact')->telephone}}</h4>
                        </a>
                        <a href="mailto:info@mededin.com">
                            <h4><i class="far fa-envelope"></i>{{Page::option('contact')->email}}</h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>About Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Mission</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Services</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Blogs & News</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Contact Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Faq</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="foot-link-box">
                        <h4>Nos services</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Pediatrics</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Dermatology</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Cardiology</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Psychological</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Surgery</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Family Medicine</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© esperance 2023 Allright Reserved</p>
                        <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//End Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider Js -->

    <script src="{{asset('js/slick.min.js')}}"></script>

    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Script Js -->
    <script src="{{asset('js/script.js')}}"></script>

</body>