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
                        <img src="{{ URL::asset('storage/uploads/homepage-slider/'.$setting->id.'/'.$image->name) }}" alt="">
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
                                <p>Emirates Cricket currently offers the region two development platforms...</p>
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
                                            <img src="{{ URL::asset('storage/uploads/news/'.$eachNews->id.'/'.$eachNews->image) }}" alt="">
                                            <p class="date">
                                                <a href="#">{{date('M d, Y', strtotime($eachNews->created_at))}}</a>
                                            </p>
                                            <h5>{{$eachNews->title}}</h5>
                                            <p>{!! \Illuminate\Support\Str::limit($eachNews->text, 50) !!}</p>
                                            <p class="read-more">
                                                <a href="#">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                <!--     International news         -->
                    <div class="latest-news international-news">
                        <h2>International News</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="international-news-image">
                                    <img src="{{ URL::asset('frontend/assets/images/inernational_news.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="international-news-content">
                                    <h4>Media Accreditation Open For Asia Cup 2018</h4>
                                    <p>Media Accreditation is now open for the Asia Cup 2018. Accreditation is open for BONAFIDE media ONLY, application DOES NOT automatically give approval. Asia Cup management's decision on approvals and subsequent accreditation to cover the event is FINAL with no correspondence being entered into. The LAST DATE for submission is Wednesday 5th September 2018. Applications submitted after this date will not be entertained.FINAL with no correspondence being entered into. The LAST DATE for submission is Wednesday 5th September 2018. Applications submitted after this date will not be entertained.</p>
                                    <p class="read-more">
                                        <a href="#" tabindex="0">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  Logo slider     -->
                    @if(!$sponsors->isEmpty())
                        <div class="latest-news">
                            <div class="logo-sldier slider-dots">
                                @foreach($sponsors as $sponsor)
                                    <div>
                                        <div class="logo-image">
                                            <img src="{{ URL::asset('storage/uploads/sponsor/'.$sponsor->id.'/'.$sponsor->image) }}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-lg-3">
                    <div class="twitter-cards">
                        <a class="twitter-timeline" data-width="228" data-height="486" data-dnt="true" href="https://twitter.com/EmiratesCricket?ref_src=twsrc%5Etfw">Tweets by EmiratesCricket</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>

                    <div class="twitter-cards fb-post">
                        <div class="fb-page" data-href="https://www.facebook.com/wuwumagic/" data-tabs="timeline" data-width="232" data-height="493" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/wuwumagic/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/wuwumagic/">WuWu</a></blockquote></div>
                    </div>

                    @if(!empty($posts['instagram']))
                        <div class="twitter-cards insta-post">
                            <h6>
                                Tweets <span>by</span> <a href="#">@Emirates Cricket</a> <img src="{{ URL::asset('frontend/assets/images/instagram.png') }}" alt="">
                            </h6>
                            <div class="twitter-account-logo">
                                <img src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt="">
                                <h6>
                                    UAE Cricket Official
                                    <span>@EmiratesCricket</span>
                                </h6>
                            </div>
                            <div class="twitter-post-content mCustomScrollbar">
                                @php
                                    $data = json_decode($posts['instagram']['data']);
                                @endphp
                                <p>
                                    {{!empty($data->caption) ? $data->caption : ''}}
                                    <span>
                                        <a href="{{$data->permalink}}">Read More...</a>
                                    </span>
                                </p>
                                <a href="{{$data->permalink}}">
                                    @if(!empty($data->thumbnail_url))
                                        @if($data->media_type === "IMAGE")
                                            <img src="{{$data->thumbnail_url}}" class="twitter-image" alt="">
                                        @elseif($data->media_type === "VIDEO")
                                            <video width="208" height="208" controls>
                                                <source src="{{$data->media_url}}" type="video/mp4">
                                                <source src="{{$data->media_url}}" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    @endif
                                </a>
                            </div>
                        </div>
                    @endif

                    {{--<div class="twitter-cards insta-post">

                    </div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection
