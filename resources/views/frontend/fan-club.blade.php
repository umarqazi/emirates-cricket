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
                <a href="{{route('fan-club')}}" class="child-page">Fan Club</a>
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
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="twitter-cards">
                        <a class="twitter-timeline" data-width="300" data-height="486" data-dnt="true" href="https://twitter.com/EmiratesCricket?ref_src=twsrc%5Etfw">Tweets by EmiratesCricket</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="twitter-cards fb-post">
                        <div class="fb-page" data-href="https://www.facebook.com/emiratescricket" data-tabs="timeline" data-width="310" data-height="493" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/emiratescricket"><a href="https://www.facebook.com/emiratescricket">Emirates Cricket</a></blockquote></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
