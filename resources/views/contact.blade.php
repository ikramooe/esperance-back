@extends('layouts.app')

@section('content')
<section class="space sub-header">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-6">
                <div class="sub-header_content">
                    <p>@lang('Contact')</p>
                    <h3></h3>
                    <span><i>@lang('Accueil') / @lang('contact')</i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sub-header_main">
                    <h2>@lang('Contact')</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-box">
                   
                    <div class="contact-title">
                        <h4>@lang('Informations de contact')</h4>
                        <i class="fas fa-phone-volume"></i>
                        <div class="contact-title_icon">
                            <p>@lang('Téléphone')</p>
                            <h6>{{Page::option('contact')->telephone}}</h6>
                            <h6>{{Page::option('contact')->telephone_2}}</h6>
                            <h6>{{Page::option('contact')->telephone_3}}</h6>
                        </div>
                    </div>
                    <div class="contact-title">
                        <i class="fas fa-envelope"></i>
                        <div class="contact-title_icon">
                            <p>@lang('Email')</p>
                            <h6>{{Page::option('contact')->email}}</h6>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="contact-box">
                    <div class="contact-title">
                        <h4>@lang('Adresse')</h4>
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="contact-title_icon">
                          
                            <h6>{{Page::option('contact')->adresse}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="get-in-touch get-in-touch-style2">
                    <img src="images/contact-form-bg.png" class="img-fluid get-in-bg" alt="#">
                    <h3>@lang('Contactez-nous')</h3>
                    <form action="#" method="POST" id="form">
                        <!-- REQUIRED: Your Access key here. Don't worry this can be public -->
                        <!-- Create your Access key here: https://web3forms.com/ -->
                        <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first name"
                                        placeholder="Nom" required>
                                    <i class="far fa-user"></i>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Prénom" placeholder="Prénom"
                                        required>
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email "
                                        placeholder="Email" required>
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="phone number"
                                        placeholder="Téléphone" required>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group textarea-icon">
                                    <textarea class="form-control" name="message" required
                                        placeholder="Message" id="" rows="3"></textarea>
                                    <i class="far fa-envelope"></i>
                                    <button type="submit" class="btn btn-success">Message</button>
                                </div>
                            </div>
                        </div>
                        <div id="result" class="text-white"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//End Contact Us -->
<!--==================== Map ====================-->
<section class="map">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-12">
                <iframe width="100%" height="450" id="gmap_canvas"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.223458493956!2d3.2890699745155385!3d36.7891923683222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e45ae37904d29%3A0x5ae21d736a73c354!2sClinique%20Ophtalmologique-%20L&#39;esperance%20Mayawi!5e0!3m2!1sen!2sdz!4v1703586310616!5m2!1sen!2sdz"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
           
        </div>
    </div>
</section>
<!--//End Map -->
<!--==================== Counter ====================-->


@endsection