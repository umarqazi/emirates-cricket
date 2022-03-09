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
                                <?php $loopMax = count($news);  ?>
                                @for($loop = 0; $loop < $loopMax; $loop++)
                                    <div>
                                        <div class="post-inner">

                                            <div class="row latest-news-wrapper">
                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}"
                                                   tabindex="0">
                                                    <div class="col-md-6">
                                                        <div class="latest-news-content">
                                                            <h5>{{ \Illuminate\Support\Str::limit($news[$loop]->headline,110) }} {{ $loop }}</h5>

                                                            <p class="date">
                                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}">{{date('F d, Y', strtotime($news[$loop]->date))}}</a>
                                                            </p>

                                                            <?php $loop++; ?>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}"
                                                   tabindex="0">
                                                    <div class="col-md-6">
                                                        <div class="latest-news-content">
                                                            <h5>{{ \Illuminate\Support\Str::limit($news[$loop]->headline,110) }} {{ $loop }}</h5>

                                                            <p class="date">
                                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}">{{date('F d, Y', strtotime($news[$loop]->date))}}</a>
                                                            </p>

                                                            <?php $loop++; ?>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}"
                                                   tabindex="0">
                                                    <div class="col-md-6">
                                                        <div class="latest-news-content">
                                                            <h5>{{ \Illuminate\Support\Str::limit($news[$loop]->headline,110) }} {{ $loop }}</h5>

                                                            <p class="date">
                                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}">{{date('F d, Y', strtotime($news[$loop]->date))}}</a>
                                                            </p>

                                                            <?php $loop++; ?>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}"
                                                   tabindex="0">
                                                    <div class="col-md-6">
                                                        <div class="latest-news-content">
                                                            <h5>{{ \Illuminate\Support\Str::limit($news[$loop]->headline,110) }} {{ $loop }}</h5>

                                                            <p class="date">
                                                                <a href="{{route('news-detail',[encodeData($news[$loop]->id)])}}">{{date('F d, Y', strtotime($news[$loop]->date))}}</a>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
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
