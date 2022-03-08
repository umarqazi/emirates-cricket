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
                <img src="{{ URL::asset('frontend/assets/images/right-arrow.png') }}" alt="">
                <a href="{{route('developments', array_search($development->type, config('developments')))}}" class="child-page">{{ $development ? $development->title : 'Development'}}</a>
            </p>
        </div>
    </div>

    <!--    main heading        -->
    <div class="container">
        <h1 class="main-heading">{{ $development ? $development->title : 'Development'}}</h1>
    </div>

    <!--   Teams Section     -->
    <div class="teams-section">
        <div class="container">
{{--            @if($development)--}}
{{--                <div class="team-content developement-child-page">--}}
{{--                    <a href="{{route('developments', array_search($development->type, config('developments')))}}" class="btn">{{$development->title}}</a>--}}
{{--                </div>--}}
{{--            @endif--}}

            @if(!empty($development->image))
                <div class="developement-images">
                    <div class="row no-gutters">
                        <img src="{{ asset('storage/uploads/development/'.$development->image) }}" class="developement-banner" alt="">
                    </div>
                </div>
            @endif

            @if(!empty($development->description))
                <div class="development-content">
                    {!! $development->description !!}
                </div>
            @endif

        </div>
    </div>

@endsection
