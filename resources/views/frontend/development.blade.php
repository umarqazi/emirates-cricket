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
                <h4>{!! Str::limit($emiratiheading, 200) !!}</h4>
                <a href="{{route('emirati-development-program')}}" class="btn">Emirati Development Programme</a>
            </div>
            <div class="team-content">
                <h4>{!! Str::limit($pathwayheading, 200) !!}</h4>
                <a href="{{route('development-pathway')}}" class="btn">Development Pathway</a>
            </div>
        </div>
    </div>

@endsection
