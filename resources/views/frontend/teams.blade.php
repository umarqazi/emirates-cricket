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
                <a href="{{route('team')}}" class="child-page">Teams</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">Teams</h1>
    </div>

    <!--   Teams Section     -->
    <div class="teams-section">
        <div class="container">
            <div class="team-content">
                <p>The UAE senior Men’s team is the team that represents the United Arab Emirates (UAE) in all official and unofficial cricket matches. UAE Men’s became an affiliate member of the International Cricket Council (ICC) in 1989 and an associate member in 1990. The UAE also gained ODI status, through to 2018.</p>
                <a href="{{ route('uae-men') }}" class="btn">UAE Men's</a>
            </div>
            <div class="team-content">
                <p>The UAE Women’s team is the team that represents the United Arab Emirates (UAE) in international and regional cricket matches. In July 2007, the UAE Women’s team made their international debut in the Asian Cricket Council’s (ACC) Women’s Tournament, which was played in Malaysia.</p>
                <a href="{{ route('uae-women') }}" class="btn">UAE Women's</a>
            </div>
            <div class="team-content">
                <p>The UAE Under 19 (U19’s) team is the team that represents the United Arab Emirates (UAE) in all U19 official and unofficial cricket matches. UAE’s U19’s recently competed in the 2015 ACC Premier Tournament where they finished 4th.</p>
                <a href="{{ route('under-19') }}" class="btn">UAE 19 Men's</a>
            </div>
        </div>
    </div>

@endsection
