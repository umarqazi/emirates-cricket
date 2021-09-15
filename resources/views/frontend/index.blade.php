@extends('frontend.layout.master-frontend')

@section('title')
    <title>Home Page</title>
@endsection

@section('content')

    <!--   top bar     -->
    @include('frontend.partials.top-bar')

    <!--  banner sldier      -->
    @if(!$setting->images->isEmpty())
        <div class="banner-slider slider-dots">
            @foreach($setting->images as $image)
                <div>
                    <div class="slider-image">
                        <img src="{{ URL::asset('storage/uploads/homepage-slider/'.$setting->id.'/'.$image->name) }}"
                             alt="">
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="banner-slider slider-dots">
            <div>
                <div class="slider-image">
                    <img src="{{ URL::asset('frontend/assets/images/banner-slide1.png') }}" alt="">
                </div>
            </div>
            <div>
                <div class="slider-image">
                    <img src="{{ URL::asset('frontend/assets/images/banner-slide1.png') }}" alt="">
                </div>
            </div>
            <div>
                <div class="slider-image">
                    <img src="{{ URL::asset('frontend/assets/images/banner-slide1.png') }}" alt="">
                </div>
            </div>
            <div>
                <div class="slider-image">
                    <img src="{{ URL::asset('frontend/assets/images/banner-slide1.png') }}" alt="">
                </div>
            </div>
        </div>
    @endif

    <!-- banner content     -->
    <div class="banner-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="red-box">
                                <h3>
                                    <img src="{{ URL::asset('frontend/assets/images/teams.png') }}" alt="">
                                    <span>Teams</span>
                                </h3>
                                <p>The UAE senior Men's team is the team that represents the United Arab Emirates...</p>
                                <a href="{{route('team')}}" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="red-box">
                                <h3>
                                    <img src="{{ URL::asset('frontend/assets/images/cricket.png') }}" alt="">
                                    <span>Development</span>
                                </h3>
                                <p>Emirates Cricket currently offers the region two development platforms</p>
                                <a href="{{route('development')}}" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="red-box">
                                <h3>
                                    <img src="{{ URL::asset('frontend/assets/images/teams.png') }}" alt="">
                                    <span>Fixtures</span>
                                </h3>
                                <p>Emirates Cricket's National Teams fixtures will be updated throughout...</p>
                                <a href="{{route('fixtures')}}" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Post Section     -->
    <div class="post-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <!--   Latest News    -->
                    @if(!$news->isEmpty())
                        <div class="latest-news">
                            <div class="news-headinig">
                                <h2>Latest News</h2>
                                <a href="{{route('news')}}" class="btn">View More</a>
                            </div>
                            <div class="news-slider slider-dots">
                                @foreach($news as $eachNews)
                                    <div>
                                        <div class="post-inner">
                                            <a href="{{route('news-detail',[encodeData($eachNews->id)])}}" tabindex="0">
                                                <div class="row latest-news-wrapper">
                                                    <div class="col-md-6 latest-news-content"> 
                                                        <h5>{{ \Illuminate\Support\Str::limit($eachNews->headline,110) }}</h5>
                                                        <p class="date">
                                                            <a href="{{route('news-detail',[encodeData($eachNews->id)])}}">{{date('F d, Y', strtotime($eachNews->date))}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 latest-news-content">
                                                        <h5>{{ \Illuminate\Support\Str::limit($eachNews->headline,110) }}</h5>
                                                        <p class="date">
                                                            <a href="{{route('news-detail',[encodeData($eachNews->id)])}}">{{date('F d, Y', strtotime($eachNews->date))}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 latest-news-content"> 
                                                        <h5>{{ \Illuminate\Support\Str::limit($eachNews->headline,110) }}</h5>
                                                        <p class="date">
                                                            <a href="{{route('news-detail',[encodeData($eachNews->id)])}}">{{date('F d, Y', strtotime($eachNews->date))}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 latest-news-content"> 
                                                        <h5>{{ \Illuminate\Support\Str::limit($eachNews->headline,110) }}</h5>
                                                        <p class="date">
                                                            <a href="{{route('news-detail',[encodeData($eachNews->id)])}}">{{date('F d, Y', strtotime($eachNews->date))}}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                <!--     International news         -->
                    @if(!empty($international_news))
                        <div class="latest-news international-news">
                            <h2>International News</h2>
                            <div class="row">
                                @foreach($international_news as $int_news)
                                    <div class="col-md-6">
                                        <div class=" international-news-image international-news-wrapper">
                                            <a href="{{route('international-news-detail',[encodeData($int_news->id)])}}">
                                                
                                                <div class=" international-news-content">
                                                    <h4>{{\Illuminate\Support\Str::limit($int_news->title,150)}}</h4>
                                                    <!-- <p>{!! \Illuminate\Support\Str::limit($int_news->description, 200) !!}</p> -->
                                                    <p class="date">
                                                        <a href="{{route('international-news-detail',[encodeData($int_news->id)])}}">{{date('F d, Y', strtotime($eachNews->date))}}</a>
                                                    </p>
                                                    @if(false)
                                                        <div class="play-video-button">
                                                            <span><i class="fas fa-play"></i></span>
                                                            <span> 2:08</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                @foreach($international_news as $int_news)
                                    <div class="col-md-6">
                                        <div class=" international-news-image international-news-wrapper">
                                            <a href="{{route('international-news-detail',[encodeData($int_news->id)])}}">
                                                
                                                <div class=" international-news-content">
                                                    <h4>{{\Illuminate\Support\Str::limit($int_news->title,150)}}</h4>
                                                    <!-- <p>{!! \Illuminate\Support\Str::limit($int_news->description, 200) !!}</p> -->
                                                    <p class="date">
                                                        <a href="{{route('international-news-detail',[encodeData($int_news->id)])}}">{{date('F d, Y', strtotime($eachNews->date))}}</a>
                                                    </p>
                                                    @if(false)
                                                        <div class="play-video-button">
                                                            <span><i class="fas fa-play"></i></span>
                                                            <span> 2:08</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                <!--  Logo slider     -->
                    @if(!$sponsors->isEmpty())
                        <div class="latest-news">
                            <h2>Sponsors</h2>
                            <div class="logo-sldier slider-dots">
                                @foreach($sponsors as $sponsor)
                                    <div class="home-sponsers">
                                        <a href="{{$sponsor->website}}" target="_blank" class="btn">
                                            <div class="logo-image">
                                                <img
                                                    src="{{ URL::asset('storage/uploads/sponsor/'.$sponsor->id.'/'.$sponsor->image) }}"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="twitter-cards">
                                <a class="twitter-timeline" data-width="228" data-height="486" data-dnt="true"
                                   href="https://twitter.com/EmiratesCricket?ref_src=twsrc%5Etfw">Tweets by
                                    EmiratesCricket</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="twitter-cards fb-post">
                                <!--                        <div class="fb-page" data-href="https://www.facebook.com/emiratescricket" data-tabs="timeline"
                                                             data-width="232" data-height="493" data-small-header="true"
                                                             data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"
                                                             data-show-posts="true">
                                                            <div class="fb-xfbml-parse-ignore">
                                                                <blockquote cite="https://www.facebook.com/emiratescricket"><a
                                                                        href="https://www.facebook.com/emiratescricket">Emirates Cricket</a>
                                                                </blockquote>
                                                            </div>
                                                        </div>-->

                                <div class="fb-page" data-href="https://www.facebook.com/emiratescricket/"
                                     data-tabs="timeline"
                                     data-width="232" data-height="493" data-small-header="true"
                                     data-adapt-container-width="true" data-hide-cover="false"
                                     data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/emiratescricket/"
                                                class="fb-xfbml-parse-ignore">
                                        <a href="https://www.facebook.com/emiratescricket/">Emirates Cricket</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
