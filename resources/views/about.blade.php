@extends('layouts.app')

@section('content')

<!--==================== News ====================-->
<section class="space-mb">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-6">
                <div class="video-play-text">
                    <span>@lang('Qui sommes nous')  -----</span>
                    @if(app('lang')=='fr')
                    <h2>{{json_decode(Page::get('titre'))->fr}}</h2>
                    <p>
                        {!! json_decode(Page::get('text'))->fr !!}
                    </p>
                    @else
                    <h2>{{json_decode(Page::get('titre'))->ar}}</h2>
                    <p>
                        {!! json_decode(Page::get('text'))->ar !!}
                    </p> 
                    @endif
                  
                    <hr />
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="news-img-block">
                    <img src="{{asset('storage/'.Page::get('image'))}}" class="img-fluid" alt="#" />
                 
                    <div id="video-overlay" class="video-overlay">
                        <a class="video-overlay-close">&times;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//End News -->
<!--==================== Our Mission ====================-->
<section class="space">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-4">
                <div class="mission-wrap">
                    @if(app('lang')=='fr')
                    <h3>{{json_decode(Page::get('titre_mission'))->fr}}</h3>
                    <p>{!! json_decode(Page::get('text_mission'))->fr !!}</p>
                    @else 
                    <h3>{{json_decode(Page::get('titre_mission'))->ar}}</h3>
                    <p>{!! json_decode(Page::get('text_mission'))->ar !!}</p>
                    @endif
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="mission-wrap">
                    @if(app('lang')=='fr')
                    <h3>{{json_decode(Page::get('titre_vision'))->fr}}</h3>
                    <p>{!! json_decode(Page::get('text_vision'))->fr !!}</p>
                    @else 
                    <h3>{{json_decode(Page::get('titre_vision'))->ar}}</h3>
                    <p>{!! json_decode(Page::get('text_vision'))->ar !!}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="mission-wrap">
                    @if(app('lang')=='fr')
                    <h3>{{json_decode(Page::get('titre_valeurs'))->fr}}</h3>
                    <p>{!! json_decode(Page::get('text_valeurs'))->fr !!}</p>
                    @else 
                    <h3>{{json_decode(Page::get('titre_valeurs'))->ar}}</h3>
                    <p>{!! json_decode(Page::get('text_valeurs'))->ar !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection