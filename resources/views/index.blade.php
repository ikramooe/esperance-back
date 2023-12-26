@extends('layouts.app')

@section('content')
   
<header>
    <div class="banner--wrap">
       
        <div class="container">
            <div class="banner-slider">
                @if(Page::get('slide'))
                @foreach (json_decode(Page::get('slide')) as $item)
                <div class="banner">
                    <div class="row">
                       
                        <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                            <!-- Slider Title -->
                            <div class="main-title">
                                @if(app('lang')=='fr')
                                <span>Clinique l'espérance</span>
                                <h1>
                                    {{$item->attributes->titre->fr}}
                                </h1>
                                <p>
                                    {!! $item->attributes->description->fr !!}
                                 </p>
                                @else 
                                <span>عيادة الأمل</span>
                                <h1>
                                    {{$item->attributes->titre->ar}}
                                </h1>
                                <p>
                                    {!! $item->attributes->description->ar !!}
                                 </p>
                                @endif
                               
                               
                                <a href="/contact" class="btn btn-primary">@lang('Prendre un rendez-vous')</a>
                              
                            </div>
                            <!--//End Slider Title -->
                        </div>
                      
                        <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                            <div class="anim-container flex-fill">
                                <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                        fill="#107fca" />
                                    <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                        fill="#107fca" />
                                </svg>

                                <img src="{{asset('storage/'.$item->attributes->image)}}" class="img-fluid animated-hero" alt="hero" />

                               
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

              
            </div>
        </div>
        <!-- // end .container -->
    </div>
    <!-- // end .bannerwrap -->
