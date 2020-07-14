@extends('frontend.layout.master-frontend')

@section('content')

    <!--   top bar     -->
    @include('frontend.partials.top-bar')

    <!--  banner sldier      -->
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
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="red-box">
                                <h3>
                                    <img src="{{ URL::asset('frontend/assets/images/cricket.png') }}" alt="">
                                    <span>Development</span>
                                </h3>
                                <p>Emirates Cricket currently offers the region two development platforms...</p>
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="red-box">
                                <h3>
                                    <img src="{{ URL::asset('frontend/assets/images/teams.png') }}" alt="">
                                    <span>Fixtures</span>
                                </h3>
                                <p>Emirates Cricket's National Teams fixtures will be updated throughout...</p>
                                <a href="#" class="btn">Read More</a>
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
                    <div class="latest-news">
                        <div class="news-headinig">
                            <h2>Latest News</h2>
                            <a href="#" class="btn">View More</a>
                        </div>
                        <div class="news-slider slider-dots">
                            <div>
                                <div class="post-inner">
                                    <img src="{{ URL::asset('frontend/assets/images/marcus-wallis.png') }}" alt="">
                                    <p class="date">
                                        <a href="#">May 13, 2020</a>
                                    </p>
                                    <h5>Emirates Cricket Board appoints Subhan Ahmad as Advisor</h5>
                                    <p>Emirates Cricket Board (ECB) has today confirmed that Subhan Ahmad has been appointed as the Advisor</p>
                                    <p class="read-more">
                                        <a href="#">Read more</a>
                                    </p>
                                </div>
                            </div>

                            <div>
                                <div class="post-inner">
                                    <img src="{{ URL::asset('frontend/assets/images/craig-hughes.png') }}" alt="">
                                    <p class="date">
                                        <a href="#">May 14, 2020</a>
                                    </p>
                                    <h5>Official T10 League Management Statement</h5>
                                    <p>Clarification from T Ten Sports Management Chairman Shaji Ul Mulk on Abu Dhabi T10 & ICC ACU</p>
                                    <p class="read-more">
                                        <a href="#">Read more</a>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="post-inner">
                                    <img src="{{ URL::asset('frontend/assets/images/sefton-marks.png') }}" alt="">
                                    <p class="date">
                                        <a href="#">May 14, 2020</a>
                                    </p>
                                    <h5>Official T10 League Management Statement</h5>
                                    <p>Clarification from T Ten Sports Management Chairman Shaji Ul Mulk on Abu Dhabi T10 & ICC ACU</p>
                                    <p class="read-more">
                                        <a href="#">Read more</a>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="post-inner">
                                    <img src="{{ URL::asset('frontend/assets/images/craig-hughes.png') }}" alt="">
                                    <p class="date">
                                        <a href="#">May 14, 2020</a>
                                    </p>
                                    <h5>Official T10 League Management Statement</h5>
                                    <p>Clarification from T Ten Sports Management Chairman Shaji Ul Mulk on Abu Dhabi T10 & ICC ACU</p>
                                    <p class="read-more">
                                        <a href="#">Read more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

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
                    <div class="latest-news">
                        <div class="logo-sldier slider-dots">
                            <div>
                                <div class="logo-image">
                                    <img src="{{ URL::asset('frontend/assets/images/pacificLogo.png') }}" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="logo-image">
                                    <img src="{{ URL::asset('frontend/assets/images/pincent.png') }}" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="logo-image">
                                    <img src="{{ URL::asset('frontend/assets/images/virat.png') }}" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="logo-image">
                                    <img src="{{ URL::asset('frontend/assets/images/pacificLogo.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="twitter-cards">
                        <h6>
                            Tweets <span>by</span> <a href="#">@Emirates Cricket</a> <img src="{{ URL::asset('frontend/assets/images/twitter.png') }}" alt="">
                        </h6>
                        <div class="twitter-account-logo">
                            <img src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt="">
                            <h6>
                                UAE Cricket Official
                                <span>@EmiratesCricket</span>
                            </h6>
                        </div>
                        <div class="twitter-post-content mCustomScrollbar">
                            <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                            <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                            <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                        </div>
                    </div>

                    <div class="twitter-cards fb-post">
                        <h6>
                            Tweets <span>by</span> <a href="#">@Emirates Cricket</a> <img src="{{ URL::asset('frontend/assets/images/facebook.png') }}" alt="">
                        </h6>
                        <div class="twitter-account-logo">
                            <img src="{{ URL::asset('frontend/assets/images/logo.png') }}" alt="">
                            <h6>
                                UAE Cricket Official
                                <span>@EmiratesCricket</span>
                            </h6>
                        </div>
                        <div class="twitter-post-content mCustomScrollbar">
                            <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                            <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                            <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                        </div>
                    </div>

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
                            <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                            <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                            <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
