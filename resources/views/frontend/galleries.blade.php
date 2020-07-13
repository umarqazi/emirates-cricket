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
                <a href="{{route('galleries')}}" class="child-page">Gallery</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Gallery</h1>
    </div>

    <!--    gallery section    -->
    <div class="gallery-fodlers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="images-folder">
                        <div class="womens-team galleries">
                            <img src="{{ URL::asset('frontend/assets/images/womens-team.png') }}" alt="">
                        </div>
                        <p>UAE Cricket Leagues Women's T20 Final 2018 (images credit: Emirates Cricket)</p>
                        <div class="more-info">
                            <a href="#">
                                <img src="{{ URL::asset('frontend/assets/images/gallery.png') }}" class="gallery-icon" alt="">
                                <span>More</span>
                            </a>
                            <a href="#">May 9, 2020</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