</header>

    <!--//End Header -->
    <!--==================== About Section ====================-->
    <section class="about-section">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <!-- booking form -->
                    <ul class="booking-form">
                        <li><input type="text" class="form-control" placeholder="Nom complet " /><i
                                class="fas fa-user"></i></li>
                        <li><input type="text" class="form-control" placeholder="Téléphone" /><i
                                class="fas fa-map-marker-alt"></i></li>
                        <li>
                            <select class="custom-select form-control">
                                <option selected>Selectionnez un Service</option>
                                @foreach ($services as $item)
                                <option value="{{$item->getTranslation('titre','fr')}}">{{$item->getTranslation('titre',app('lang'))}}</option>
                              
                                @endforeach
                               
                            </select>
                        </li>
                        <li class="form-btn">
                            <a href="#" class="btn btn-success">Réserver</a>
                        </li>
                    </ul>
                    <!--//End booking form -->
                </div>
            </div>
            <div class="row space">
                <!-- Service Icon -->
                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="{{asset('images/service-thumbnail01.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Spécialiste en Ophtalmologie</h4>
                          
                        </div>
                    </div>
                </div>
                <!-- Service Icon 02 -->
                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="{{asset('images/service-thumbnail02.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Disponibilité des médecins 7j/7</h4>
                           
                        </div>
                    </div>
                </div>
                <!-- Service Icon 03 -->
                <div class="col-md-4">
                    <div class="service-thumbnail border-0 d-flex flex-fill">
                        <img src="{{asset('images/service-thumbnail03.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Prise de rendez-vous en ligne</h4>
                           
                        </div>
                    </div>
                </div>
                <!--//End Service Icon -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- About -->
                    <div class="about-video_block">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                              
                                    <img src="{{asset('storage/'.Page::get('image_pres'))}}" class="img-fluid w-100" alt="#" />
                                  
                                
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="video-play-text">
                                    @if(app('lang')=='fr')
                                    <h2>{{json_decode(Page::get('titre_pres'))->fr}}</h2>
                                    <p>
                                       {!! json_decode(Page::get('description_pres'))->fr !!}
                                    </p>
                                    @else
                                    <h2>{{json_decode(Page::get('titre_pres'))->ar}}</h2>
                                    <p>
                                       {!! json_decode(Page::get('description_pres'))->ar !!}
                                    </p>
                                    @endif 
                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="facilities blue">
                                                <h3>1000+</h3>
                                                <span>Opérations</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facilities green">
                                                <h3>215+</h3>
                                                <span>Médecins experts</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="facilities yellow">
                                                <h3>315+</h3>
                                                <span>Chambres</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facilities gray">
                                                <h3>1000+</h3>
                                                <span>Patients</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//End About -->
                </div>
            </div>
        </div>
    </section>
    <!--//End About Section -->
    <!--==================== Our Services ====================-->
    <section class="space light">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-style1">
                        @if(app('lang')=='fr')
                        <span>Nos services</span>
                        <h2>Nos services</h2>
                        @else 
                        <span>خدماتنا</span>
                        <h2>خدماتنا</h2>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider">
                        @foreach ($services as $item)
                        <div class="service-block yellow">
                            <img src="images/service-icon2.png" alt="#">
                            <h3>{{$item->getTranslation('titre',app('lang'))}}</h3>
                            <p></p>
                            <a href="/services/{{$item->slug}}" class="btn btn-dark">Lire plus</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg1.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </div>
         
            <div class="row">
                <div class="col-md-12">
                    @if(app('lang')=='fr')
                    <p class="text-center service-help_link">
                        Contactez-nous pour plus d'informations
                        <a href="/contact">Contact</a>
                    </p>
                    @else 
                    <p class="text-center service-help_link">
                        اتصل بنا للحصول على مزيد من المعلومات
                        <a href="/contact">اتصل بنا</a>
                    </p>

                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--//End Our Services -->
    <!--==================== Why Choose ====================-->
    <section class="space why-choose-block">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <h2>
                        @if(app('lang')=='fr')
                       {{json_decode(Page::get('titre_urg'))->fr}}
                       @else 
                       {{json_decode(Page::get('titre_urg'))->ar}}

                       @endif
                    </h2>
                    <hr>
                    <div class="row">
                        @if(Page::get('points'))
                        @foreach (json_decode(Page::get('points')) as $item)
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    @if(app('lang')=='fr')
                                    <h5>{{$item->attributes->titre->fr}}</h5>
                                    @if(isset($item->attributes->description))
                                    <span>{{$item->attributes->description->fr}}</span>
                                    @endif
                                    @else 
                                    <h5>{{$item->attributes->titre->ar}}</h5>
                                    @if(isset($item->attributes->description))
                                    <span>{{$item->attributes->description->ar}}</span>
                                    @endif
                                    @endif

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                       
                       
                    </div>
                    <hr>
                   
                    
                    <div class="row">
                        <div class="col-md-12">
                            @if(app('lang')=='fr')
                            <a href="/contact" class="btn btn-dark" tabindex="0">Prendre un rendez-vous</a>
                            @else 
                            <a href="/contact" class="btn btn-dark" tabindex="0">تحديد موعد</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 offset-lg-1">
                    <div class="why-choose_right">
                        <h2>
                            @if(app('lang')=='fr')
                            {{json_decode(Page::get('titre_urg2'))->fr}}
                            @else 
                            {{json_decode(Page::get('titre_urg2'))->ar}}
                            @endif
                        </h2>
                        <p>
                            @if(app('lang')=='fr')
                           {!! json_decode(Page::get('text_urg2'))->fr !!}
                           @else 
                           {!! json_decode(Page::get('text_urg2'))->ar !!}
                           @endif

                        </p>
                        <div class="why-choose_list">
                            <div class="choose-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>

                            <div class="why-choose_list-content">
                                <span>@lang('Téléphone')</span>
                                <h3>{{Page::option('contact')->telephone}}</h3>
                            </div>
                        </div>
                        <div class="why-choose_list">
                            <div class="choose-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="why-choose_list-content">
                                <span>@lang('E-mail')</span>
                                <h3>{{Page::option('contact')->email}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Why Choose -->
    <!--==================== News ====================-->
   
    <!--//End News -->
    <!--==================== Our Team ====================-->
    <section class="our-team">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <span>---- @lang('Notre equipe') ----</span>
                        <h2>@lang('Nos Médecins')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="doctors-slider">
                        @if(json_decode(Page::get('medecins')))
                        @foreach (json_decode(Page::get('medecins')) as $item)
                        <div class="team-img_block yellow">
                            <div class="team-img-socila-block">
                                @if(isset($item->attributes->image))
                                <img src="{{asset('storage/'.$item->attributes->image)}}" class="img-fluid" alt="#" />
                                @endif
                            </div>
                            @if(app('lang')=='fr')
                            <h4> {{$item->attributes->nom->fr}}</h4>
                            <p>{{$item->attributes->specialite->fr}}</p>
                            @else 
                            <h4> {{$item->attributes->nom->ar}}</h4>
                            <p>{{$item->attributes->specialite->ar}}</p>
                            @endif
                        </div>
                        @endforeach

                        @endif
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Our Team -->
    <!--==================== Get a Consultant ====================-->
    <section class="bg-img3">
        <div class="container container-custom">
            <div class="row">
                <div class="col-lg-5 offset-lg-7">
                    <div class="consultant-content">
                        <h2>We Believe in a Healthier You</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <p>
                            Adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam,
                        </p>
                        <a href="#" class="btn btn-success">Get a Consultant</a>
                        <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube"> <i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Get a Consultant -->
    <!--==================== Testimonials ====================-->
    <!--
    <section class="testimonial pb-0">
        <div class="container container-custom">
            <div class="col-md-12">
                <div class="heading-style1">
                    <span></span>
                    <h2>Ce que nos clients disent </h2>
                </div>
                <div class="testi-slider">
                    <div class="testimonial-wrap">
                        <img src="./images/logo.png" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="images/logo.png" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <img src="images/logo.png" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="images/logo.png" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!--//End Testimonials -->
    <!--==================== Blog ====================-->
    <section class="space">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <span><i>---- @lang('Blog') ----</i></span>
                        <h2>@lang('Les derniers articles') </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-wrap">
                      
                        @foreach ($articles as $item)
                        <div class="blog-row-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="blog-img">
                                        <img src="{{asset('storage/'.$item->image)}}" class="img-fluid" alt="#" />
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="blog-content">
                                        <span>{{$item->created_at->format('d/m/Y')}}</span>
                                        <h3>
                                          {{$item->getTranslation('titre',app('lang'))}}
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-center">
                                    <div class="blog-read-more">
                                       
                                        <a href="/articles/{{$item->slug}}" class="btn btn-primary">Lire plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       

                     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <a href="/blog" class="btn btn-outline-primary">@lang('Voir tous les articles')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection