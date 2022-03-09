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
            @if(isset($developments))
                @foreach($developments as $dev)
                    <div class="team-content">
                        <a href="{{route('developments', array_search($dev->type, config('developments')))}}" class="btn">{{ $dev->title }}</a>
                            {!! $dev->heading !!}
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
