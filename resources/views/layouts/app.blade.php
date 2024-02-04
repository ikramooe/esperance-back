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
                                            <span>@lang('TÃ©lÃ©phone')</span>
                                            <h4>{{Page::option('contact')->telephone}}</h4>
                                            <h4>{{Page::option('contact')->telephone_2}}</h4>
                                        </div>
                                    </li>
                                    <li class="appointment-btn">
                                        <a href="/contact" class="btn btn-primary">@lang('Prendre Rendez-vous')</a>
                                      
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
    <div class="light nav-big" style="background:#107fca !important">
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
                                    <a class="nav-link " href="/qui-sommes-nous" id="navbarDropdown3"
                                        role="button"  aria-haspopup="true"
                                        aria-expanded="false"> @lang('Qui sommes nous ') </a>

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
                                    <a class="nav-link" href="{{Page::option('contact')->tiktok}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"></path>
                                      </svg></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Page::option('contact')->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                              
                               
                            </ul>
                            <div class="ml-3">
                                <select class="form-control ml-auto py-0 px-1" name="lng" id="lng" onchange="window.location='/locale/'+this.value" style="width: max-content;">
                                    <option value="fr" {{app('lang')=='fr' ? 'selected' : ''}}>FR</option>
                                    <option value="ar" {{app('lang')=='ar' ? 'selected' : ''}}>AR</option>
                                </select>
                            </div>
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
                            <h2>+15 000 </h2>
                            <p>DÃ©collement de rÃ©tine</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter2.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>+25 000</h2>
                            <p>Cataractes </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('images/counter3.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>+1 M</h2>
                            <p>Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center justify-content-end">
                    <div class="counter-btn_block">
                        <a href="/contact" class="btn btn-success">@lang('RÃ©server')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="foot-contact-block">
                        <img src="{{asset('images/logo-blanc.png')}}" class="img-fluid" alt="#" />
                        <p>
                            Bienvenue Ã  la Clinique Ophtalmologique l'EspÃ©rance, oÃ¹ votre vision est notre prioritÃ©, alliant expertise mÃ©dicale et soins personnalisÃ©s.
                        </p>
                        <a href="tel:{{Page::option('contact')->telephone}}">
                            <h4><i class="fas fa-phone"></i>{{Page::option('contact')->telephone}}</h4>
                        </a>
                        <a href="tel:{{Page::option('contact')->telephone_2}}">
                            <h4><i class="fas fa-phone"></i>{{Page::option('contact')->telephone_2}}</h4>
                        </a>
                        <a href="tel:{{Page::option('contact')->telephone_3}}">
                            <h4><i class="fas fa-phone"></i>{{Page::option('contact')->telephone_3}}</h4>
                        </a>
                        <a href="mailto:{{Page::option('contact')->email}}">
                            <h4><i class="far fa-envelope"></i>{{Page::option('contact')->email}}</h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 offset-lg-1">
                    <div class="foot-link-box">
                        <h4>@lang('Liens utiles')</h4>
                        <ul>
                            @if(Page::get('liens'))
                               @foreach (json_decode(Page::get('liens')) as $item)
                               <li>
                                <a href="{{$item->attributes->lien}}"><i class="fas fa-angle-double-right"></i>{{$item->attributes->titre->fr}}</a>
                                </li>
                               @endforeach
                            @endif
                          
                          
                           
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="foot-link-box">
                        <h4>@lang('Nos services')</h4>
                        <ul>
                            @foreach (app('services') as $item)
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>{{$item->getTranslation('titre',app('lang'))}}</a>
                            </li>
                            @endforeach
                           
                           
                          
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Â© esperance 2023 Allright Reserved</p>
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