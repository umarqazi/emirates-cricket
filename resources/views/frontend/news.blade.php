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
                <a href="{{route('news')}}" class="child-page">News</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">News</h1>
    </div>

    <!--  Post Section     -->
    <div class="post-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="latest-news international-news">

                        <div class="news-inner-content">
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

                        <div class="news-inner-content">
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

                        <div class="news-inner-content">
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

                        <div class="news-inner-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="international-news-image">
                                        <img src="{{ URL::asset('frontend/assets/images/inernational_news.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="international-news-content">
                                        <h4>Media Accreditation Open For Asia Cup 2018</h4>
                                        <p>Media Accreditation is now open for the Asia Cup 2018. Accreditation is open for BONAFIDE media ONLY, application DOES NOT automatically give approval. Asia Cup management's decision on approvals and subsequent accreditation to cover the event is FINAL with no correspondence being entered into. </p>
                                        <p>The LAST DATE for submission is Wednesday 5th September 2018. Applications submitted after this date will not be entertained.FINAL with no correspondence being entered into. The LAST DATE for submission is Wednesday 5th September 2018. Applications submitted after this date will not be entertained.</p>
                                        <p class="read-more">
                                            <a href="#" tabindex="0">Read more</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
