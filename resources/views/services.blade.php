@extends('layouts.app')

@section('content')

<section class="space sub-header">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-6">
                <div class="sub-header_content">
                    <p>@lang('Nos services')</p>
                    <h3></h3>
                    <span><i>@lang('Accueil') / @lang('services')</i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sub-header_main">
                    <h2>@lang('Services')</h2>
                </div>
            </div>
        </div>
    </div>
</section>
  <!--==================== Pricing ====================-->
  <section class="space light">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-title_center">

                    <h2>@lang('Nos services')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $item)
            <div class="col-md-4">
                <div class="service-block yellow">
                    <img src="images/service-icon2.png" alt="#">
                    <h3>{{$item->getTranslation('titre',app('lang'))}}</h3>
                   
                    <a href="/services/{{$item->slug}}" class="btn btn-dark">@lang('Lire plus')</a>
                    <div class="service-bg-icon">
                        <img src="images/services-bg1.png" class="img-fluid" alt="#">
                    </div>
                </div>
            </div>
            @endforeach
           
         
        </div>
       
    </div>
</section>
<!--//End Pricing -->
<!--==================== Appointment ====================-->
<section class="space background-bg4">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="appointment-form_wrap">
                    <div class="heading-style1">
                        <span>Réservez a partir du site</span>
                        <h2>Prenez un rendez-vous</h2>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-cutom">
                                    <input type="email" class="form-control form-custom" placeholder="Enter Your Name">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-cutom">
                                    <input type="number" class="form-control form-custom" placeholder="Date and time">
                                    <i class="far fa-clock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-cutom">
                                    <input type="number" class="form-control form-custom" placeholder="Enter phone number">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-cutom">
                                    <input type="text" class="form-control form-custom" placeholder="Select location">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-group-cutom">
                                    <input type="text" class="form-control form-custom" placeholder="Choose department">
                                    <i class="far fa-circle"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-cutom">
                                    <input type="text" class="form-control form-custom" placeholder="Select doctor">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-cutom">
                                    <label for="exampleFormControlTextarea1">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success">Envoyer</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="why-choose_block">
                    <div class="heading-style1 mb-0">
                        <span>Clinique l'esperance</span>
                        <h2>Pourquoi choisir l'esperance ? </h2>
                        <p>
                            Choisir l'Espérance, c'est opter pour une excellence médicale inégalée en ophtalmologie. 
                            Notre équipe expérimentée allie savoir-faire et technologie de pointe pour offrir des soins spécialisés et personnalisés, plaçant la santé visuelle de chaque patient au cœur de nos préoccupations.
                        </p>
                        <hr>
                    </div>
                    <div class="whychoose-wrap">
                        <img src="{{asset('images/icon1.png')}}" alt="#">
                        <div class="whychoose-text_block">
                            <h4>Fastest Growing Clinic</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, su</p>
                        </div>
                    </div>
                    <div class="whychoose-wrap">
                        <img src="images/icon2.png" alt="#">
                        <div class="whychoose-text_block">
                            <h4>Free Ambulance Servcice</h4>
                            <p>Ut enim ad minim veniam, quis nostrud exercitati</p>
                        </div>
                    </div>
                    <div class="whychoose-wrap">
                        <img src="images/icon3.png" alt="#">
                        <div class="whychoose-text_block">
                            <h4>24/7 Working Time</h4>
                            <p>Duis aute irure dolor in repr ehenderit in voluptate.</p>
                        </div>
                    </div>
                    <div class="whychoose-wrap mb-0">
                        <img src="images/icon4.png" alt="#">
                        <div class="whychoose-text_block">
                            <h4>5 Star Customer Rating </h4>
                            <p>Excepteur sint occaecat cupidatat non proident,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//End Appointment -->
<!--==================== Pricing ====================-->

<!--//End Testimonial Style 2 -->
 <!--==================== Counter ====================-->

<!--//End Counter -->
<!--==================== Footer ====================-->
   

@endsection