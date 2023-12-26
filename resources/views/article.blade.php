@extends('layouts.app')

@section('content')
<section class="space">
    <div class="container container-custom">
        <div class="row">
            <div class="col-md-8">
                <form action="#">
                    <div class="blog-list blog-deatil">
                        <img src="{{asset('storage/'.$article->image)}}" class="img-fluid" alt="#">
                       
                        <div class="blog-date">
                            <h5>{{ $article->created_at->format('d') }}</h5>
                            <p>{{ $article->created_at->format('M') }}</p>
                        </div>
                        <div class="blog-text-wrap border-0 pl-0 pr-0">
                            <div class="blog-comment-top border-0">
                              
                            </div>
                            <h2>{{$article->getTranslation('titre',app('lang'))}}</h2>
                          
                            <p>{!! $article->getTranslation('description',app('lang')) !!} </p>
                           
                        </div>
                    </div>
                 
                  
                </form>
            </div>
            <div class="col-md-4">

                <div class="blog-sidebar">
                    <div class="blog-sidebar_heading">
                        <h4>Derniers articles</h4>
                    </div>
                    <div class="blog-sidebar_wrap">
                        @foreach ($articles as $item)
                        <div class="blog-sidebar_content">
                            <a href="/articles/{{$item->slug}}" class="thumbnail-wrap">
                                <img src="{{asset('storage/'.$item->image)}}" alt="#">
                                <div class="thumbnail-hover">
                                    <i class="fas fa-external-link-alt"></i>
                                </div>
                            </a>
                            <div class="thumbnail-text_wrap">
                                <p>{{$item->getTranslation('titre',app('lang'))}}
                                </p>
                                <span>{{$item->created_at->format('d/m/Y')}}</span>
                            </div>
                        </div>
                        @endforeach
                       
                      
                    </div>
                </div>
               
              
                <div class="blog-sidebar">
                    <div class="blog-sidebar_heading">
                        <h4>@lang('Suivez-nous')</h4>
                    </div>
                    <div class="blog-sidebar_wrap">
                        <ul class="blog-sidebar_social">
                            <li>
                                <a href="{{Page::option('contact')->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{Page::option('contact')->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                           
                            <li>
                                <a href="{{Page::option('contact')->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<!--//End Blog List -->
 <!--==================== Counter ====================-->


@endsection