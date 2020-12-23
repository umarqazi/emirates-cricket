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
            @if(($pathway))
                <div class="team-content developement-child-page">
                    <a href="{{route('development-pathway')}}" class="btn">{{$pathway->title}}</a>
                </div>
            @endif

            @if(!empty($pathway->image))
                <div class="developement-images">
                    <div class="row no-gutters">
                        <img src="{{ asset('storage/uploads/development/'.$pathway->image) }}" class="developement-banner" alt="">
                    </div>
                </div>
            @endif

            @if(!empty($pathway->description))
                <div class="development-content">
                    {!! $pathway->description !!}
                </div>
            @endif
        </div>
    </div>

@endsection
