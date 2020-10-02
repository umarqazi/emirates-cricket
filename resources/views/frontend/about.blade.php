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
                <a href="{{route('about-us')}}" class="child-page">About</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">About</h1>
    </div>

    <!--     Team section       -->
    <div class="team-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="board-members">
                    <img src="{{asset('frontend/assets/images/about-us.jpg')}}">
                </div>
            </div>
        </div>
    </div>

@endsection
