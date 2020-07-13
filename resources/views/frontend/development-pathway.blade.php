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
                <a href="{{route('development')}}" class="child-page">Development</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Development</h1>
    </div>

    <!--   Teams Section     -->
    <div class="teams-section">
        <div class="container">
            <div class="team-content">
                <h4>The UAE Women’s team is the team that represents the United Arab Emirates (UAE) in international and regional cricket matches. In July 2007, the UAE Women’s team made their international debut in the Asian Cricket Council’s (ACC) Women’s Tournament, which was played in Malaysia.</h4>
                <a href="{{route('development-pathway')}}" class="btn">Development Pathway</a>
            </div>
            <div class="developement-images">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="cricket-images">
                            <img src="{{ URL::asset('frontend/assets/images/development-4.jpg') }} " alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cricket-images">
                            <img src="{{ URL::asset('frontend/assets/images/development-5.jpg') }} " alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="development-content">
                <p>We want the game of cricket to be as accessible as possible to everyone living in the UAE.</p>
                <p>Emirates Cricket has worked very hard in creating a comprehensive player pathway in which every player, no matter their skill set, gender or race can participate and grow in the game of cricket.</p>
                <p>We believe the development pathway provides a unique opportunity to progress from grass roots cricket to potentially becoming a UAE National player and provides a player with some clarity on where they fit in.</p>
                <p>The development pathway is about letting everyone know where their opportunities lie in cricket and how we, Emirates Cricket, can help progress their involvement in the game.</p>
                <p>The pathway has a strong focus on talent identification and includes the important new initiatives of the National Inter Council U16, U19 and Open tournaments. These tournaments allow the best players from the region to represent their emirate for possible national team selection.</p>
                <p>In addition to this, plans are underway in creating a national academy to support the talent identification aspect of the programme. For more information about the Development Pathway contact Emirates Cricket’s National Development Manager, Andrew Russell via email: <a href="mailto:andrew.russell@emiratescricket.com">andrew.russell@emiratescricket.com</a></p>
            </div>

        </div>
    </div>

@endsection
