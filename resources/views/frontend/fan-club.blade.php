@extends('frontend.layout.master-frontend')

@section('content')

    <!--   top bar     -->
    @include('frontend.partials.top-bar')

    <!--   Breadcrums     -->
    <div class="breadcrumb">
        <div class="container">
            <p>
                <a href="{{route('home')}}" class="paren-page">Main page</a>
                <img src="{{ URL::asset('frontend/assets/images/right-arrow.png') }}" alt="">
                <a href="#" class="first-parent">Social</a>
                <img src="{{ URL::asset('frontend/assets/images/right-arrow.png') }}" alt="">
                <a href="{{route('gallery')}}" class="child-page">Fan Club</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Fan Club</h1>
    </div>

    <!--   social section     -->
    <div class="social-section">
        <div class="container">
        @if(!empty($posts['twitter']))
            <!--       twitter slider         -->
                <div class="social-content">
                    <h6>
                        Tweets <span>by</span> <a href="#">@Emirates Cricket</a> <i class="fa fa-twitter"></i>
                    </h6>
                    <div class="social-slider slider-dots">
                        @foreach($posts['twitter'] as $twitter)
                            <div>
                                <div class="twitter-cards">
                                    <div class="twitter-account-logo">
                                        <img src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt="">
                                        <h6>
                                            UAE Cricket Official
                                            <span>@EmiratesCricket</span>
                                        </h6>
                                    </div>
                                    <div class="twitter-post-content mCustomScrollbar">
                                        @php
                                            $data = json_decode($twitter->data);
                                        @endphp
                                        <p>
                                            {{!empty($data->text) ? $data->text : ''}}
                                            <span>
                                                <a href="{{!empty($data->permalink_url) ? $data->permalink_url : '#'}}"> Read More...</a>
                                            </span>
                                        </p>
                                        <a href="{{!empty($data->permalink_url) ? $data->permalink_url : '#'}}">
                                            @if(!empty($data->entities->media))
                                                <img src="{{$data->entities->media[0]->media_url_https}}" class="twitter-image" alt="">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        @endif

        @if(!empty($posts['facebook']))
            <!--      facebook sldier          -->
                <div class="social-content facebook-post">
                    <h6>
                        Tweets <span>by</span> <a href="#">@Emirates Cricket</a> <i class="fa fa-facebook-square"></i>
                    </h6>
                    <div class="social-slider slider-dots">
                        @foreach($posts['facebook'] as $facebook)
                            <div>
                                <div class="twitter-cards">
                                    <div class="twitter-account-logo">
                                        <img src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt="">
                                        <h6>
                                            UAE Cricket Official
                                            <span>@EmiratesCricket</span>
                                        </h6>
                                    </div>
                                    <div class="twitter-post-content mCustomScrollbar">
                                        @php
                                            $data = json_decode($facebook->data);
                                        @endphp
                                        <p>
                                            {{!empty($data->message) ? $data->message : ''}}
                                            <span>
                                                <a href="{{$data->permalink_url}}">Read More...</a>
                                            </span>
                                        </p>
                                        <a href="{{$data->permalink_url}}">
                                            @if(!empty($data->full_picture))
                                                <img src="{{$data->full_picture}}" class="twitter-image" alt="">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        @endif

        @if(!empty($posts['instagram']))
            <!--      instagram sldier          -->
                <div class="social-content instagram-post">
                    <h6>
                        Tweets <span>by</span> <a href="#">@Emirates Cricket</a>
                        <img src="{{ URL::asset('frontend/assets/images/instagram-slider.png') }}" alt="">
                    </h6>
                    <div class="social-slider slider-dots">
                        @foreach($posts['instagram'] as $instagram)
                            <div>
                                <div class="twitter-cards">
                                    <div class="twitter-account-logo">
                                        <img src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt="">
                                        <h6>
                                            UAE Cricket Official
                                            <span>@EmiratesCricket</span>
                                        </h6>
                                    </div>
                                    <div class="twitter-post-content mCustomScrollbar">
                                        @php
                                            $data = json_decode($instagram->data);
                                        @endphp
                                        <p>
                                            {{!empty($data->caption) ? $data->caption : ''}}
                                            <span>
                                            <a href="{{$data->permalink}}">Read More...</a>
                                        </span>
                                        </p>
                                        <a href="{{$data->permalink}}">
                                            @if(!empty($data->media_url))
                                                @if($data->media_type === "IMAGE")
                                                    <img src="{{$data->media_url}}" class="twitter-image" alt="">
                                                @elseif($data->media_type === "VIDEO")
                                                    <video width="282" height="282" controls>
                                                        <source src="{{$data->media_url}}" type="video/mp4">
                                                        <source src="{{$data->media_url}}" type="video/ogg">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
