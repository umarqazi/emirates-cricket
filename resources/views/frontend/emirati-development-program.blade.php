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
            @if($emirati)
                <div class="team-content developement-child-page">
                    <a href="{{route('emirati-development-program')}}" class="btn">{{$emirati->title}}</a>
                </div>
            @endif

            @if(!empty($emirati->image))
                <div class="developement-images">
                    <div class="row no-gutters">
                        <img src="{{ asset('storage/uploads/development/'.$emirati->image) }}" class="developement-banner" alt="">
                    </div>
                </div>
            @endif

            @if(!empty($emirati->description))
                <div class="development-content">
                    {!! $emirati->description !!}
                </div>
            @endif

        </div>
    </div>

@endsection
