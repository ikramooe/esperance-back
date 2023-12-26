@extends('layouts.app')

@section('content')
<section class="light">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="sidebar-category">
                    <ul>
                        @foreach ($services as $item)
                        <li>
                            <a href="/services/{{$item->slug}}">
                                <img src="{{asset('images/service-icon1.png')}}" alt="#">
                                <span>{{$item->getTranslation('titre',app('lang'))}}</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        @endforeach
                       
                       
                       
                       
                      
                      
                    
                    </ul>
                </div>
                <div class="contact-box mb-4">
                    <h4>@lang('Contactez-nous') </h4>
                    <hr>
                    <div class="contact-title">
                        <i class="fas fa-phone-volume"></i>
                        <div class="contact-title_icon">
                            <p>@lang('Téléphone')</p>
                            <h6>{{Page::option('contact')->telephone}}</h6>
                        </div>
                    </div>
                    <div class="contact-title">
                        <i class="fas fa-envelope"></i>
                        <div class="contact-title_icon">
                            <p>@lang('Email')</p>
                            <h6>{{Page::option('contact')->email}}</h6>
                        </div>
                    </div>
                    <div class="contact-title">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="contact-title_icon">
                            <p>@lang('Adresse')</p>
                            <h6>{{Page::option('contact')->adresse}}</h6>
                        </div>
                    </div>
                </div>
             
               
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="service-detail_wrap">
                    <div class="service-detail_img">
                        <h2>{{$service->getTranslation('titre',app('lang'))}}</h2>
                        <img src="{{asset('storage/'.$service->image)}}" class="img-fluid" alt="#">
                       
                        <p> {!! $service->getTranslation('description',app('lang')) !!} </p>
                      
                       
                    </div>
                  
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!--//End Service Detail -->
 <!--==================== Counter ====================-->


@endsection