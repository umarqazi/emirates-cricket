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

            <!--       twitter slider         -->
            <div class="social-content">
                <h6>
                    Tweets <span>by</span> <a href="#">@Emirates Cricket</a> <i class="fa fa-twitter"></i>
                </h6>
                <div class="social-slider slider-dots">
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--      facebook sldier          -->
            <div class="social-content facebook-post">
                <h6>
                    Tweets <span>by</span> <a href="#">@Emirates Cricket</a> <i class="fa fa-facebook-square"></i>
                </h6>
                <div class="social-slider slider-dots">
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--      instagram sldier          -->
            <div class="social-content instagram-post">
                <h6>
                    Tweets <span>by</span> <a href="#">@Emirates Cricket</a>
                    <img src="{{ URL::asset('frontend/assets/images/instagram-slider.png') }}" alt="">
                </h6>
                <div class="social-slider slider-dots">
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
                                <p>We're BACK....BACK <a href="#">#ResponsibleTraining</a> <a href="#">@ICCAcademy</a>.</p>
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                                <img src="{{ URL::asset('frontend/assets/images/jeffrey.png') }}" class="twitter-image" alt="">
                                <p><a href="#">#UAE</a> <a href="#">#Cricket</a> <a href="#">#Men</a> are staggering their sessions, following safety protocols & processes while they stay 'finely-tuned' for the next #GameDay.</p>
                            </div>
                        </div>
                    </div>
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
    </div>

@endsection
