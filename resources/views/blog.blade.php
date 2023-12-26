@extends('layouts.app')

@section('content')
    <!-- Sub header -->
    <section class="space sub-header">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-header_content">
                        <p>@lang('BLOG') </p>
                        <h3></h3>
                        <span><i>@lang('Accueil') / @lang('Blog') </i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sub-header_main">
                        <h2>@lang('Blog') </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Sub header -->
    <!--//End Header -->
    <!--==================== Blog grid ====================-->
    <section class="space light">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                      
                        <h2>@lang('Les derniers articles')</h2>
                    </div>
                </div>
            </div>
         
            <div class="row">
                @foreach ($articles as $item)
                <div class="col-md-4">
                    <div class="blog-grid-wrap">
                        <div class="blog-grid-img">
                            <img src="{{asset('storage/'.$item->image)}}" class="img-fluid" alt="#">
                            <div class="blog-grid-date">
                                <h5>{{ $item->created_at->format('d') }}</h5>
                                <p>{{ $item->created_at->format('M') }}</p>
                            </div>
                        </div>
                        <div class="blog-grid_content">
                            <div class="blog-grid-top_icon">
                                <label>{{$item->categorie}}</label>
                              
                            </div>
                            <div class="blog-grid_text">
                                <a href="/articles/{{$item->slug}}">
                                    <h4>{{$item->getTranslation('titre',app('lang'))}}</h4>
                                </a>
                                <p>{{  mb_strimwidth(strip_tags($item->getTranslation('description',app('lang'))),0, 100,'') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
               
            </div>
          
        </div>
    </section>
    <!--//End Blog Grid -->
    <!--==================== Counter ====================-->

@endsection